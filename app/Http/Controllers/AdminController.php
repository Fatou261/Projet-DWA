<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Demande;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $adm = Auth::user()->id;
        $demandes = Demande::all()->where('user_id', Auth::user()->id);
        $trait = DB::table('demandes')->where('statut', 3)->Where('admin_id', $adm)->count();
        $rej = DB::table('demandes')->where('statut', 0)->Where('admin_id', $adm)->count();
        $enc = DB::table('demandes')->where('statut', 2)->Where('admin_id', $adm)->count();
        $enatt = DB::table('demandes')->where('statut', 1)->Where('admin_id', $adm)->count();


        $demandes = Demande::all()->where('statut', 1);
        $traites = Demande::all()->where('admin_id', Auth::user()->id)->where('statut', 3);
        $rejets = Demande::all()->where('admin_id', Auth::user()->id)->where('statut', 0);
        $encours = Demande::all()->where('admin_id', Auth::user()->id)->where('statut', 2);
        return view('demande.tdb', compact('demandes', 'encours', 'rejets', 'traites', 'trait', 'rej', 'enc', 'enatt'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('administrateur.createAdmin');
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

            'name' => 'required',
            'email' => 'required'


        ]);
        // Instatiation de tache a partir du formulaire
        $admin = new Admin($request->all());


        // Identifier l'id d'un utilisateur dans phpMyAdmin et l'associer a l'utilisateur
          //$admin->user_id = Auth::user()->id;
        //$demande->auth()->user()->name;

        $admin->saveOrFail();
        /*if ($request->user()->role === 'admin')
            return redirect()->route('demande.index');
        else*/
        //Mail::to(User::all()->where('role','admin'))->send(new SendNewDemandeMail($demande));
        return view('home_admin');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
