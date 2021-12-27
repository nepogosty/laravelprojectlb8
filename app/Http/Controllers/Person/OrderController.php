<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders=Auth::user()->orders()->where('status',1)->get();

        return view('orders.index',compact('orders'));
    }
    public function show(Order $order){


        if(!Auth::user()->orders->contains($order)){
            return back();
        }
        return view('orders.show',compact('order'));

    }
}
