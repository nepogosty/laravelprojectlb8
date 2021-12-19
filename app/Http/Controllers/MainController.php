<?php

namespace App\Http\Controllers;

use App\Models\Firm;
use App\Models\Laptop;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(){
       // $products=Laptop::get();
        $laptops=Laptop::get();
        return view('index',compact('laptops'));

    }
    public function firms(){
        $firms=Firm::get();
        return view('firms',compact('firms'));

    }
    public function product($firm,$id){

        $product=Laptop::where('id',$id)->first();
        return view('product',['product'=>$product]);

    }
    public function firm($name){
        $firm=Firm::where('name',$name)->first();

        return view('firm', compact('firm'));

    }



}
