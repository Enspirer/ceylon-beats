<?php

namespace App\Mail;

use App\Models\Invoice;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use App\Models\Auth\User;
use App\Models\InvoiceItem;
use App\Models\AddressDetails;
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
        $userDetails = User::where('id',$invoideDetails->user_id)->first();
        $invoice_item = InvoiceItem::where('invoice_id',$this->invoice_id)->get();
        $address_details = AddressDetails::where('invoice_id',$this->invoice_id)->first();

        return $this->view('frontend.mail.order_complete_mail',[
            'invoice_details' => $invoideDetails,
            'user_details' => $userDetails,
            'invoice_item' => $invoice_item,
            'address_details' => $address_details
        ]);
    }
}
