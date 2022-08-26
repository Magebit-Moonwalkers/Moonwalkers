@extends('layouts.app')

@vite(['resources/sass/cart.scss'])

@section('content')

<main class="content">
<div class="content-wrapper cart-page">
    <div class="">
      <div class="">
        @if ($message = Session::get('success'))
        <div class="message">
          <p class="">{{ $message }}</p>
        </div>
        @endif
        <div class="cart-title">
          <h3>Cart List</h3>
        </div>
        <div class="">
          <table class="" cellspacing="2">

            <thead>
              <tr class="">
                <th class="">Name</th>
                <th class="">Quantity</th>
                <th class="">Price</th>
                <th class="">Remove</th>
              </tr>
            </thead>

            <tbody>
            <?php $cart_id; ?>
              @foreach ($cartItems as $item)
              <?php $cart_id = $item->cart_id;?>
              <tr>
                <td>
                  <a class="item-name" href="{{ route('search-product', ['id' => $item->product_id]) }}">
                    <p>{{ $item->name }}</p>
                  </a>
                </td>
                <td class="">
                  <form class="buttons" action="{{ route('cart.update') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $item->product_id }}" name="product_id">
                    <input type="hidden" value="{{ $item->cart_id }}" name="cart_id">
                    <input class="quantity-input" type="number" name="item_quantity" value="{{ $item->item_quantity }}" min="1" max="{{ $item->quantity }}" />
                    <button class="update-btn" type="submit">Update</button>
                  </form>
                </td>
                <td class="">
                  <span class="item-price">
                    {{ $item->price * $item->item_quantity }} €
                  </span>
                </td>
                <td>
                  <form class="buttons" action="{{ route('cart.remove') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $item->product_id }}" name="product_id">
                    <input type="hidden" value="{{ $item->cart_id }}" name="cart_id">
                    <button class="delete-btn">Remove</button>
                  </form>

                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
          <div>
            <?php use App\Http\Controllers\CartController; ?>
            Total: {{ CartController::getTotal() }} €
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@if(!auth()->user() || auth()->user()->role != "administrator")
@include('layouts.footer')
@endif

@endsection 