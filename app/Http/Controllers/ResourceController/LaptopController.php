<?php

namespace App\Http\Controllers\ResourceController;

use App\Http\Controllers\Controller;
use App\Models\Cpu;
use App\Models\Firm;
use App\Models\GraphicCard;
use App\Models\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laptops=Laptop::get();
        return view('auth.laptops.index',compact('laptops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $firms = Firm::get();
        $cpus = Cpu::get();
        $graphs = GraphicCard::get();
        return view('auth.laptops.form', compact('firms', 'cpus','graphs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


      $path=$request->file('image')->store('laptops');

      $params=$request->all();
      $params['image']=$path;
      Laptop::create($params);
      return redirect()->route('laptops.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function show(Laptop $laptop)
    {
        return view('auth.laptops.show', compact('laptop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function edit(Laptop $laptop)
    {
        $firms = Firm::get();
        $cpus = Cpu::get();
        $graphs = GraphicCard::get();
        return view('auth.laptops.form', compact('laptop','firms', 'cpus', 'graphs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laptop $laptop)
    {
        Storage::delete($laptop->image);
        $path=$request->file('image')->store('laptops');

        $params=$request->all();
        $params['image']=$path;
        $laptop->update($params);
        return redirect()->route('laptops.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laptop $laptop)
    {
        $laptop->delete();
        return redirect()->route('laptops.index');
    }
}
