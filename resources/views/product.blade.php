@extends('layouts.app')

@vite(['resources/sass/product.scss'])

@section('content')
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>


<div class="content">
    <div class="content-wrapper product-page">
        <div class="left">
                @foreach ($images as $image)
                    <img src="{{ $image->src }}" />
                @endforeach
        </div>
        <div class="right">
            <span class="name">
                <h1>{{ $product->name }}</h1>
            </span>
            <div class="general-info">
                <div class="flex">
                <p>Brand: </p>
                <p>{{ $brand }}</p>
                </div>
                <div class="flex">
                    <p>Product Code: </p>
                    <p>{{ $product->product_code }}</p>
                </div>
            </div>
            <p class="price">{{ $product->price }} €</p>

            <form action="{{ route('cart.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('post')
                <label for="quantity">Quantity:</label>
                <br>
                <input type="number" id="quantity" name="quantity" min="1" max="{{ $product->quantity }}" value="1"  />
                <input type="hidden" name="product_id" id="product_id" value={{$product->product_id}} >
                <div class="buttons">
                @if(auth()->user())
                    <button type="submit" class="add-to-cart">Add to cart</button>
                @endif
                    <button type="button" onclick="window.location='{{ route('checkout-start') }}'" class="buy">Buy it now</button>
                </div>
                @csrf
            </form>

            <div class="attributes">
                <div class="technical-info">Specification </div>
                <table>
                @foreach ($attributes as $attribute)
                    <tr>
                        <td>{{ $attribute->name }}</td>
                        <td>{{ $attribute->attribute_value }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
</div>

@endsection