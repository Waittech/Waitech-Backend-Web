@extends('app/layouts/contentNavbarLayout')

@section('title', 'Foods - List')

@section('content')
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Ürünler /</span> Liste
  </h4>

  <div class="card">
    <h5 class="card-header">Ürün Listesi</h5>
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
            <th>Ürün Adı</th>
            <th>Satış Fiyatı</th>
            <th>Durum</th>
            <th>Edit</th>
          </tr>
          </thead>
          <tbody>
          @foreach($foods as $food)
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>#{{ $food->id }}</strong></td>
              <td>{{ $food->name }}</td>
              <td>{{ $food->sales_price }}</td>
              <td><span @class(['badge', 'me-1', 'bg-label-primary' => $food->status, 'bg-label-warning' => !$food->status])>{{ $food->status_text }}</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('backend.food.edit', [$food->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                    <a class="dropdown-item" href="{{ route('backend.food.destroy', [$food->id]) }}"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <div class="mt-3 d-flex justify-content-end">{{ $foods->links() }}</div>
    </div>
  </div>
@endsection
