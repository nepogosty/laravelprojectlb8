@extends('master')
@section('content')

    <div class="starter-template">
        <h1>Ноутбук игровой MSI GF65 Thin </h1>
        <h2>{{$product}}</h2>
        <h2></h2>
        <p>Цена: <b>10999 ₽</b></p>
        <div style="width: 100px; height: 200px "><img src="http://img.mvideo.ru/Big/30057502bb.jpg"></div>

        <p>SSD: 512 ГБ</p>
        <p>RAM: 16 ГБ</p>

        <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

            <input type="hidden" name="_token" value="iWPSJmrwREnYkC3cgrYdqrCAqRrCdbP2w7r1O4rk">        </form>
    </div>
@endsection
