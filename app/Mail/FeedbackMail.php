<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Buat instance pesan baru.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Bangun pesan.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Masukan Baru')
                    ->view('/client/kontak');
    }
}
