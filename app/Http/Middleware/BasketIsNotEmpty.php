<?php

namespace App\Http\Middleware;

use App\Models\Order;
use Closure;
use Illuminate\Http\Request;

class BasketIsNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $id_order=session('id_order');

        if(!is_null($id_order)){
            $order=Order::findOrFail($id_order);
            if($order->laptops->count()==0){
                session()->flash('warning', 'Ваша корзина пуста');
                return redirect()->route('index');
            }
        }
        return $next($request);
    }
}
