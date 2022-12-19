<?php

namespace App\Http\Controllers\API\QR;

use App\Helpers\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\Company\Company;
use App\Models\Table\Table;
use Illuminate\Http\Response;

class QRController extends Controller
{
    public function table(Company $company, Table $table)
    {
      if ($table->company_id != $company->id) {
        return response()->json((new JsonResponse())->fail('Geçersiz İstek', Response::HTTP_UNPROCESSABLE_ENTITY));
      }

      return response()->json((new JsonResponse())->success(['company_id' => $company->id, 'table_id' => $table->id, 'table_name' => $table->name], Response::HTTP_OK));
    }
}
