<?php

namespace Hmct\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DonationInvoice extends Mailable
{
    use Queueable, SerializesModels;

    protected $invoice;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(DonationInvoice $invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('invoice@freenation.com')
            ->view('view.emails.invoice');
    }
}
