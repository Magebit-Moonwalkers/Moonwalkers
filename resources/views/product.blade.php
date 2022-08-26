@extends('layouts.app')

@vite(['resources/sass/product.scss'])

@section('content')
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>


<div class="content">
    <div class="content-wrapper product">
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

            <form class="form">
                <label for="quantity">Quantity:</label>
                <br>
                <input type="number" id="quantity" name="quantity" value="1" min="1" max="{{ $product->quantity }}">
                <div class="buttons">
                    
                        <a href="{{ route('cart.store', ['id' => $product->product_id]) }}"><div class="add-to-cart">Add to cart</div></a>
                    
                    <div class="buy">Buy it now</div>
                </div>
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