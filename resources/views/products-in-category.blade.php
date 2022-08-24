@extends('layouts.app')

@vite(['resources/sass/products_in_category.scss'])

@section('content')
<div class="content">
    <div class="content-wrapper">
    <div class="category-title">
        <h1>{{ $category}}</h1>
    </div>
    @foreach($products as $product)

        <h4>{{ $product->name }}</h4>

    @endforeach
</div>
</div>
@endsection