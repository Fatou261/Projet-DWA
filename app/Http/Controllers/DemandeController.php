<?php

namespace App\Http\Controllers;


use App\Mail\SendNewDemandeMail;
use App\Models\Demande;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\DB;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demandes = Demande::all()->where('user_id', Auth::user()->id);
        return view('demande.liste', compact('demandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view('demande.formulaire');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation du formulaire
        $request->validate([

            'objet' => 'required',
            'description' => 'required'

        ]);
        // Instatiation de tache a partir du formulaire
        $demande = new Demande($request->all());

        // Identifier l'id d'un utilisateur dans phpMyAdmin et l'associer a l'utilisateur
          $demande->user_id = Auth::user()->id;

        //$demande->auth()->user()->name;

        $demande->saveOrFail();
        /*if ($request->user()->role === 'admin')
            return redirect()->route('demande.index');
        else*/
        Mail::to(User::all()->where('role','admin'))->send(new SendNewDemandeMail($demande));
        return redirect()->route('demande.index');



    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function show(Demande $demande)
    {
        return view('demande.show', compact('demande'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function edit(Demande $demande)
    {

            $demande->statut = $demande->statut+1;
            $demande->admin_id = Auth::user()->id;
            $demande->save();


        return redirect('demande.tdb');


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demande $demande,$id)

    {




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demande $demande)
    {

        $demande->statut = $demande->statut + 1;
        $demande->admin_id = Auth::user()->id;
        $demande->deleteOrFail();


    }
    /*
    public function traites()
    {
        $adm = Auth::user()->id;
        $demandes = Demande::all()->where('user_id', Auth::user()->id);
        $traiter = DB::table('demandes')->where('statut', 3)->Where('user_id', $adm)->count();
        $rejet = DB::table('demandes')->where('statut', 0)->Where('user_id', $adm)->count();
        $encours = DB::table('demandes')->where('statut', 2)->Where('user_id', $adm)->count();
        $enattent = DB::table('demandes')->where('statut', 1)->Where('user_id', $adm)->count();

        return view('demande.tdb', compact('demandes', 'traiter', 'rejet', 'encours','enattent'));
    }
    */

}
