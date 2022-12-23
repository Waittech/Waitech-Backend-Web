@extends('app/layouts/contentNavbarLayout')

@section('title', 'Orders - Edit')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Siparişler /</span> Sipariş Düzenle
</h4>

<div class="card">
  <form action="{{ route('backend.order.update', [$order->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      @if (session()->has('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif

      @if (session()->has('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
      @endif

      <div class="row">
        <div class="mb-3 col-md-6">
          <label for="userName" class="form-label">Müşteri</label>
          <input class="form-control" type="text" id="userName" name="user_name" value="{{ $order->user->name }}" disabled />
        </div>

        <div class="mb-3 col-md-6">
          <label for="tableName" class="form-label">Masa</label>
          <select id="tableName" name="table_id" class="select2 form-select">
            <option value="">Seçiniz</option>
            @foreach($tables as $table)
              <option value="{{ $table->id }}" @selected($order->table_id == $table->id)>{{ $table->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="mb-3 col-md-6">
          <label for="totalPrice" class="form-label">Toplam Fiyat</label>
          <input class="form-control" type="text" id="totalPrice" name="total_price" value="₺ {{ $order->formatted_price }}" disabled />
        </div>

        <div class="mb-3 col-md-6">
          <label for="status" class="form-label">Sipariş Durumu</label>
          <select id="status" name="status" class="select2 form-select">
            @foreach($order->status_texts  as $key => $text)
              <option value="{{ $key }}" @selected($order->status == $key) @disabled($order->status == \App\Enums\Order\OrderStatus::CANCELED_BY_USER || $key == \App\Enums\Order\OrderStatus::CANCELED_BY_USER)>{{ $text }}</option>
            @endforeach
          </select>
        </div>

        <div class="mb-3 col-md-6">
          <label for="note" class="form-label">Not</label>
          <textarea class="form-control" id="note" name="note" disabled>{{ $order->note }}</textarea>
        </div>

        <div class="table-responsive text-nowrap overflow-visible">
          <table class="table table-bordered">
            <thead>
            <tr>
              <th>Sipariş Adı</th>
              <th>Sipariş Miktarı</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->foods as $food)
              <tr>
                <td>{{ $food->name }}</td>
                <td>{{ $food->pivot->amount }}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>

        <div class="mt-2">
          <button type="submit" class="btn btn-primary me-2">Kaydet</button>
        </div>
      </div>
    </form>
</div>
@endsection
