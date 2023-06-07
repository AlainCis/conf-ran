<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::where('status','EN ATTENTE')->orWhere('status','ANNULER')->get();
        return view('reservation.index',["reservations"=>$reservations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Conference $conference)
    {
        return view('reservation.create',['conference'=>$conference]);
    }
    public function new(Conference $conference)
    {
        return view('reservation.create',['conference'=>$conference]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequest $request)
    {
        $validated = $request->validated();
        if ($validated) {
            Reservation::firstOrCreate($request->validated());
            return redirect()->route("conference.index")->with("msg","Reservation créée avec succès !");
        }else {
            return redirect()->back()->withErrors($validated)->witInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        return view("reservation.show",["reservation"=>$reservation]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    /**
     * Validation d'une reservation
     */
    public function valider(Reservation $reservation){
        $reservation->status = "VALIDER";
        $reservation->save();
        return redirect()->back()->with("msg","Reservation créée annulée succès !");
    }
    /**
     * Annulation d'une reservation
     */
    public function annuler(Reservation $reservation){
        $reservation->status = "ANNULER";
        $reservation->save();
        return redirect()->back()->with("msg","Reservation créée annulée succès !");
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
