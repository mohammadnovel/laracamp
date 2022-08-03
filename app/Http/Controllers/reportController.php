<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use PDF;
class reportController extends Controller
{
    public function getReport()
    {
        $checkout = Checkout::query()

        ->with('tour','tour.tour_category','tour.location','User','payment_method')
        ->get();
        $ldate = date('Y-m-d H:i:s');
        $total = $checkout->sum('total');
        // dd($total);
        $data = [
            'checkouts' => $checkout,
            'date' => $ldate,
            'total_all' => $total
        ];
// dd($data);
        $pdf = PDF::loadView('report', $data);
        $name = "report-".$ldate;
        return $pdf->download($name.'.pdf');
    }
}
