@extends('layouts.app')

@section('title', 'Фирмы')

@section('content')
    <div class="col-md-12">
        <h1>Категории</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Название
                </th>
                <th>
                    Действия
                </th>
            </tr>
            @foreach($firms as $firm)
                <tr>
                    <td>{{ $firm->id_firm }}</td>
                    <td>{{ $firm->name }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('firms.destroy', $firm) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{ route('firms.show', $firm) }}">Открыть</a>
                                <a class="btn btn-warning" type="button" href="{{ route('firms.edit', $firm) }}">Редактировать</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Удалить"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    {{--{{ $firms->links()}}--}}
    <a class="btn btn-success" type="button"
       href="{{ route('firms.create') }}">Добавить категорию</a>
</div>
@endsection
