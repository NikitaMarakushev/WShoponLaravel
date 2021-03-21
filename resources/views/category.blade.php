@extends('master')

@section('title', 'Категория' . $category->name)

@section('content')
    <div class="starter-template">
        <h1>
            {{$category->name}}
            {{$category->description}}
        </h1>
        <div class="row">
            @include('card', ['category' => $category])
            @foreach($category->products as $product)
                @include('card', compact('product'))
            @endforeach
        </div>
    </div>
@endsection
