<?php

namespace App\Http\Controllers;

use App\Mail\NellsteelMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function envoie(Request $request)

    {
        // return 
        
        if ($request->nom) {
            
            //
            $produits=$request->produits;
            $details=[
                "title"=>'Demande de devis',
                "email"=>$request->email,
                "nom"=>$request->nom,
                "adresse"=>$request->adresse,
                "telephone"=>$request->telephone,
                "entreprise"=>$request->entreprise

            ];
            
            Mail::to(env('EMAIL_COMP'))->send(new NellsteelMail($details,$produits ));
    
            return ["msg"=>"Message envoyer avec succés "];

        }
        return ["error"=>"Erreur l'ors de l'nvoie du fichier "];

    }
}
