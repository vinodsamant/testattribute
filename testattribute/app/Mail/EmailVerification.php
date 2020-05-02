<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\User;


class EmailVerification extends Mailable
{
    use Queueable, SerializesModels;
    public $data;    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data=[])
    {

        $this->token = $data['email_token'];       
        $this->verify_code = $data['verify_code'];
        $this->type = $data['type'];      
        $this->user = null;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->user  = User::checkUser('email_token', $this->token);                        
        return $this->markdown('Email.verifyEmail')->with([
            'verify_code' => $this->verify_code,
            'user' => $this->user,
            'type' => $this->type
        ]);
       
    }
}
