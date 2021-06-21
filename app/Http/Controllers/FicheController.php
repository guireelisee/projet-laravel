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
        return view('create');
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
        return view('edit',compact('fiche'));
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
        // dd($request);

        if (!empty($request->sp_instructions)) {
            $fiche->update(['sp_instructions' => $request->sp_instructions]);
        }
        if(!empty($request->sp_instructions) && !empty($request->dir_instructions)) {
            $fiche->update([
                'sp_instructions' => $request->sp_instructions,
                'dir_instructions' => $request->dir_instructions
            ]);
        }
        if(!empty($request->sp_instructions) && !empty($request->dir_instructions) && !empty($request->proposition)) {
            $fiche->update([
                'sp_instructions' => $request->sp_instructions,
                'dir_instructions' => $request->dir_instructions,
                'proposition' => $request->proposition
            ]);
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
}
