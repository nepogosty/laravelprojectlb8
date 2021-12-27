<?php

namespace App\Http\Controllers;

use App\Models\Order;
use app\Service\ParserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class OrderController extends Controller
{

    public function index()
    {
        $orders=Order::where('status',1)->get();

        return view('orders.index',compact('orders'));
    }
    public function show(Order $order){

        if(Auth::user()->is_admin==0) {
            if (!Auth::user()->orders->contains($order)) {
                return redirect()->route('orders.index');
            }
        }
        return view('orders.show',compact('order'));

    }
    public function parser()
    {
      // $parser=new ParserService();
       //$parser->parser();
      echo ParserService::class->parser();

        return redirect()->route('orders.index');
    }
}
