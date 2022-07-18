@extends('layouts.auth')
@section('content')
@section('title', 'Login')

<div class="authentication-wrapper authentication-basic container-p-y">
  <div class="authentication-inner">
    <div class="card">
      <div class="card-body"> 
        <div class="app-brand justify-content-center">
          <a href="{{route('dashboard.index')}}" class="app-brand-link gap-2">
            <img src="/assets/img/provider/logo.png" alt="Logo" style="width: 180px;">
          </a>
        </div>

        <h4 class="mb-2">Login</h4>
        <p class="mb-4">Please login to your account and start the adventure</p>

        @if(session('error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          {{session('error')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form action="{{route('auth.loginPost')}}" id="formAuthentication" class="mb-3" action="index.html" method="POST">
          @csrf 
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
              type="text"
              class="form-control"
              id="email"
              name="email"
              value="{{old('email')}}"
              placeholder="Enter your email address"
              autofocus
            />
          </div>
          <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="password">Password</label>
            </div>
            <div class="input-group input-group-merge">
              <input
                type="password"
                id="password"
                class="form-control"
                name="password"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password"
              />
              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember-me" />
              <label class="form-check-label" for="remember-me"> Remember Me </label>
            </div>
          </div>
          <div class="mb-3">
            <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
          </div>
        </form>
 
      </div>
    </div> 
  </div>
</div>

@endsection