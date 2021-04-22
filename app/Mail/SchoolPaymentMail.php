<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SchoolPaymentMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $school_payment)
    {
        $this->user = $user;
        $this->school_payment = $school_payment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        $subject = 'Pemberitahuan Pembayaran PPDB';
        return $this->view('email.email-school-payment')
                    ->subject($subject)
                    ->with(
                        [
                            'user' => $this->user,
                            'school_payment' => $this->school_payment                           
                        ]
                    );
            }
}