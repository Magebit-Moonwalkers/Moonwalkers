@extends('layouts.app')
@vite(['resources/sass/categories.scss'])

@section('content')
<div class="page-container">
    <div class="categories">
        @foreach($categories as $category)
            <div class="border-animation">
                <div class="border-animation-after">
                    <a class="box" href="{{ route('products.in.category', ['category' => $category->name]) }}">
                        <img src="{{ $category->image_src }}" />
                        <div class="title">
                            <h4>{{ $category->name }}</h4>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection