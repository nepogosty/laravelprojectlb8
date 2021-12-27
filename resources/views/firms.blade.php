@extends('layouts.master')
@section('content')

    <div class="starter-template">
        @foreach($firms as $firm)
            <div class="panel mt-5 mb-5">
                <a href="/{{$firm->name}}">

                    <h2>{{$firm->name}}</h2>
                </a>
                {{--<p>
                    {{$firm->description}}
                </p>--}}
            </div>
        @endforeach

    </div>
@endsection
