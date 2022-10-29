@extends('app/layouts/blankLayout')

@section('title', 'Giriş Yap')

@section('page-style')
  <!-- Page -->
  <link rel="stylesheet" href="{{asset('app/assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('content')
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="{{ route('frontend.index') }}" class="app-brand-link gap-2">
                <img src="{{ asset('app/assets/img/logo.png') }}" height="60">
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">{{ env('APP_NAME') }}'e Hoşgeldiniz! 👋</h4>
            <p class="mb-4">Lütfen hesabınıza giriş yapın ve maceraya başlayın</p>

            <form id="formAuthentication" class="mb-3" action="{{ route('frontend.auth.login') }}" method="POST">
              @csrf

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="E-mail adresinizi giriniz" autofocus>
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Şifre</label>

                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Giriş Yap</button>
              </div>
            </form>

            <p class="text-center">
              <span>Platformumuzda yeni misin?</span>
              <a href="{{ route('frontend.auth.register') }}">
                <span>Hesap oluştur</span>
              </a>
            </p>
          </div>
        </div>
      </div>
      <!-- /Register -->
    </div>
  </div>
  </div>
@endsection
