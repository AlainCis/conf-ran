<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;
use App\Http\Requests\ConferenceRequest;

class ConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("conference.index",["conferences"=>Conference::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("conference.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ConferenceRequest $request)
    {
        $validated = $request->validated();
        if ($validated) {
            Conference::firstOrCreate($request->validated());
            return redirect()->route("conference.index")->with("msg","Conférence créée avec succès !");
        }else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Conference $conference)
    {
        return view("conference.show",["conference"=>$conference]);
    }

    // public function details(Conference $conference)
    // {
    //     return view("conference.details",["conference"=>$conference]);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conference $conference)
    {
        return view("conference.edit",["conference"=>$conference]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ConferenceRequest $request, Conference $conference)
    {
        $validated = $request->validated();
        if ($validated) {
            $conference->update($request->validated());
            return redirect(route("conference.index"))->with("message","Conférence actualisée avec succès !");
        }else {
            return redirect()->back()->withErrors($validated)->witInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conference $conference)
    {
        if ($conference->delete()) {
            return redirect(route("conference.index"))->with("msg","Conférence supprimée avec succès !");
        }
    }
}
