@extends('app/layouts/contentNavbarLayout')

@section('title', 'Firma Ayarları - Firma')

@section('page-script')
  <script src="{{asset('app/assets/js/pages-account-settings-account.js')}}"></script>
  <script src="{{asset('app/assets/backend/js/company/index.js')}}"></script>
@endsection

@section('content')
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Firma Ayarları</span>
  </h4>

  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills flex-column flex-md-row mb-3">
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('app/pages/account-settings-notifications')}}"><i class="bx bx-bell me-1"></i> Notifications</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('app/pages/account-settings-connections')}}"><i class="bx bx-link-alt me-1"></i> Connections</a></li>
      </ul>
      <div class="card mb-4">
        <form action="{{ route('backend.company.update') }}" method="post" enctype="multipart/form-data">
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
            <h5 class="">Firma Kapak Fotoğrafı</h5>

          <div class="d-flex align-items-start align-items-sm-center gap-4">
            <img src="{{ $company->cover_image ?? asset('app/assets/img/avatars/default_company.png') }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
            <div class="button-wrapper">
              <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                <span class="d-none d-sm-block">Fotoğraf Yükle</span>
                <i class="bx bx-upload d-block d-sm-none"></i>
                <input type="file" id="upload" class="account-file-input" name="cover_image" hidden accept="image/png, image/jpg, image/jpeg" />
              </label>
              <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                <i class="bx bx-reset d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Reset</span>
              </button>

            </div>
            @error('cover_image')
              <div class="error">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <hr class="my-0">
        <div class="card-body">
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Firma Adı</label>
                <input class="form-control" type="text" id="name" name="name" value="{{ $company->name }}" autofocus />
                @error('name')
                  <div class="error">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3 col-md-6">
                <label class="form-label" for="phoneNumber">Telefon Numarası</label>
                <div class="input-group input-group-merge">
                  <span class="input-group-text">TR (+90)</span>
                  <input type="text" id="phoneNumber" name="phone_number" class="form-control" placeholder="553 217 0919" value="{{ $company->phone_number }}" />
                </div>
                @error('phone_number')
                  <div class="error">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3 col-md-6">
                <label for="firstName" class="form-label">Firma Açıklaması</label>
                <textarea class="form-control" id="description" name="description">{{ $company->description }}</textarea>
                @error('description')
                  <div class="error">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3 col-md-6">
                <label class="form-label" for="country">Ülke</label>
                <select id="country" name="country_id" class="select2 form-select">
                  <option value="">Seçiniz</option>
                  @foreach($countries as $country)
                    <option value="{{ $country->id }}" @disabled($country->id != 212) @selected($company->country_id == $country->id)>{{ $country->name }}</option>
                  @endforeach
                </select>
                @error('country_id')
                  <div class="error">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3 col-md-6">
                <label class="form-label" for="city" data-city-id="{{ $company->city_id }}">Şehir</label>
                <select id="city" name="city_id" class="select2 form-select">
                  <option value="">Seçiniz</option>
                  @foreach($cities as $city)
                    <option value="{{ $city->id }}" @selected($company->city_id == $city->id)>{{ $city->name }}</option>
                  @endforeach
                </select>
                @error('city_id')
                  <div class="error">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3 col-md-6">
                <label class="form-label" for="district">İlçe</label>
                <select id="district" name="district_id" class="select2 form-select">
                  <option value="">Seçiniz</option>
                  @foreach($districts as $district)
                    <option value="{{ $district->id }}" @selected($company->district_id == $district->id) data-city-id="{{ $district->city_id }}">{{ $district->name }}</option>
                  @endforeach
                </select>
                @error('district_id')
                  <div class="error">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3 col-md-6">
                <label for="neighborhoodName" class="form-label">Mahalle</label>
                <input class="form-control" type="text" name="neighborhood_name" id="neighborhoodName" value="{{ $company->neighborhood_name }}" />
                @error('neighborhood_name')
                  <div class="error">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3 col-md-6">
                <label for="streetName" class="form-label">Sokak</label>
                <input class="form-control" type="text" name="street_name" id="streetName" value="{{ $company->street_name }}" />
                @error('street_name')
                  <div class="error">{{ $message }}</div>
                @enderror
              </div>

              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Kaydet</button>
              </div>
            </div>
          </form>
        </div>
        <!-- /Account -->
      </div>
      <!--<div class="card">
        <h5 class="card-header">Delete Account</h5>
        <div class="card-body">
          <div class="mb-3 col-12 mb-0">
            <div class="alert alert-warning">
              <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
              <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
            </div>
          </div>
          <form id="formAccountDeactivation" onsubmit="return false">
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" />
              <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
            </div>
            <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
          </form>
        </div>
      </div>-->
    </div>
  </div>
@endsection
