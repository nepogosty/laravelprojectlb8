@extends('layouts.app')

@section('title', 'ноутбук ' . $laptop->name)

@section('content')
    <div class="col-md-12">
        <h1>{{ $laptop->name }}</h1>
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
                <td>{{ $laptop->id}}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $laptop->name }}</td>
            </tr>

            <tr>
                <td>Цена</td>
                <td>{{ $laptop->price }}</td>
            </tr>
            <tr>
                <td>Бонусы</td>
                <td>{{ $laptop->bonuses }}</td>
            </tr>
            <tr>
                <td>SSD</td>
                <td>{{ $laptop->SSD }}</td>
            </tr>
            <tr>
                <td>RAM</td>
                <td>{{ $laptop->RAM }}</td>
            </tr>

            <tr>
                <td>Картинка</td>

                @if($laptop->image[0]=='h')
                <td><img src="{{ $laptop->image }}" height="240px"></td>
                    @endif
                @if($laptop->image[0]!='h')
                <td><img src="{{ Storage::url($laptop->image) }}" height="240px"></td>
                @endif
            </tr>
            <tr>
                <td>Фирма</td>
                <td>{{ $laptop->firm->name }}</td>
            </tr>

            <tr>
                <td>Процессор</td>
                <td>{{ $laptop->cpu->name }}</td>
            </tr>
            <tr>
                <td>Видеокарта</td>
                <td>{{ $laptop->gc->name }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
