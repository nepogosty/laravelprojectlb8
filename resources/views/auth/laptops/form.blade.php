@extends('layouts.app')

@isset($laptop)
    @section('title', 'Редактировать ноутбук ' . $laptop->name)
@else
    @section('title', 'Создать ноутбук')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($laptop)
            <h1>Редактировать товар <b>{{ $laptop->name }}</b></h1>
        @else
            <h1>Добавить товар</h1>
        @endisset
        <form method="POST" enctype="multipart/form-data"
              @isset($laptop)
              action="{{ route('laptops.update', $laptop) }}"
              @else
              action="{{ route('laptops.store') }}"
            @endisset
        >
            <div>
                @isset($laptop)
                    @method('PUT')
                @endisset
                @csrf

                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                       {{-- @include('auth.layouts.error', ['fieldName' => 'name'])--}}
                        <input type="text" class="form-control" name="name" id="name"
                               value="@isset($laptop){{ $laptop->name }}@endisset">
                    </div>
                </div>
                    <br>
                    <div class="input-group row">
                        <label for="name" class="col-sm-2 col-form-label">Ссылка: </label>
                        <div class="col-sm-6">
                            {{-- @include('auth.layouts.error', ['fieldName' => 'name'])--}}
                            <input type="text" class="form-control" name="href" id="href"
                                   value="@isset($laptop){{ $laptop->href }}"@endisset">
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="name" class="col-sm-2 col-form-label">Цена: </label>
                        <div class="col-sm-6">
                            {{-- @include('auth.layouts.error', ['fieldName' => 'name'])--}}
                            <input type="text" class="form-control" name="price" id="price"
                                   value="@isset($laptop){{ $laptop->price }}@endisset">
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="name" class="col-sm-2 col-form-label">Бонусы: </label>
                        <div class="col-sm-6">
                            {{-- @include('auth.layouts.error', ['fieldName' => 'name'])--}}
                            <input type="text" class="form-control" name="bonuses" id="bonuses"
                                   value="@isset($laptop){{ $laptop->bonuses }}"@endisset">
                        </div>
                    </div>

                <br>
                    <div class="input-group row">
                        <label for="name" class="col-sm-2 col-form-label">Рейтинг: </label>
                        <div class="col-sm-6">
                            {{-- @include('auth.layouts.error', ['fieldName' => 'name'])--}}
                            <input type="text" class="form-control" name="rating" id="rating"
                                   value="@isset($laptop){{ $laptop->rating }}"@endisset">
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="name" class="col-sm-2 col-form-label">SSD: </label>
                        <div class="col-sm-6">
                            {{-- @include('auth.layouts.error', ['fieldName' => 'name'])--}}
                            <input type="text" class="form-control" name="SSD" id="SSD"
                                   value="@isset($laptop){{ $laptop->SSD }}"@endisset">
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="name" class="col-sm-2 col-form-label">RAM: </label>
                        <div class="col-sm-6">
                            {{-- @include('auth.layouts.error', ['fieldName' => 'name'])--}}
                            <input type="text" class="form-control" name="RAM" id="RAM"
                                   value="@isset($laptop){{ $laptop->RAM }}"@endisset">
                        </div>
                    </div>

                    <br>
                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">Фирма: </label>
                    <div class="col-sm-6">
                       {{-- @include('auth.layouts.error', ['fieldName' => 'category_id'])--}}
                        <select name="id_firm" id="id_firm" class="form-control">
                            @foreach($firms as $firm)
                                <option value="{{ $firm->id_firm }}"
                                        @isset($laptop)
                                        @if($laptop->id_firm == $firm->id_firm)
                                        selected
                                    @endif
                                    @endisset
                                >{{ $firm->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                    <div class="input-group row">
                        <label for="category_id" class="col-sm-2 col-form-label">Процессор: </label>
                        <div class="col-sm-6">
                            {{-- @include('auth.layouts.error', ['fieldName' => 'category_id'])--}}
                            <select name="id_cpu" id="id_cpu" class="form-control">
                                @foreach($cpus as $cpu)
                                    <option value="{{ $cpu->id_cpu }}"
                                            @isset($laptop)
                                            @if($laptop->id_cpu == $cpu->id_cpu)
                                            selected
                                        @endif
                                        @endisset
                                    >{{ $cpu->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="category_id" class="col-sm-2 col-form-label">Видеокарта: </label>
                        <div class="col-sm-6">
                            {{-- @include('auth.layouts.error', ['fieldName' => 'category_id'])--}}
                            <select name="id_gc" id="id_gc" class="form-control">
                                @foreach($graphs as $graph)
                                    <option value="{{ $graph->id_gc }}"
                                            @isset($laptop)
                                            @if($laptop->id_gc == $graph->id_gc)
                                            selected
                                        @endif
                                        @endisset
                                    >{{ $graph->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            Загрузить <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                </div>
                <br>



                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
