@extends('layouts.app')

@section('content')

@vite(['resources/sass/form.scss'])
<div class="content">
    <div class="content-wrapper checkout-page">
        <div class="form-card">
            <div class="card-header">{{ __('Checkout') }}</div>
            <div class="card-body">
                <form method="post" action="{{ route('continue-checkout') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <h3>Billing Address</h3>
                    <div class="name-wrap">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="7" r="5" stroke="black" stroke-width="2" />
                            <path d="M17 14H17.3517C18.8646 14 20.1408 15.1266 20.3285 16.6279L20.719 19.7519C20.8682 20.9456 19.9374 22 18.7344 22H5.26556C4.06257 22 3.1318 20.9456 3.28101 19.7519L3.67151 16.6279C3.85917 15.1266 5.13538 14 6.64835 14H7" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <label for="fname">Full Name</label>
                        <input type="text" id="fname" name="name" placeholder="Enter your full name...">
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('name') }}
                        </span>
                        @endif

                    </div>
                    <div class="email-wrap">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330.001 330.001" style="enable-background:new 0 0 330.001 330.001;" xml:space="preserve">
                            <g id="XMLID_348_">
                                <path id="XMLID_350_" d="M173.871,177.097c-2.641,1.936-5.756,2.903-8.87,2.903c-3.116,0-6.23-0.967-8.871-2.903L30,84.602
                                L0.001,62.603L0,275.001c0.001,8.284,6.716,15,15,15L315.001,290c8.285,0,15-6.716,15-14.999V62.602l-30.001,22L173.871,177.097z" />
                                <polygon id="XMLID_351_" points="165.001,146.4 310.087,40.001 19.911,40 	" />
                            </g>
                        </svg>

                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Enter your email...">
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('email') }}
                        </span>
                        @endif
                    </div>
                    <div class="adress-wrap">
                        <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <g id="layer1">
                                <path d="M 5 3 L 5 4 L 0 4 L 0 18 L 20 18 L 20 4 L 15 4 L 15 3 L 14 3 L 14 4 L 6 4 L 6 3 L 5 3 z M 1 5 L 5 5 L 5 6 L 6 6 L 6 5 L 14 5 L 14 6 L 15 6 L 15 5 L 19 5 L 19 17 L 1 17 L 1 5 z M 2 8 L 2 15 L 8 15 L 8 8 L 2 8 z M 3 9 L 7 9 L 7 14 L 3 14 L 3 9 z M 10 9 L 10 10 L 17 10 L 17 9 L 10 9 z M 10 11 L 10 12 L 17 12 L 17 11 L 10 11 z M 10 13 L 10 14 L 17 14 L 17 13 L 10 13 z " style="fill:#222222; fill-opacity:1; stroke:none; stroke-width:0px;" />
                            </g>
                        </svg>
                        <label for="adr">Address</label>
                        <input type="text" id="adr" name="billing_address" placeholder="Enter your address...">
                        @if ($errors->has('billing_address'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('billing_address') }}
                        </span>
                        @endif
                    </div>
                    <div class="city-wrap">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 6h-4V3a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7H3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1zM6 18H4v-2h2v2zm0-4H4v-2h2v2zm5 4H9v-2h2v2zm0-4H9v-2h2v2zm0-4H9V8h2v2zm0-4H9V4h2v2zm4 12h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V8h2v2zm0-4h-2V4h2v2zm5 12h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V8h2v2z" />
                        </svg>
                        <label for="city">City</label>
                        <input type="text" id="city" name="billing_city" placeholder="Enter your city...">
                        @if ($errors->has('billing_city'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('billing_city') }}
                        </span>
                        @endif
                    </div>
                    <div class="state-wrap">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 496 496" style="enable-background:new 0 0 496 496;" xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <path d="M456,120h-8V88h-16V56h-64V40h-16v16h-64v32h-16v32h-16V40h-16V16.88L96.936,0.056L64,0v40H48v80h-8
                                        c-22.056,0-40,17.944-40,40v240c0,22.056,17.944,40,40,40h80v40h-16v16h288v-16h-16v-40h80c22.056,0,40-17.944,40-40V160
                                        C496,137.944,478.056,120,456,120z M304,72h112v16H304V72z M288,104h144v240H288V104z M256,136h16v208h-16V136z M80,16h15.528
                                        L224,31.12V40H80V16z M64,56h176v288H64V56z M360,480H136v-40h224V480z M480,400c0,13.232-10.768,24-24,24H40
                                        c-13.232,0-24-10.768-24-24v-8h464V400z M480,376H16V160c0-13.232,10.768-24,24-24h8v208H32v16h240h176h16v-16h-16V136h8
                                        c13.232,0,24,10.768,24,24V376z" />
                                        <path d="M80,136h64V72H80V136z M96,88h32v32H96V88z" />
                                        <path d="M160,136h64V72h-64V136z M176,88h32v32h-32V88z" />
                                        <path d="M80,216h64v-64H80V216z M96,168h32v32H96V168z" />
                                        <path d="M160,216h64v-64h-64V216z M176,168h32v32h-32V168z" />
                                        <path d="M80,296h64v-64H80V296z M96,248h32v32H96V248z" />
                                        <path d="M160,296h64v-64h-64V296z M176,248h32v32h-32V248z" />
                                        <path d="M304,168h48v-48h-48V168z M320,136h16v16h-16V136z" />
                                        <path d="M368,168h48v-48h-48V168z M384,136h16v16h-16V136z" />
                                        <path d="M304,232h48v-48h-48V232z M320,200h16v16h-16V200z" />
                                        <path d="M368,232h48v-48h-48V232z M384,200h16v16h-16V200z" />
                                        <path d="M304,296h48v-48h-48V296z M320,264h16v16h-16V264z" />
                                        <path d="M368,296h48v-48h-48V296z M384,264h16v16h-16V264z" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <label for="state">State</label>
                        <input type="text" id="state" name="billing_state" placeholder="Enter your state/region...">
                    </div>
                    <div class="zip-wrap">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;" xml:space="preserve">
                            <path d="M286.86,175.679h95.701l66.81-67.467l-66.81-67.467H286.86V0h-93.722v40.744H91.609v134.935h101.529v37.467h-95.7
                            l-66.81,67.467l66.81,67.467h95.7V480h93.722V348.08h101.53V213.146H286.86V175.679z M213.139,20h53.722v20.744h-53.722V20z
                            M111.609,60.744h262.61l47.005,47.467l-47.005,47.467h-262.61V60.744z M213.139,175.679h53.722v37.467h-53.722V175.679z
                            M266.86,460h-53.722V348.08h53.722V460z M368.391,328.08H105.78l-47.005-47.467l47.005-47.467h262.61V328.08z" />
                        </svg>
                        <label for="zip">Zip</label>
                        <input type="text" id="zip" name="billing_zip" placeholder="Enter your zip...">
                        @if ($errors->has('billing_zip'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('billing_zip') }}
                        </span>
                        @endif
                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="if_shipping_same" id="if_shipping_same"> Shipping address same as billing
                    </label>
                    <div class="btn-wrap">
                        <button type="submit" id="billing-address-button" class="btn btn-primary">Continue to Payment</button>
                    </div>
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