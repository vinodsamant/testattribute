<?php

namespace App\Jobs;

use App\Mail\EmailInvitation;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;


class SendInvitationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $sender_data;
    public $data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($sender_data, $data = [])
    {
        $this->sender_data = $sender_data;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->data['receiver_email'])->send(new EmailInvitation($this->sender_data, $this->data));
    }
}
