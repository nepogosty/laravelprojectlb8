@extends('master')
@section('content')
    <div class="starter-template">
        <h1>
            {{$firm->name}}

        </h1>
        <p>
           MSI славится хорошей производительностью по доступным ценам, хороший выбор!
        </p>
        <div class="row">
            @foreach($firm->laptops as $laptop)

                @include('card',compact('laptop'))
            @endforeach
        </div>
    </div>
@endsection
