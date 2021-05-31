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
        
        if ($request->email) {
            
            //
            $produits=$request->produits;
            $details['title']='Demande de devis';
            
            Mail::to($request->email)->send(new NellsteelMail($details,$produits ));
    
            return ["msg"=>"Message envoyer avec succés "];

        }
        return ["error"=>"Erreur l'ors de l'nvoie du fichier "];

    }
}
