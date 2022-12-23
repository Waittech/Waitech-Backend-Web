@extends('app/layouts/contentNavbarLayout')

@section('title', 'Tables - List')

@section('content')
  @can('manage table')
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link active" href="{{ route('backend.table.create') }}"><i class="bx bx-link-alt me-1"></i> Masa Ekle</a></li>
    </ul>
  @endcan
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Masalar /</span> Liste
  </h4>

  <div class="card">
    <h5 class="card-header">Masa Listesi</h5>
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
            <th>QR Kodu</th>
            @can('manage table')
              <th>Edit</th>
            @endcan
          </tr>
          </thead>
          <tbody>
          @foreach($tables as $table)
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>#{{ $table->id }}</strong></td>
              <td>{{ $table->name }}</td>
              <td><a href="{{ route('backend.table.qr', [$table->id]) }}" target="_blank">QR</a></td>
              @can('manage table')
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('backend.table.edit', [$table->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="{{ route('backend.table.destroy', [$table->id]) }}"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              @endcan
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
