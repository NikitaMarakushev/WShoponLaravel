@extends('master')

@section('title', 'Все категории')

@section('content')
    <div class="starter-template">
        @foreach($categories as $category)
            <div class="panel">
                <a href="{{ $category->code }}"></a>
                <a href="{{ route('category', $category->code) }}">
                    <img src="" alt="">
                    <h2>{{ $category->name }}</h2>
                </a>
            </div>
        @endforeach
    </div>
@endsection
