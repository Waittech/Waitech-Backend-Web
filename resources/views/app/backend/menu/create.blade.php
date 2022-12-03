@extends('app.layouts.contentNavbarLayout')

@section('title', 'Ürün Ekle - Menü')

@section('content')
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Ürün Ekle</span>
  </h4>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <form action="{{ route('backend.menu.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <hr class="my-0">
          <div class="card-body">
            <div class="row">
              <div class="mb-3 col-md-6">
                <label class="form-label" for="category">Kategoriler</label>
                <select id="category" name="category_id" class="select2 form-select">
                  <option value="">Seçiniz</option>
                  @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
                @error('category_id')
                <div class="error">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3 col-md-6">
                <label class="form-label" for="food">Ürünler</label>
                <select id="food" name="food_id" class="select2 form-select">
                  <option value="">Seçiniz</option>
                  @foreach($foods as $food)
                    <option value="{{ $food->id }}">{{ $food->name }}</option>
                  @endforeach
                </select>
                @error('food_id')
                <div class="error">{{ $message }}</div>
                @enderror
              </div>

              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Kaydet</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
  </div>
@endsection
