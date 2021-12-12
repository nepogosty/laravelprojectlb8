@extends('master')
@section('content')

    <div class="starter-template">
        @foreach($firms as $firm)
            <div class="panel">
                <a href="/{{$firm->name}}">
                    <img width="200px" src="https://static.acer.com/up/Resource/Libraries/Acer/4448/images/logo.svg">
                    <h2>{{$firm->name}}</h2>
                </a>
                <p>
                    {{$firm->description}}
                </p>
            </div>
        @endforeach

    </div>
@endsection
