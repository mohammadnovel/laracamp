<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use PDF;
class InvoiceController extends Controller
{
    public function generateInvoice($id)
    {
        $checkout = Checkout::query()
        ->with('tour','tour.tour_category','tour.location','User','payment_method')
        ->whereId($id)
        ->first();
        $data = [
            'checkout' => $checkout
        ];
          
        $pdf = PDF::loadView('invoice', $data);
        $name = "INV-".$checkout->midtrans_booking_code."/".$checkout->created_at;
        return $pdf->download($name.'.pdf');
    }
}
