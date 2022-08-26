@extends('layouts.app')

@vite(['resources/sass/products_in_category.scss'])
@vite(['resources/sass/products_in_search.scss'])

@section('content')
<div class="content">
    <div class="content-wrapper products-in-search">
        <div class="search-title">
            <h1>Search results</h1>
        </div>
        <div class="search-wrapper">
            <form id="search-form" action="{{ route('products.for.search') }}" enctype="multipart/form-data">
                @csrf
                @method('get')
                <input type="search" name="main_search" id="main-search" placeholder="Search here..." value="{{$search}}">
                @csrf
            </form>
        </div>
        @if ($products)
        <div class="product-container">
            @foreach($products as $product)
                <div class="card">
                    <a href="{{ route('search-product', ['id' => $product["product_id"]]) }}">
                        @foreach($images as $image)
                            @if ($product["product_id"] == $image->product_id)
                                <img src="{{ $image->src }}" />
                                @break
                            @endif
                        @endforeach

                        <div class="info">
                            <h4>{{ $product["name"] }}</h4>
                            <price>{{ $product["price"] }} €</price>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        @else
        <div class="cant-find">Couldn't find any product matching your request</div>
        @endif
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