<?php

namespace App\Mail;

use App\Models\Invoice;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
class OrderCompleteMail extends Mailable
{
    use Queueable, SerializesModels;
    public $invoice_id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($invoiceID)
    {
        $this->invoice_id = $invoiceID;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $invoideDetails = Invoice::where('id',$this->invoice_id)->first();
        return $this->view('frontend.mail.order_complete_mail',[
            'invoice_details' => $invoideDetails
        ]);
    }
}
