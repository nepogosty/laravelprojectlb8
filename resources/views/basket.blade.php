@extends('layouts.master')
@section('title','Корзина')
@section('content')

    <div class="starter-template">
        <div class="container">
            <div class="starter-template">
                <h1>Корзина</h1>
                <p>Оформление заказа</p>
                <div class="panel">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Кол-во</th>
                            <th>Цена</th>
                            <th>Стоимость</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order->laptops as $laptop)
                        <tr>
                            <td>
                                <a href="{{route('product',[$laptop->firm->name,$laptop->id])}}">
                                    @if($laptop->image[0]=='h')
                                        <img src="{{ $laptop->image }}" height="40px">
                                    @endif
                                    @if($laptop->image[0]!='h')
                                        <img src="{{ Storage::url($laptop->image) }}" height="40px">
                                    @endif
                                    {{$laptop->name}}
                                </a>
                            </td>

                            <td >
                                <span  class="text-black">{{$laptop->pivot->count}}</span>
                                <div class="btn-group form-inline">

                                    <form action="{{route('basket-remove',$laptop)}}" method="POST">
                                        <button style="height: 40px"  type="submit" class="btn btn-danger"
                                                href="{{route('basket-remove',$laptop)}}">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-minus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                                <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zm-1 9.5A.5.5 0 0 1 6 9h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                                            </svg>
                                        </button>
                                        @csrf
                                    </form>
                                    <form action="{{route('basket-add',$laptop)}}" method="POST">
                                        <button style="height: 40px" type="submit" class="btn btn-success"
                                                href="{{route('basket-add',$laptop)}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                            <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
                                        </svg>
                                        </button>
                                        @csrf

                                    </form>

                                </div>
                            </td>
                            <td>{{$laptop->price}} ₽</td>
                            <td>{{$laptop->getPriceForCount()}} ₽</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">Общая стоимость:</td>
                            <td>{{$order->fullPrice()}} ₽</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    <div class="btn-group pull-right" role="group">
                        <a type="button" class="btn btn-success" href="{{route('basket-place')}}">Оформить заказ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
