@extends('layouts.master')
@section('content')
    <div class="starter-template">
        <h1>
            {{$firm->name}}

        </h1>
        <p>

            {{$firm->description}}

        </p>
        <div class="row">
            @foreach($firm->laptops as $laptop)

                @include('card',compact('laptop'))
            @endforeach
        </div>
    </div>
@endsection
