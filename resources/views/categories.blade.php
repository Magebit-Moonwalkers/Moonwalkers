@extends('layouts.app')
@vite(['resources/sass/categories.scss'])

@section('content')
<div class="content">
    <div class="content-wrapper categories">
        <div class="categories-wrapper">
            @foreach($categories as $category)

                <div class="box">
                <h4>{{ $category->name }}</h4>
                </div>
            
            @endforeach
        </div>
    </div>
</div>
@endsection