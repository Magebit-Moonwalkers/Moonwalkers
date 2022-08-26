@extends('layouts.app')

@vite(['resources/sass/cart.scss'])

@section('content')

<main class="content">
    <div class="content-wrapper cart-page">
        <div class="">
            <div class="">
                <div class="cart-title">
                    <h3>My orders</h3>
                </div>
                <div class="">
                    <table class="" cellspacing="2">
                        <thead>
                            <tr class="">
                                <th class="">Order number</th>
                                <th class="">Status</th>
                                <th class="">Date</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php $count = 0; $order_id_check = 0; ?>
                            @foreach ($orders as $order)
                            <tr>
                                <td>
                                   # {{ $order->order_id }}
                                </td>
                                <td>
                                    Order placed
                                </td>
                                <td>
                                    {{$date[$count]->created_at}}
                                </td>
                                <?php $count++; ?>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@if(!auth()->user() || auth()->user()->role != "administrator")
@include('layouts.footer')
@endif

@endsection