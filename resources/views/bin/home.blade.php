@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Уведомление') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Вы зашли в панель администратора') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
