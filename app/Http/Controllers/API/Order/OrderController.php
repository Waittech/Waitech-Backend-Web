<?php

namespace App\Http\Controllers\API\Order;

use App\Helpers\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Order\OrderStoreRequest;
use App\Http\Resources\OrderResource;
use App\Models\Order\Order;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', auth()->user()->id)->orderBy('status', 'ASC')->orderBy('created_at', 'DESC')->paginate(10);

        return OrderResource::collection($orders)->additional(additional_json_success_arr());
    }

    public function show(Order $order)
    {
        return (new OrderResource($order))->additional(additional_json_success_arr());
    }

    public function store(OrderStoreRequest $request)
    {
        $data = $request->validated();
        $order = null;

        DB::transaction(function() use ($data, &$order){
            $data['status'] = 0;

            $order = Order::create(Arr::except( $data, ['foods']));
            $order->foods()->sync($data['foods']);
        });

        if ($order != null) {
          return (new OrderResource($order))->additional(additional_json_success_arr());
        }

        return response()->json((new JsonResponse())->fail('', Response::HTTP_UNPROCESSABLE_ENTITY));
    }
}
