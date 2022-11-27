@extends('app/layouts/blankLayout')

@section('title', 'Register Basic - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('app/assets/vendor/css/pages/page-auth.css')}}">
@endsection


@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">

      <!-- Register Card -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{ url('/') }}" class="app-brand-link gap-2">
              <img src="{{ asset('app/assets/img/logo.png') }}" height="60">
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Hemen aramıza katıl 🚀</h4>
          <p class="mb-4">Kaydını oluştur ve hemen başla!</p>

          <form id="formAuthentication" class="mb-3" action="{{ route('frontend.auth.register') }}" method="POST">
            @csrf
            <input type="hidden" name="is_company" value="1">
            <div class="mb-3">
              <label for="username" class="form-label">Firma Adı</label>
              <input type="text" class="form-control" id="companyname" name="company_name" placeholder="Firma Adını Giriniz" autofocus>
              @error('company_name')
                <div class="error">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Ad Soyad</label>
              <input type="text" class="form-control" id="username" name="name" placeholder="Adınızı ve Soyadınızı giriniz">
              @error('name')
                <div class="error">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="E-mail adresiniz">
              @error('email')
                <div class="error">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password">Şifre</label>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
              @error('password')
              <div class="error">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" required>
                <label class="form-check-label" for="terms-conditions">
                  <a href="javascript:void(0);"> Kullanıcı sözleşmesi</a>'ni okudum onaylıyorum.
                </label>
              </div>
            </div>
            <button class="btn btn-primary d-grid w-100">
              Kayıt Ol
            </button>
          </form>

          <p class="text-center">
            <span>Hesabınız var mı?</span>
            <a href="{{ route('frontend.auth.login.form') }}">
              <span>Giriş yap</span>
            </a>
          </p>
        </div>
      </div>
    </div>
    <!-- Register Card -->
  </div>
</div>
</div>
@endsection
