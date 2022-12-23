<?php

namespace App\Http\Controllers\Backend;

use App\Enums\Order\OrderStatus;
use App\Models\Company\Company;

class HomeController
{
    public function index()
    {
        $company_id = session()->get('company_id');
        $company = Company::find($company_id);

        $newOrderCount = $company->orders()->newOrderCount();
        $preparedOrderCount = $company->orders()->preparedOrderCount();
        $deliveredOrderCount = $company->orders()->deliveredOrderCount();

        $dailyOrderCount = $company->orders()->dailyOrderCount();
        $dailyEarnings = $company->orders()->dailyEarnings();

        $newOrders = $company->orders()->where('status', OrderStatus::NEW)->orderBy('created_at', 'DESC')->take(10)->get();
        $customerCanceledOrders = $company->orders()->where('status', OrderStatus::CANCELED_BY_USER)->orderBy('created_at', 'DESC')->take(10)->get();
        $companyCanceledOrders = $company->orders()->where('status', OrderStatus::CANCELED_BY_COMPANY)->orderBy('created_at', 'DESC')->take(10)->get();

        return view(
          'app.backend.dashboard',
          compact(
            'newOrderCount',
            'preparedOrderCount',
            'deliveredOrderCount',
            'dailyOrderCount',
            'dailyEarnings',
            'newOrders',
            'customerCanceledOrders',
            'companyCanceledOrders'
          ));
    }
}
