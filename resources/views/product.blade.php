@extends('layouts.master', ['file'=>'product'])
@section('content')


    <div class="starter-template">
        <h1>{{$product->name}}</h1>
        <h2>{{$product->firm->name}}</h2>
        <h2></h2>
        <p>Цена: <b>{{$product->price}} ₽</b></p>
        @if($product->image[0]=='h')
            <td><img src="{{ $product->image }}" height="240px"></td>
        @endif
        @if($product->image[0]!='h')
            <td><img src="{{ Storage::url($product->image) }}" height="240px"></td>
        @endif
    <p>SSD: {{$product->SSD}}</p>
    <p>RAM: {{$product->RAM}}</p>
        <p>RAM: {{$product->RAM}}</p>
    <p>CPU: {{$product->cpu->name}}, {{$product->cpu->countCores}}, {{$product->cpu->frequency}} </p>
    <p>Видеокарта: {{$product->gc->name}}</p>

    @foreach($product->laptopsReviews as $review)
        <div class="panel">
            <p>Рейтинг: {{$review->rating}}</p>
            <p>Описание: {{$review->review}}</p>
        </div>
    @endforeach

    <form action="{{route('basket-add', $product)}}" method="POST">
        <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

        <input type="hidden" name="_token" value="iWPSJmrwREnYkC3cgrYdqrCAqRrCdbP2w7r1O4rk">
        @csrf
    </form>
</div>
@endsection
