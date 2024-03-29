<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use App\Models\Livre;
use Illuminate\Http\Request;

class BiblioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livres = Livre::with('auteur')->get();
        return view('biblio.index', compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auteurs = Auteur::all();
        return view('biblio.create', compact('auteurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $titre=$request->titre;
        $date_publication=$request->date_publication;
        $prix=$request->prix;
        $auteur_id=$request->auteur_id;
        $livre=new Livre();
        $livre->titre=$titre;
        $livre->date_publication=$date_publication;
        $livre->prix=$prix;
        $livre->auteur_id=$auteur_id;
        $livre->save();

        return redirect()->route('bibliotheques.index')->with('success', 'Livre créé avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function show(Livre $livre)
    {
        $livre->load('auteur');
        return view('biblio.show', compact('livre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Livre  $livre
     * @return \Illuminate\Http\Response
     */

    public function edit(Livre $livre)
    {
        $auteurs = Auteur::all();
        $livre->load('auteur');
        return view('biblio.edit', compact('livre', 'auteurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livre $livre)
    {
        $titre=$request->titre;
        $date_publication=$request->date_publication;
        $prix=$request->prix;
        $auteur_id=$request->auteur_id;
        $livre=new Livre();
        $livre->titre=$titre;
        $livre->date_publication=$date_publication;
        $livre->prix=$prix;
        $livre->auteur_id=$auteur_id;
        $livre->update();

        return redirect()->route('bibliotheques.index')->with('success', 'Livre mis à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livre $livre)
    {
        dd($livre);
        $livre->delete();
        return redirect()->route('bibliotheques.index')->with('success', 'Livre supprimé avec succès!');
    }
}
