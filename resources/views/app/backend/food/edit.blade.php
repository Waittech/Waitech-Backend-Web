@extends('app/layouts/contentNavbarLayout')

@section('title', 'Foods - Update')

@section('content')
  <ul class="nav nav-pills flex-column flex-md-row mb-3">
  <li class="nav-item"><a class="nav-link" href="{{ route('backend.food.index') }}"><i class='bx bx-list-ul' ></i> Ürün Listesi</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('backend.food.create') }}"><i class='bx bx-plus-circle'></i> Ürün Ekle</a></li>
   </ul>

<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Ürünler /</span> Ürün Güncelle
</h4>

<div class="card">
  <form action="{{ route('backend.food.update', [$food->id]) }}" method="post" enctype="multipart/form-data">
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
            <label for="name" class="form-label">Ürün Adı</label>
            <input class="form-control" type="text" id="name" name="name" value="{{ $food->name }}" autofocus />
            @error('name')
              <div class="error">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3 col-md-6">
            <label class="form-label" for="salesPrice">Satış Fiyatı</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text">₺</span>
              <input type="text" id="salesPrice" name="sales_price" value="{{ $food->sales_price }}" class="form-control"  />
            </div>
            @error('sales_price')
              <div class="error">{{ $message }}</div>
            @enderror
          </div>

           <div class="mb-3 col-md-6">
            <label class="form-label" for="vatRate">KDV Değeri</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text"></span>
              <input type="text" id="vatRate" name="vat_rate" value="{{ $food->vat_rate }}" class="form-control" />
            </div>
            @error('vat_rate')
              <div class="error">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3 col-md-6">
            <label for="description" class="form-label">Ürün Açıklaması</label>
            <textarea class="form-control" id="description" name="description">{{ $food->description }}</textarea>
            @error('description')
              <div class="error">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label" for="status">Durum</label>

              <select id="status" name="status" class="select2 form-select" >
                <option value="0" @selected($food->status==0)>Pasif</option>
                <option value="1" @selected($food->status==1)>Aktif</option>
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
