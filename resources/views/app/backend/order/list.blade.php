@extends('app/layouts/contentNavbarLayout')

@section('title', 'Orders - List')

@section('content')
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Siparişler /</span> Liste
  </h4>

  <div class="card">
    <h5 class="card-header">Sipariş Listesi</h5>
    <div class="card-body">
      @if($errors->has('error_message'))
        <div class="alert alert-danger">{{ $errors->first('error_message') }}</div>
      @endif
        @if($errors->has('success_message'))
          <div class="alert alert-success">{{ $errors->first('success_message') }}</div>
        @endif
      <div class="table-responsive text-nowrap overflow-visible">
        <table class="table table-bordered">
          <thead>
          <tr>
            <th>ID</th>
            <th>Masa Adı</th>
            <th>Müşteri Adı</th>
            <th>Durum</th>
            <th>Fiyat</th>
            <th>Saat</th>
            <th>Tarih</th>
            <th>Edit</th>
          </tr>
          </thead>
          <tbody>
          @foreach($orders as $order)
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>#{{ $order->id }}</strong></td>
              <td>{{ $order->table->name }}</td>
              <td>{{ $order->user->name }}</td>
              <td><button class="btn border-radius btn-{{ $order->status_color }}">{{ $order->status_text }}</button></td>
              <td>₺ {{ $order->formatted_price }}</td>
              <td>{{ $order->created_time }}</td>
              <td>{{ $order->created_date }}</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('backend.order.edit', [$order->id]) }}"><i class="bx bx-edit-alt me-1"></i> Görüntüle</a>
                    <a class="dropdown-item" href="{{ route('backend.order.destroy', [$order->id]) }}"><i class="bx bx-trash me-1"></i> İptal Et</a>
                  </div>
                </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
        <div class="mt-3 d-flex justify-content-end">{{ $orders->links() }}</div>
    </div>
  </div>
@endsection
