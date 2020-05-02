<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailInvitation extends Mailable
{
    use Queueable, SerializesModels;
    public $sender_data;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sender_data, $data)
    {
        $this->sender_data = $sender_data;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('Email.inviteEmail')->with([
            'sender_user' => $this->sender_data,
            'data' => $this->data
        ]);
    }
}
