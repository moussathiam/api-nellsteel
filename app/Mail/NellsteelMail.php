<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NellsteelMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;
    public $produits;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details,$produits)
    {
        $this->details = $details;
        $this->produits = $produits;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.nellsteelMail')
                    ->with('details', $this->details,'produits',$this->produits);
    }
}
