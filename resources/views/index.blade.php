@extends('layouts.master')
@section('content')
    <div class="starter-template">
        <h1>Все товары</h1>
        {{--<form method="GET" action="http://internet-shop.tmweb.ru">
            <div class="filters row">
                <div class="col-sm-6 col-md-3 ">
                    <label cal for="price_from">Цена от
                        <input  type="text" name="price_from" id="price_from" size="6" value="" >
                    </label>
                    <label for="price_to">до
                        <input type="text" name="price_to" id="price_to" size="6" value="" >
                    </label>
                </div>
                <div class="col-sm-2 col-md-2 form-check">
                    <label for="hit" >
                        <input type="checkbox" name="hit" id="hit"> Хит                </label>
                </div>
                <div class="col-sm-2 col-md-2">
                    <label for="new">
                        <input type="checkbox" name="new" id="new"> Новинка                </label>
                </div>
                <div class="col-sm-2 col-md-2">
                    <label for="recommend">
                        <input type="checkbox" name="recommend" id="recommend"> Рекомендуем                </label>
                </div>
                <div class="col-sm-6 col-md-3">
                    <button type="submit" class="btn btn-primary">Фильтр</button>
                    <a href="http://internet-shop.tmweb.ru" class="btn btn-warning">Сброс</a>
                </div>
            </div>
        </form>--}}
        <div class="row pb-5">
            @foreach($laptops as $laptop)
                @include('card',compact('laptop'))
            @endforeach


        </div>
        <nav class="">
            <ul class="pagination justify-content-center ">

                <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
                    <span class="page-link" aria-hidden="true">‹</span>
                </li>





                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="?&amp;page=2">2</a></li>


                <li class="page-item">
                    <a class="page-link" href="?&amp;page=2" rel="next" aria-label="pagination.next">›</a>
                </li>
            </ul>
        </nav>

    </div>
@endsection
