@extends('layouts.app')
@include('layouts.navigation')
@section('content')
<div class="container-fluid h-custom">
    {{-- <div class="row d-flex justify-content-center align-items-center h-100"> --}}
        @if (session()->has("message"))
            <div class="alert alert-secondary" role="alert">
                {{ sesion()->get('message') }}
            </div>
        @endif
        <table class="table container">
          <thead>
            <tr>
              <th scope="col">N°</th>
              <th scope="col">Date</th>
              <th scope="col">Name</th>
              <th scope="col">status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($reservations as $reservation)
              <tr>
                <th scope="row">{{ $reservation->id }}</th>
                <td>{{ $reservation->datereservation }}</td>
                <td>{{ $reservation->user->name }}</td>
                <td>{{ $reservation->status }}</td>
                <td>
                  <a type="button" href="{{route('reservation.valider',['reservation'=>$reservation])}}" class="btn btn-primary">Valider</a>
                  <a type="button" href="#" class="btn btn-info">Détails</a>
                  <a type="button" href="{{route('reservation.valider',['reservation'=>$reservation])}}" class="btn btn-danger">Annuler</a>
                </td>
              </tr>  
            @empty
            <div class="card w-100">
              <div class="card-body">
                <h5 class="card-title">Avertissement</h5>
                <p class="card-text">
                  <h2>Aucune reservation en attente !</h2>
                </p>
              </div>
            </div>
            @endforelse
          </tbody>
        </table>
    {{-- </div> --}}
  </div>
@endsection