@extends('layouts.app')

@vite(['resources/sass/products_in_category.scss'])

@section('content')
<div class="content">
    <div class="content-wrapper">
        <div class="category-title">
            <h1>{{ $category}}</h1>
        </div>

        <div class="product-container">
        @foreach($products as $product)

            <div class="card">
                <a href="{{ route('product', ['category' => $category, 'id' => $product->product_id]) }}">
                    @foreach($images as $image)
                        @if ($product->product_id == $image->product_id)
                            <img src="{{ $image->src }}" />
                        @endif
                    @endforeach

                    <div class="info">
                        <h4>{{ $product->name }}</h4>
                        <price>{{ $product->price }} €</price>
                    </div>
                </a>
            </div>

        @endforeach
        </div>
    </div>

    <div class="absolute">
        <div class="astronaut">
            <div class="moving-astronaut">
                <img src="/images/backgrounds/astronaut.png" />
            </div>
        </div>
    </div>
</div>

@if(!auth()->user() || auth()->user()->role != "administrator")
    @include('layouts.footer')
@endif

@endsection