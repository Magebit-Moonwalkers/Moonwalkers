@extends('layouts.app')
@vite(['resources/sass/categories.scss'])

@section('content')
    <div class="categories">
        @foreach($categories as $category)

            <div class="box">
            <h4>{{ $category->name }}</h4>
            </div>
        
        @endforeach
    </div>
@endsection