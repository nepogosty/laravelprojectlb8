@extends('master')
@section('title','Корзина')
@section('content')

    <div class="starter-template">
        <div class="container">
            <div class="starter-template">
                <p class="alert alert-success">Добавлен товар </p>
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
                                    <img height="56px" src="http://img.mvideo.ru/Big/30057502bb.jpg">
                                    {{$laptop->name}}
                                </a>
                            </td>
                            <td><span class="badge">{{$laptop->pivot->count}}</span>
                                <div class="btn-group form-inline">

                                    <form action="{{route('basket-remove',$laptop)}}" method="POST">
                                        <button type="submit" class="btn btn-danger"
                                                href="{{route('basket-remove',$laptop)}}"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                        @csrf
                                    </form>
                                    <form action="{{route('basket-add',$laptop)}}" method="POST">
                                        <button type="submit" class="btn btn-success"
                                                href="{{route('basket-add',$laptop)}}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                        @csrf
                                    </form>

                                </div>
                            </td>
                            <td>{{$laptop->price}}</td>
                            <td>{{$laptop->getPriceForCount()}}</td>
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
