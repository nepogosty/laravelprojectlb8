@extends('layouts.master')
@section('title','Корзина')
@section('content')

    <div class="starter-template">
        <div class="container">
            <div class="starter-template">
                <p class="alert alert-success">Добавлен товар </p>
                <h1>Корзина</h1>
                <p>Оформление заказа</p>
                <div class="panel">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Кол-во</th>
                            <th>Цена</th>
                            <th>Стоимость</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td colspan="3">Общая стоимость:</td>
                            <td>0 ₽</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    <div class="btn-group pull-right" role="group">
                        <a type="button" class="btn btn-success" href="http://internet-shop.tmweb.ru/basket/place">Оформить заказ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
