<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class FunnelController extends Controller
{
    public function funnelA()
    {
        return view('funnel.a');
    }

    
    public function funnelB()
    {
        return view('funnel.b');
    }
    public function funnelC()
    {
        return view('funnel.c');
    }

    public function store(Request $request)
    {
        
        $order = Order::create([
            'customer_name' => $request->input('customer_name'),
            'cutomer_lastname' => $request->input('customer_lastname'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'card-number' => $request->input('card-number'),
            

        ]);

        return redirect()->route('funnelD');
    }

    public function funnelD()
    {
        return view('funnel.d');
    }
}
