<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifikasiPendudukBaru extends Mailable
{
    use Queueable, SerializesModels;

    public $penduduk;

    public function __construct($penduduk)
    {
        $this->penduduk = $penduduk;
    }

    public function build()
    {
        return $this->subject('Data Penduduk Baru Ditambahkan')
                    ->view('emails.notifikasi_penduduk');
    }
}
