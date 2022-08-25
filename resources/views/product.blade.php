@extends('layouts.app')

@vite(['resources/sass/product.scss'])

@section('content')
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>


<div class="content">
    <div class="content-wrapper">
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

            <form action="">
                <label for="quantity">Quantity:</label>
                <br>
                <input type="number" id="quantity" name="quantity" value="1" min="1" max="{{ $product->quantity }}">
                <div class="buttons">
                    <button type="button" class="add-to-cart">Add to cart</button>
                    <button type="button" class="buy">Buy it now</button>
                </div>
            </form>

            <div class="attributes">
                <div class="technical-info">Specification </div>
                <table>
                    <tr>
                        <td>Alfreds Futterkiste</td>
                        <td>Centro comercial Moctezuma</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
</div>

@if(!auth()->user() || auth()->user()->role != "administrator")
@include('layouts.footer')
@endif

@endsection