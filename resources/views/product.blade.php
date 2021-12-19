@extends('master', ['file'=>'product'])
@section('content')


    <div class="starter-template">
        <h1>{{$product->name}}</h1>
        <h2>{{$product->firm->name}}</h2>
        <h2></h2>
        <p>Цена: <b>{{$product->price}} ₽</b></p>
    {{--<div style="width: 100px; height: 200px "><img src="http://img.mvideo.ru/Big/30057502bb.jpg"></div>
--}}
    <p>SSD: {{$product->SSD}}</p>
    <p>RAM: {{$product->RAM}}</p>

    <p>CPU: {{$product->cpu->name}}, {{$product->cpu->countCores}}, {{$product->cpu->frequency}} </p>
    <p>Видеокарта: {{$product->gc->name}}</p>

    @foreach($product->laptopsReviews as $review)
        <div class="panel">
            <p>Рейтинг: {{$review->rating}}</p>
            <p>Описание: {{$review->review}}</p>
        </div>
    @endforeach

    <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
        <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

        <input type="hidden" name="_token" value="iWPSJmrwREnYkC3cgrYdqrCAqRrCdbP2w7r1O4rk">        </form>
</div>
@endsection
