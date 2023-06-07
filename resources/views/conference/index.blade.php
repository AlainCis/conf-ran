@extends('layouts.app')
@include('layouts.navigation')
@section('content')
<div class="container-fluid h-custom"><br>
    {{-- <div class="row d-flex justify-content-center align-items-center h-100"> --}}
        @if (session()->has("message"))
            <div class="alert alert-secondary" role="alert">
                {{ sesion()->get('message') }}
            </div>
        @endif
        <div class="row row-cols-1 row-cols-md-3 g-4">
          @forelse ($conferences as $conference)
            <div class="col">
              <div class="card h-100">
                <i class="fa-thin fa-calendar-days"></i>
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                  <h5 class="card-title">{{ $conference->orateur }}</h5>
                  <p class="card-text">
                    {{ $conference->thematique }}
                    <br>
                    {{ $conference->organisateur }}
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">{{ $conference->dateconf }}</small><br>
                  <a type="button" href="{{ route('reservation.new',['conference'=>$conference]) }}" class="btn btn-success">Réservez</a>
                  @if (Auth::user()->role=='admin')
                    <button type="button" class="btn btn-primary">Editer</button>
                    <button type="button" class="btn btn-info">Détails</button>
                  @endif
                </div>
              </div>
            </div>
          @empty
          <div class="card w-100">
            <div class="card-body">
              <h5 class="card-title">Avertissement</h5>
              <p class="card-text">
                <h2>Aucune conférence programée ! Restez en attente</h2>
              </p>
            </div>
          </div>
          @endforelse
        </div>
    </div>
  {{-- </div> --}}
@endsection