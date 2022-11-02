<?php

namespace App\Http\Controllers\Backend\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
      return 'company index';
    }
}
