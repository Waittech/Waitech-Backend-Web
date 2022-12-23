@extends('app/layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
  <link rel="stylesheet" href="{{asset('app/assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
  <script src="{{asset('app/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
  <script src="{{asset('app/assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')
  <div class="row">
    <div class="col-12 order-1">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="{{asset('app/assets/img/icons/unicons/chart-success.png')}}" alt="chart success" class="rounded">
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Yeni Sipariş</span>
              <h3 class="card-title mb-2">{{ $newOrderCount }}</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="{{asset('app/assets/img/icons/unicons/chart-success.png')}}" alt="chart success" class="rounded">
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Teslim Edilmeyi Bekleyen</span>
              <h3 class="card-title mb-2">{{ $preparedOrderCount }}</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="{{asset('app/assets/img/icons/unicons/chart-success.png')}}" alt="chart success" class="rounded">
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Teslim Edilmiş</span>
              <h3 class="card-title mb-2">{{ $deliveredOrderCount }}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 order-2">
      <div class="row">
        <div class="col-md-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                  <div class="card-title">
                    <h5 class="text-nowrap mb-2">Sipariş Sayısı</h5>
                    <span class="badge bg-label-warning rounded-pill">Bugün</span>
                  </div>
                  <div class="mt-sm-auto">
                    <h3 class="mb-0">{{ $dailyOrderCount }}</h3>
                  </div>
                </div>
                <div id="profileReportChart"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                  <div class="card-title">
                    <h5 class="text-nowrap mb-2">Toplam Kazanç</h5>
                    <span class="badge bg-label-warning rounded-pill">Bugün</span>
                  </div>
                  <div class="mt-sm-auto">
                    <h3 class="mb-0">₺ {{ $dailyEarnings }}</h3>
                  </div>
                </div>
                <div id="profileReportChart"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- New Orders -->
    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
      <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between pb-0">
          <div class="card-title mb-0">
            <h5 class="m-0 me-2">Yeni Siparişler</h5>
            <small class="text-muted">Son 10 Tanesi</small>
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <div id="orderStatisticsChart"></div>
          </div>
          <ul class="p-0 m-0">
            @foreach($newOrders as $order)
              <li class="d-flex mb-4 pb-1 overflow-hidden">
                <a href="{{ route('backend.order.edit', [$order->id]) }}">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-basket'></i></span>
                  </div>
                </a>
                <div class="d-flex flex-column w-100 flex-wrap gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">{{ $order->user->name }}</h6>
                    <small class="text-muted" style="white-space: nowrap;">
                      @foreach($order->foods as $food)
                        {{ $food->pivot->amount . ' x ' . $food->name }}@if(!$loop->last),@endif
                      @endforeach
                    </small>
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">₺ {{ $order->formatted_price }}</small>
                  </div>
                </div>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    <!-- New Orders -->

    <!-- Customer Canceled -->
    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
      <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between pb-0">
          <div class="card-title mb-0">
            <h5 class="m-0 me-2">Müşterilerin İptalleri</h5>
            <small class="text-muted">Son 10 Tanesi</small>
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <div id="orderStatisticsChart"></div>
          </div>
          <ul class="p-0 m-0">
            @foreach($customerCanceledOrders as $order)
              <li class="d-flex mb-4 pb-1 overflow-hidden">
                <a href="{{ route('backend.order.edit', [$order->id]) }}">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-danger"><i class='bx bxs-user-x'></i></span>
                  </div>
                </a>
                <div class="d-flex flex-column w-100 flex-wrap gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">{{ $order->user->name }}</h6>
                    <small class="text-muted" style="white-space: nowrap;">
                      @foreach($order->foods as $food)
                        {{ $food->pivot->amount . ' x ' . $food->name }}@if(!$loop->last),@endif
                      @endforeach
                    </small>
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">₺ {{ $order->formatted_price }}</small>
                  </div>
                </div>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    <!-- Customer Canceled -->

    <!-- Company Canceled -->
    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
      <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between pb-0">
          <div class="card-title mb-0">
            <h5 class="m-0 me-2">Firmanın İptalleri</h5>
            <small class="text-muted">Son 10 Tanesi</small>
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <div id="orderStatisticsChart"></div>
          </div>
          <ul class="p-0 m-0">
            @foreach($companyCanceledOrders as $order)
              <li class="d-flex mb-4 pb-1 overflow-hidden">
                <a href="{{ route('backend.order.edit', [$order->id]) }}">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-danger"><i class='bx bx-shield-x'></i></span>
                  </div>
                </a>
                <div class="d-flex flex-column w-100 flex-wrap gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">{{ $order->user->name }}</h6>
                    <small class="text-muted" style="white-space: nowrap;">
                      @foreach($order->foods as $food)
                        {{ $food->pivot->amount . ' x ' . $food->name }}@if(!$loop->last),@endif
                      @endforeach
                    </small>
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">₺ {{ $order->formatted_price }}</small>
                  </div>
                </div>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    <!-- Company Canceled -->
  </div>
@endsection
