@extends('layouts.app')
@section('title', 'Заказы')
@section('content')
    <div class="">
        <div class="col-md-12">
            <h1>Заказы</h1>
            <table class="table">
                <tbody>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Имя
                    </th>
                    <th>
                        Телефон
                    </th>
                    <th>
                        Когда отправлен
                    </th>
                    <th>
                        Сумма
                    </th>
                    <th>
                        Действия
                    </th>
                </tr>
                @foreach($orders as $order)
                    <tr>
                        <td>
                            {{$order->id}}
                        </td>
                        <td>
                            {{$order->name}}
                        </td>
                        <td>
                            {{$order->phone}}
                        </td>
                        <td>
                            {{$order->created_at->format('H:i d/m/y')}}
                        </td>
                        <td>
                            {{$order->fullPrice()}}
                        </td>
                        <td>
                            <div role="group" class="btn-group">
                                <a type="button" class="btn btn-success"
                                   @if(\Illuminate\Support\Facades\Auth::user()->isAdmin())
                                   href="{{route('orders.show',$order)}}" >Открыть</a>
                                @else
                                   href="{{route('ordersss.show',$order)}}" >Открыть</a>
                                @endif

                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
