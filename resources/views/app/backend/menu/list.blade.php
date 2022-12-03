@extends('app/layouts/contentNavbarLayout')

@section('title', 'Menu - List')

@section('content')
  <h4 class="fw-bold py-3 mb-4">
    Menu
  </h4>
  @if($errors->has('error_message'))
    <div class="alert alert-danger">{{ $errors->first('error_message') }}</div>
  @endif
  @if($errors->has('success_message'))
    <div class="alert alert-success">{{ $errors->first('success_message') }}</div>
  @endif
  <ul class="nav nav-pills flex-column flex-md-row mb-3">
    <li class="nav-item"><a class="nav-link active" href="{{ route('backend.menu.create') }}"><i class="bx bx-link-alt me-1"></i>Ürün Ekle</a></li>
  </ul>
  @foreach($menus as $menu)
    <div class="card mb-3">
      <h5 class="card-header">{{ $menu->first()->category->name }}</h5>
      <div class="card-body">
        <div class="table-responsive text-nowrap overflow-visible">
          <table class="table table-bordered">
            <thead>
            <tr>
              <th>ID</th>
              <th>Ürün Adı</th>
              <th>Satış Fiyatı</th>
              <th>Durum</th>
              <th>Aksiyon</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($menu as $row)
              <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>#{{ $row->id }}</strong></td>
                <td>{{ $row->food->name }}</td>
                <td>{{ $row->food->sales_price }}</td>
                <td><span @class(['badge', 'me-1', 'bg-label-primary' => $row->food->status, 'bg-label-warning' => !$row->food->status])>{{ $row->food->status_text }}</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('backend.menu.destroy', [$row->id]) }}"><i class="bx bx-trash me-1"></i> Kaldır</a>
                    </div>
                  </div>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
  @endforeach
@endsection
