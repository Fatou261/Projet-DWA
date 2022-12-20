<?php

namespace App\Console\Commands;

use App\Mail\DemandeNonFini;
use App\Models\Demande;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:SendDemandeEmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Commande de rappel pour achever les demandes en cours de traitement et celles en attente';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //return Command::SUCCESS;
        $demandes = Demande::all()->where('statut', 1);
        foreach($demandes as $demande)
            Mail::to(User::all()->where('role', 'admin'))->send(new DemandeNonFini($demande));


    }
}
