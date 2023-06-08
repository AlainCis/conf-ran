@extends('layouts.app')
@include('layouts.navigation')
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
        <form action="{{ route('conference.store') }}" method="POST">
            @csrf
            @method('POST')
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">NOUVELLE CONFERENCE</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input name="thematique" value="{{ old('thematique') }}" id="form3Example3" class="form-control form-control-lg"
              placeholder="Thématique" />
            <label class="form-label" for="form3Example3">Thématique</label>
            @error('thematique')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input name="orateur" value="{{ old('orateur') }}" id="form3Example3" class="form-control form-control-lg"
              placeholder="orateur" />
            <label class="form-label" for="form3Example3">Orateur</label>
            @error('orateur')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input name="organisateur" value="{{ old('organisateur') }}" id="form3Example3" class="form-control form-control-lg"
              placeholder="Organisateur" />
            <label class="form-label" for="form3Example3">Organisateur</label>
            @error('organisateur')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input name="lieu" value="{{ old('lieu') }}" id="form3Example3" class="form-control form-control-lg"
              placeholder="Lieu" />
            <label class="form-label" for="form3Example3">Lieu</label>
            @error('lieu')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input name="dateconf" type="date" value="{{ old('dateconf') }}"  id="form3Example3" class="form-control form-control-lg"
              placeholder="Date conférence" />
            <label class="form-label" for="form3Example3">Date conférence</label>
            @error('dateconf')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
          </div>
          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection