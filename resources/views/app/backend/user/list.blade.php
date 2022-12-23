@extends('app/layouts/contentNavbarLayout')

@section('title', 'Users - List')

@section('content')
<ul class="nav nav-pills flex-column flex-md-row mb-3">
<li class="nav-item"><a class="nav-link" href="{{ route('backend.company.index') }}"><i class="bx bx-link-alt me-1"></i> Firma Bilgileri</a></li>
@can('view accounts')
  <li class="nav-item"><a class="nav-link active" href="{{ route('backend.user.index') }}"><i class="bx bx-user me-1"></i> Çalışanlar</a></li>
@endcan
@can('manage accounts')
  <li class="nav-item"><a class="nav-link" href="{{ route('backend.user.create') }}"><i class="bx bx-link-alt me-1"></i> Çalışan Ekle</a></li>
@endcan
</ul>
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Çalışanlar /</span> Liste
  </h4>

  <div class="card">
    <h5 class="card-header">Çalışan Listesi</h5>
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
            <th>Çalışan Adı</th>
            <th>Email</th>
            <th>Yetki</th>
            @can('manage accounts')
              <th>Edit</th>
            @endcan
          </tr>
          </thead>
          <tbody>
          @foreach($users as $user)
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>#{{ $user->id }}</strong></td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ implode(', ' , $user->getRoleNames()->toArray()) }}</td>
              @can('manage accounts')
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('backend.user.edit', [$user->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="{{ route('backend.user.destroy', [$user->id]) }}"><i class="bx bx-trash me-1"></i> Delete</a>
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
