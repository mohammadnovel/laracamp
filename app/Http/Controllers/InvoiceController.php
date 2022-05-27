<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use PDF;
class InvoiceController extends Controller
{
    public function generateInvoice()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('invoice', $data);
    
        return $pdf->download('itsolutionstuff.pdf');
    }
}
