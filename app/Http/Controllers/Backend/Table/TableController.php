<?php

namespace App\Http\Controllers\Backend\Table;

use App\Http\Controllers\Controller;
use App\Http\Requests\Table\TableStoreRequest;
use App\Models\Table\Table;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TableController extends Controller
{
    public function index()
    {
        $company_id = session()->get('company_id');
        $tables = Table::where('company_id', $company_id)->orderBy('name')->get();

        return view('app.backend.table.list', compact('tables'));
    }

    public function create()
    {
        return view('app.backend.table.create');
    }

    public function store(TableStoreRequest $request)
    {
        $data = $request->validated();
        $company_id = session()->get('company_id');
        $data['company_id'] = $company_id;

        Table::create($data);

        return response()->redirectToRoute('backend.table.index')->with('success', 'Masa başarıyla eklenmiştir.');
    }

    public function edit(Table $table)
    {
        return view('app.backend.table.edit', compact('table'));
    }

    public function update(TableStoreRequest $request, Table $table)
    {
        $data = $request->validated();
        $table->update($data);

        return back()
          ->with('success', 'Masa başarıyla güncellendi.');
    }

    public function destroy(Table $table)
    {
        if ($table->company_id != session()->get('company_id')) {
          return back()->withErrors([
            'error_message' => 'Masa silinirken hata!',
          ]);
        }

        $table->delete();

        return back()->withErrors([
          'success_message' => 'Masa başarıyla silindi',
        ]);
    }

    public function qr(Table $table)
    {
        $company_id = session()->get('company_id');
        $url = config('app.url'). "/api/company/$company_id/table/$table->id";
        return QrCode::size(500)->generate($url);
    }
}
