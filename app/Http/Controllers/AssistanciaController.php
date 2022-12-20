<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Demande;
use App\Models\User;

class AssistanciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $adm = Auth::user()->id;
        //$admins=User::all()->where('role','admin');
        //$ids=User::all('id')->where('role', 'admin');
        //$demandes = Demande::all();
        
        $trait = Demande::all()->where('statut', 3)->where('admin_id',1)->count();
        $rej = Demande::all()->where('statut', 0)->where('admin_id', 1)->count();
        $enc = Demande::all()->where('statut', 2)->where('admin_id', 1)->count();
       

        $traite = Demande::all()->where('statut', 3)->where('admin_id', 2)->count();
        $reje = Demande::all()->where('statut', 0)->where('admin_id', 2)->count();
        $ence = Demande::all()->where('statut', 2)->where('admin_id', 2)->count();
       

        $traits = Demande::all()->where('statut', 3)->where('admin_id', 3)->count();
        $rejes = Demande::all()->where('statut', 0)->where('admin_id', 3)->count();
        $ences = Demande::all()->where('statut', 2)->where('admin_id', 3)->count();
      
        
        
        $traites = Demande::all()->where('statut', 3)->count();
        $rejets = Demande::all()->where('statut', 0)->count();
        $encours = Demande::all()->where('statut', 2)->count();
        $demandes = Demande::all()->where('statut', 1)->count();
        return view('demandes', compact('traites', 'rejets', 'encours', 'demandes','trait', 'rej', 'enc', 'traite', 'reje' , 'ence', 'traits', 'rejes' , 'ences'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
