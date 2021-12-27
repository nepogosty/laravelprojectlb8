@extends('layouts.app')

@section('title', 'Товар')

@section('content')
    <div class="col-md-12">
        <h1>Товары</h1>
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
                    Цена
                </th>
                {{-- <th>
                     Бонусы
                 </th>
                 --}}
               {{-- <th>
                    Рейтинг
                </th>--}}
                <th>
                    SSD
                </th>
                <th>
                    RAM
                </th>
                <th>
                    Фирма
                </th>
                <th>
                   CPU
                </th>
                {{--<th>
                    GPU
                </th>--}}
                <th>
                    Действия
                </th>
            </tr>
            @foreach($laptops as $laptop)
                <tr>
                    <td>{{ $laptop->id}}</td>
                    <td>{{ $laptop->name }}</td>
                    <td>{{ $laptop->price }}</td>
                    {{-- <td>{{ $laptop->bonuses }}</td>--}}
                     {{--<td>{{ $laptop->rating }}</td>--}}
                    <td>{{ $laptop->SSD }}</td>
                    <td>{{ $laptop->RAM }}</td>
                    <td>{{ $laptop->firm->name }}</td>

                    <td>{{ $laptop->cpu->name }}</td>
                   {{-- <td>{{ $laptop->gc->name }}</td>--}}

                    <td>
                        <div class="btn-group " role="group">
                            <form action="{{ route('laptops.destroy', $laptop) }}" method="POST">
                                <a class="btn btn-success" type="button"
                                   href="{{ route('laptops.show', $laptop) }}">Открыть</a>
                                {{--<a class="btn btn-success" type="button"
                                   href="{{ route('skus.index', $laptop) }}">Skus</a>
                                   --}}
                                <a class="btn btn-warning" type="button"
                                   href="{{ route('laptops.edit', $laptop) }}">Редактировать</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Удалить"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
       {{-- {{ $products->links() }}--}}
        <a class="btn btn-success" type="button" href="{{ route('laptops.create') }}">Добавить ноутбук</a>
    </div>
@endsection
