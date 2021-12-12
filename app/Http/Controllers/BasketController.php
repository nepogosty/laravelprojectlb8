<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
//    public function basket(){
//
//        $id_order=session('id_order');
//        if(!is_null($id_order)){
//            $order=Order::findOrFail($id_order);
//        }
//        return view('basket',compact('order'));
//
//    }
    public function basket() {
        $id_order = session('id_order');
        if(is_null($id_order)) {
            return view('empty');
        }
        else{
            $order = Order::findOrFail($id_order);
            return view('basket', compact('order'));
        }
    }
    public function basketPlace(){

        $id_order=session('id_order');
        if(is_null($id_order)) {
            return redirect()->route('index');
        }
        $order=  Order::find($id_order);
        return view('order',compact('order'));

        return view('order');

    }
    public function empty(){

        return view('empty');

    }

    public function basketAdd($id_laptop){
        //session()->put('id_order',$id_laptop);
           $id_order=session('id_order');

           if(is_null($id_order)){
               $order=  Order::create();
               $idord=$order->id;
               session(['id_order'=>$idord]);
           }
           else{
            $order=Order::find($id_order);
            }
        if($order->laptops->contains($id_laptop)){
            $pivotRow=$order->laptops()->where('id_laptop',$id_laptop)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();

        }else{
            $order->laptops()->attach($id_laptop);
        }
        return redirect()->route('basket');

    }
    public function basketRemove($id_laptop)
    {
        $id_order = session('id_order');
        if (is_null($id_order)) {
            $order = null;
            return redirect()->route('basket');
        }
        $order = Order::find($id_order);
        if ($order->laptops->contains($id_laptop)) {
            $pivotRow = $order->laptops()->where('id_laptop', $id_laptop)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->laptops()->detach($id_laptop);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
            return redirect()->route('basket');

        }
    }
}

