<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\RejetMail;
use App\Mail\ValidateMail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)

    {
        if ($request->user()->role === 'admin')
            return view('home_admin');
        else if($request->user()->role === 'assistancia')
            return view('home_assistancia');
        else
            return view('home');
    }

    public function alouer($id)
    {
        $demande = Demande::find($id);
        $demande->admin_user = Auth::user()->id;
        $demande->statut = 2;
        $demande->save();
        return redirect('demande.tdb');
    } 

    public function valider ($id)
    {
        $demande = Demande::find($id);
        $demande->statut = 3;
        $demande->save();
        // Mail::to($demande->user)->send(new ValidateMail($demande));
    }

    public function rejet($id)
    {
        $demande = Demande::find($id);

        return view('sheet.motif',compact('demande'));
    }

    public function motif (Request $request)
    {
        $request->validate([
            'motif'=> 'required',
        ]);
        $demande = Demande::find($request->id);
        $demande->statut = 0;
        $demande->save();
        // Mail::to($demande->user)->send( new RejetMail($demande,$request->motif));
        return redirect('home_admin'); 

    }
}
