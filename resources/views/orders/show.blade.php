@extends('layouts.app')

@section('title', 'Заказ ' . $order->id)

@section('content')
    <div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <h1>Заказ №{{ $order->id }}</h1>
                    <p>Заказчик: <b>{{ $order->name }}</b></p>
                    <p>Номер телефона: <b>{{ $order->phone }}</b></p>
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
                        @foreach ($order->laptops as $laptop)

                            <tr>
                                <td>
                                    <a href="{{route('product',[$laptop->firm->name,$laptop->id])}}">
                                        @if($laptop->image[0]=='h')
                                            <img src="{{ $laptop->image }}" height="40px">
                                        @endif
                                        @if($laptop->image[0]!='h')
                                            <img src="{{ Storage::url($laptop->image) }}" height="40px">
                                        @endif
                                        {{ $laptop->name }}
                                    </a>
                                </td>
                                <td><span class="badge">1</span></td>
                                <td>{{ $laptop->price }} руб.</td>
                                <td>{{ $laptop->getPriceForCount()}} руб.</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">Общая стоимость:</td>
                            <td>{{ $order->fullPrice()}} руб.</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
