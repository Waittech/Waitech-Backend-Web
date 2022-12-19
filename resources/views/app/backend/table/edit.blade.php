@extends('app/layouts/contentNavbarLayout')

@section('title', 'Tables - Add')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Masalar /</span> Masa Ekle
</h4>

<div class="card">
  <form action="{{ route('backend.table.update', [$table->id]) }}" method="post" enctype="multipart/form-data">
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
          <label for="name" class="form-label">Masa Adı</label>
          <input class="form-control" type="text" id="name" name="name" value="{{ $table->name }}" required autofocus />
          @error('name')
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
