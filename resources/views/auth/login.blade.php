@extends('layouts.app')
@section('content')
<div class="container-fluid h-custom">
    
    <div class="row d-flex justify-content-center align-items-center h-100">
        @if (session()->has("message"))
            <div class="alert alert-secondary" role="alert">
                {{ sesion()->get('message') }}
            </div>
        @endif
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="{{route('auth.dologin')}}" method="POST">
            @csrf
            @method('POST')
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Login</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input name="email" type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Email" />
            <label class="form-label" for="form3Example3">Email</label>
            @error('email')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input name="password" type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Mot de passe" />
            <label class="form-label" for="form3Example4">Mot de passe</label>
            @error('password')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" @disabled(true) type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Se souvenir de moi
              </label>
            </div>
            <a href="#!" class="text-body">Mot de passe oublié ?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Vous n'avez pas de compte ? <a href="{{ route('auth.register') }}"
                class="link-danger">Créez Un Compte</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection