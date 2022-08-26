@extends('layouts.app')

@section('content')

@vite(['resources/sass/form.scss'])
<div class="content">
    <div class="content-wrapper">
        <div class="form-card">
            <div class="card-header bottom-space">{{ __('Checkout') }}</div>
            <div class="card-body">
                <form method="post" action="{{ route('continue-checkout') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="row">
                        <div>
                            <h3>Billing Address</h3>
                            <label for="fname">Full Name</label>
                            <input type="text" id="fname" name="name" placeholder="Enter your full name...">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" placeholder="Enter your email...">
                            <label for="adr">Address</label>
                            <input type="text" id="adr" name="billing_address" placeholder="Enter your address...">
                            <label for="city">City</label>
                            <input type="text" id="city" name="billing_city" placeholder="Enter your city...">
                            <label for="state">State</label>
                            <input type="text" id="state" name="billing_state" placeholder="Enter your state/region...">
                            <label for="zip">Zip</label>
                            <input type="text" id="zip" name="billing_zip" placeholder="Enter your zip...">
                        </div>
                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="if_shipping_same" id="if_shipping_same"> Shipping address same as billing
                    </label>
                    <button type="submit" id="billing-address-button" class="btn btn-primary">Continue to Payment</button>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

@if(!auth()->user() || auth()->user()->role != "administrator")
@include('layouts.footer')
@endif

@endsection