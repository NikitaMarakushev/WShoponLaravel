@extends('master')

@section('title', 'Корзина')

@section('content')

    <tbody>
        <tr>
            <th>Название</th>
            <th>Кол-во</th>
            <th>Цена</th>
            <th>Стоимость</th>
        </tr>
    </tbody>
    @foreach($order->products as $product)
        <tr>
            <td>
                <a href="{{ route('product', [$product->category->code], $product->code) }}">
                    <img src="" alt="">
                    {{ $product->name }}
                </a>
            </td>
            <td>
                <span>1</span>
                <div class="btn-group">
                    <a type="button" class="btn btn-danger" href="">
                        <span></span>
                    </a>
                </div>
            </td>
        </tr>
    @endforeach

@endsection
