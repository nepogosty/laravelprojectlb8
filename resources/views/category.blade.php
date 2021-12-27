@extends('layouts.master')
@section('content')
    <div class="starter-template">
        <h1>
            @if($category=='mobiles')
                Мобильные телефоны
            @elseif($category='portable')
                Портативная техника
            @elseif($category='appliances')
                Бытовая техника
                @endif

        </h1>
        <p>
            В этом разделе вы найдёте самые популярные мобильные телефонамы по отличным ценам!
        </p>
        <div class="row">
            @include('card')
        </div>
    </div>
@endsection
