<?php

namespace App\Http\Controllers;

use App\Models\Fiche;
use Illuminate\Http\Request;

class FicheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fiches = Fiche::all();
        return view('index', compact('fiches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fiches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_exp' => 'required',
            'prenom_exp' => 'required',
        ]);
        Fiche::create($request->all());
        return redirect()->route('fiche.index')->with('success','Demande enregistrée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fiche  $fiche
     * @return \Illuminate\Http\Response
     */
    public function show(Fiche $fiche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fiche  $fiche
     * @return \Illuminate\Http\Response
     */
    public function edit(Fiche $fiche)
    {
        return view('fiches.edit',compact('fiche'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fiche  $fiche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fiche $fiche)
    {

        // Mise à jour de l'instruction du SP
        if (!empty($request->sp_instructions) && !isset($request->dir_instructions)) {
            $fiche->update(['sp_instructions' => $request->sp_instructions]);
        }

        // Mise à jour de l'instruction du Directeur
        if(!empty($request->sp_instructions) && !empty($request->dir_instructions)) {
            $fiche->update(['dir_instructions' => $request->dir_instructions]);
        }

        // Mise à jour de l'instruction de la scolarité
        if(!empty($request->sp_instructions) && !empty($request->dir_instructions) && !empty($request->proposition)) {
            $fiche->update(['proposition' => $request->proposition]);
        }

        return redirect()->route('fiche.index')->with('success','Validation réussie.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fiche  $fiche
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fiche $fiche)
    {
        //
    }

    // public function compteur()
    // {
    //     $fiche = Fiche::where('sp_instructions','')->get()->count();
    //     dd($fiche);
    // }
}
