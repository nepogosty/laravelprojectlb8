@extends('layouts.app')

@section('title', 'Создать фирму')
@isset($firm)
    @section('title', 'Редактировать категорию ' . $firm->name)
@else
    @section('title', 'Создать категорию')
@endisset

@section('content')
    <div class="col-md-12">
         @isset($firm)
             <h1>Редактировать Категорию <b>{{ $firm->name }}</b></h1>
         @else

        <h1>Добавить Категорию</h1>
         @endisset

             <form method="POST" enctype="multipart/form-data"
                   @isset($firm)
                   action="{{ route('firms.update', $firm) }}"
                   @else

                   action="{{ route('firms.store') }}"
                 @endisset
             >
        <div>
            @isset($firm)
                @method('PUT')
            @endisset

            @csrf
            <br>
            <div class="input-group row">
                <label for="name" class="col-sm-2 col-form-label">Название: </label>
                <div class="col-sm-6">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="name" id="name"
                           value="@isset($firm){{ $firm->name }}@endisset">
                </div>
            </div>

            <br>
            <div class="input-group row">
                <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                <div class="col-sm-6">
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <textarea name="description" id="description" cols="72"
                              rows="7">@isset($firm){{ $firm->description }}@endisset</textarea>
                </div>
            </div>
            <button class="btn btn-success">Сохранить</button>
        </div>
        </form>
    </div>
@endsection
