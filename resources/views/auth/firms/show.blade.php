@extends('layouts.app')

@section('title', 'Фирма ' . $firm->name)

@section('content')
    <div class="col-md-12">
        <h1>Фирма {{ $firm->name }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значение
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $firm->id_firm }}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $firm->name }}</td>
            </tr>
            <tr>
                <td>Описание</td>
                <td>{{ $firm->description }}</td>
            </tr>

            </tbody>
        </table>
    </div>
@endsection
