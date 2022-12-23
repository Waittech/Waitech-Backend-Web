@extends('app/layouts/contentNavbarLayout')

@section('title', 'Foods - Update')

@section('content')
<ul class="nav nav-pills flex-column flex-md-row mb-3">
<li class="nav-item"><a class="nav-link" href="{{ route('backend.company.index') }}"><i class="bx bx-link-alt me-1"></i> Firma Bilgileri</a></li>
@can('view accounts')
  <li class="nav-item"><a class="nav-link" href="{{ route('backend.user.index') }}"><i class="bx bx-user me-1"></i> Çalışanlar</a></li>
@endcan
@can('manage accounts')
  <li class="nav-item"><a class="nav-link" href="{{ route('backend.user.create') }}"><i class="bx bx-link-alt me-1"></i> Çalışan Ekle</a></li>
@endcan
</ul>

<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Çalışanlar /</span> Çalışan Bilgileri Güncelle
</h4>

<div class="card">
  <form action="{{ route('backend.user.update', [$user->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Account -->
    <div class="card-body">
      @if (session()->has('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif

      @if (session()->has('error'))
        <div class="alert alert-success">
          {{ session('error') }}
        </div>
      @endif
        <div class="row">
          <div class="mb-3 col-md-6">
            <label for="name" class="form-label">Çalışan Adı</label>
            <input class="form-control" type="text" id="name" name="name" value="{{ $user->name }}" autofocus />
            @error('name')
              <div class="error">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3 col-md-6">
            <label class="form-label" for="email">Email</label>
            <div class="input-group input-group-merge">
              <input type="text" id="email" name="email" value="{{ $user->email }}" class="form-control"  />
            </div>
            @error('email')
              <div class="error">{{ $message }}</div>
            @enderror
          </div>

           <div class="mb-3 col-md-6">
            <label class="form-label" for="password">Şifre</label>
            <div class="input-group input-group-merge">
              <input type="text" id="password" name="password" value="{{ $user->password }}" class="form-control" />
            </div>
            @error('vat_rate')
              <div class="error">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">

            <label class="form-label" for="role">Durum</label>
              <select id="role" name="role" class="select2 form-select" >
              @if ($roles)
      @foreach($roles as $role)
         <option {{ ((old('roles') == $role->id) or (isset($user) and $user->roles->pluck('id')->contains($role->id)) ) ? 'selected' : null }} value="{{$role->id}}">{{$role->name}}</option>
      @endforeach
    @endif
              </select>
            @error('status')
              <div class="error">{{ $message }}</div>
            @enderror
          </div>

          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Kaydet</button>
          </div>
        </div>
      </form>


</div>
@endsection
