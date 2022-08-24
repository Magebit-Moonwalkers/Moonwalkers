@extends('layouts.app')
@vite(['resources/sass/categories.scss'])

@section('content')
<div class="page-container">
    <div class="categories">
        @foreach($categories as $category)

            <a class="box" href="#">
                <img src="{{ $category->image_src }}" />
                <div class="">
                    <h4>{{ $category->name }}</h4>
                </div>
            </a>
        
        @endforeach
    </div>
</div>
@endsection