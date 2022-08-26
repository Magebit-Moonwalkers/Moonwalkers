@extends('layouts.app')

@section('content')

<div class="content">
    <div class="content-wrapper">
        <div class="form-card">
            <div class="card-header">{{ __('Payment') }}</div>
            <div class="card-body">
                <form method="post" action="{{ route('finish-checkout') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="category">Payment method</label>
                        <select class="form-select" id="payment_method" name="payment_method">
                            <option value="">Choose payment method...</option>
                            <option value="cash">Pay in cash on delivery</option>
                            <option value="paypal">PayPal</option>
                        </select>
                        @if ($errors->has('category'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('category') }}
                        </span>
                        @endif
                    </div>
                    <input type="hidden" name="checkoutId" value={{$checkoutId}}>
                    <button type="submit">Finish</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@if(!auth()->user() || auth()->user()->role != "administrator")
@include('layouts.footer')
@endif

@endsection