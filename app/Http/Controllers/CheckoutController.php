<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index($service_id)
    {
        // Menemukan service berdasarkan ID
        $service = Service::findOrFail($service_id);

        return view('checkout.index', compact('service'));
    }
}
