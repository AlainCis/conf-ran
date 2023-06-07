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
        <form action="{{ route('reservation.store') }}" method="POST">
            @csrf
            @method('POST')
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">CREEZ UNE RESERVATION</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input name="user_id" hidden  value="{{ Auth::user()->id }}"  id="form3Example3" class="form-control form-control-lg"
              placeholder="user_id" />
            <label class="form-label" for="form3Example3">Nom <br> {{ Auth::user()->name }}</label>
            
            @error('user_id')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input name="datereservation" hidden  value="{{ now() }}" id="form3Example3" class="form-control form-control-lg"
              placeholder="datereservation" />
            <label class="form-label" for="form3Example3">Reservez le </label><br>
            {{ now() }}
            @error('datereservation')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input name="conference_id" hidden value="{{ $conference->id }}" id="form3Example3" class="form-control form-control-lg"
              placeholder="Conférence" />
            <label class="form-label" for="form3Example3">Conférence :</label><br>
            {{ $conference->thematique }}
            @error('conference_id')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <textarea name="attente" value="{{ old('attente') }}" id="form3Example3" class="form-control form-control-lg"
              placeholder="Attente"></textarea>
            <label class="form-label" for="form3Example3"></label>
            @error('attente')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
            <input hidden name="status" value="EN ATTENTE" id="form3Example3" class="form-control form-control-lg"
              placeholder="status" />
          </div>
          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection