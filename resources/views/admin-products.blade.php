@extends('layouts.app')

@section('content')
@vite(['resources/sass/products_in_category.scss'])

@vite(['resources/sass/admin_products.scss'])

    <div class="content-no-footer">

        <div class="content-wrapper admin-products">
            <div class="add-products-wrap">
                <div class="btn-title">
                    <a href="{{route('add-product')}}" class="add-product-btn">
                        <h1>Add product</h1>
                    </a>
                </div>
                <div class="product-container">

                @foreach($products as $product)
                    <div class="card product">
                        <a href="{{ route('search-product', $product->product_id) }}">
                            @foreach($images as $image)
                                @if ($product->product_id == $image->product_id)
                                    <img src="{{ $image->src }}" />
                                @endif
                            @endforeach

                            <div class="info">
                                <h4>{{ $product->name }}</h4>
                                <buttons>
                                    <form id="delete-button" action="{{ route('admin.product.delete', ['id' => $product->product_id]) }}">
                                        @csrf
                                        @method('get')
                                        <button onclick="return confirm('Are you sure you want to delete?')" id="deleteBtn" value="delete">Delete</button>
                                        @csrf
                                    </form>
                                <buttons>
                            </div>
                        </a>
                    </div>

                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection