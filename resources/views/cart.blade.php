@extends('layouts.app')

@vite(['resources/sass/cart.scss'])

@section('content')

<main class="content">
<div class="content-wrapper">
    <div class="">
      <div class="">
        @if ($message = Session::get('success'))
        <div class="">
          <p class="">{{ $message }}</p>
        </div>
        @endif
        <h3 class="">Cart List</h3>
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
                  <a href="#">
                    <p class="">{{ $item->name }}</p>
                  </a>
                </td>
                <td class="">
                  <form action="{{ route('cart.update') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $item->product_id }}" name="product_id">
                    <input type="hidden" value="{{ $item->cart_id }}" name="cart_id">
                    <input type="number" name="item_quantity" value="{{ $item->item_quantity }}" min="1" max="{{ $item->quantity }}" />
                    <button type="submit">update</button>
                  </form>
                </td>
                <td class="">
                  <span class="">
                    ${{ $item->price }}
                  </span>
                </td>
                <td class="">
                  <form action="{{ route('cart.remove') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $item->product_id }}" name="product_id">
                    <input type="hidden" value="{{ $item->cart_id }}" name="cart_id">
                    <button class="">x</button>
                  </form>

                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
          <div>
            <?php use App\Http\Controllers\CartController; ?>
            Total: {{ CartController::getTotal() }} 
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