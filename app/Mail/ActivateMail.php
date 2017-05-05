<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ActivateMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $UserId;
    protected $Token;
    protected $Name;
    protected $Code;
    protected $Expried;
    public function __construct($UserId, $Token, $Name, $Code, $Expried)
    {
        $this->UserId = $UserId;
        $this->Token = $Token;
        $this->Name = $Name;
        $this->Code = $Code;
        $this->Expried = $Expried;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.activate', ['UserId' => $this->UserId,
                                            'Token' => $this->Token,
                                            'Name' => $this->Name,
                                            'Code' => $this->Code,
                                            'Expried' => $this->Expried]);
    }
}
