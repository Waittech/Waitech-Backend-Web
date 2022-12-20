<?php

namespace App\Http\Controllers\Backend\Order;

use App\Enums\Order\OrderStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Order\OrderUpdateRequest;
use App\Models\Order\Order;
use App\Models\Table\Table;

class OrderController extends Controller
{
    public function index()
    {
        $company_id = session()->get('company_id');
        $orders = Order::where('company_id', $company_id)->orderBy('status', 'ASC')->orderBy('created_at', 'DESC')->paginate(10);

        return view('app.backend.order.list', compact('orders'));
    }

    public function edit(Order $order)
    {
        $company_id = session()->get('company_id');
        $tables = Table::where('company_id', $company_id)->get();

        return view('app.backend.order.edit', compact('order', 'tables'));
    }

    public function update(OrderUpdateRequest $request, Order $order)
    {
        $data = $request->validated();
        $order->update($data);

        return back()
          ->with('success', 'Sipariş başarıyla güncellendi.');
    }

    public function destroy(Order $order)
    {
        if ($order->company_id != session()->get('company_id')) {
          return back()->withErrors([
            'error_message' => 'Sipariş iptal edilirken hata!',
          ]);
        }

        $order->update(['status' => OrderStatus::CANCELED_BY_COMPANY]);

        return back()->withErrors([
          'success_message' => 'Sipariş başarıyla iptal edildi',
        ]);
    }
}
