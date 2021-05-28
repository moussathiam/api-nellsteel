<?php

namespace App\Http\Controllers;

use App\Mail\NellsteelMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function envoie()

    {

        $myEmail = 'diattamohamet30@gmail.com';

   

        $details = [

            'title' => 'Mail Demo from ItSolutionStuff.com',

            'url' => 'https://www.itsolutionstuff.com',
            'body'=> 'Bonne réception !!'

        ];

  

        Mail::to($myEmail)->send(new NellsteelMail($details));

   

        dd("Mail Send Successfully");

    }
}
