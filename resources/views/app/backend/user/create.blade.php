@extends('app/layouts/contentNavbarLayout')

@section('title', 'Users - Add')

@section('content')
<ul class="nav nav-pills flex-column flex-md-row mb-3">
<li class="nav-item"><a class="nav-link" href="{{ route('backend.company.index') }}"><i class="bx bx-link-alt me-1"></i> Firma Bilgileri</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('backend.user.index') }}"><i class="bx bx-user me-1"></i> Çalışanlar</a></li>
<li class="nav-item"><a class="nav-link active" href="{{ route('backend.user.create') }}"><i class="bx bx-link-alt me-1"></i> Çalışan Ekle</a></li>
</ul>   
   
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Çalışanlar /</span> Çalışan Ekle
</h4>

<div class="card">
  <form action="{{ route('backend.user.store') }}" method="post" enctype="multipart/form-data">
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
            <input class="form-control" type="text" id="name" name="name" autofocus />
            @error('name')
              <div class="error">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3 col-md-6">
            <label class="form-label" for="userEmail">Email</label>
            <div class="input-group input-group-merge">
              <input type="text" id="userEmail" name="email" class="form-control" />
            </div>
            @error('email')
              <div class="error">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Şifre</label>

                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>

           <div class="mb-3 col-md-6">
           <label class="form-label" for="role">Yetki</label>
                <select id="role" name="role_id" class="select2 form-select">
                  <option value="">Seçiniz</option>
                  @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                  @endforeach
                </select>
                @error('role_id')
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