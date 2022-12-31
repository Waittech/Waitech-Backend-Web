<?php

namespace App\Http\Controllers\API\Company;

use App\Helpers\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\MenuResource;
use App\Models\Company\Company;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
      $companies = Company::orderBy('id', 'DESC')->limit(15)->get();

      return response()->json((new JsonResponse())->success(CompanyResource::collection($companies), Response::HTTP_OK));
    }

    public function show(Request $request, Company $company)
    {
      $company->menus = true;

      return response()->json((new JsonResponse())->success(new CompanyResource($company), Response::HTTP_OK));
    }
}
