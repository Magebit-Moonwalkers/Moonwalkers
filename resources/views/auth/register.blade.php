@extends('layouts.app')

@section('content')

@vite(['resources/sass/form.scss'])
<div class="content">
    <div class="content-wrapper register-page">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-card reg-card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="7" r="5" stroke="black" stroke-width="2"/>
                                <path d="M17 14H17.3517C18.8646 14 20.1408 15.1266 20.3285 16.6279L20.719 19.7519C20.8682 20.9456 19.9374 22 18.7344 22H5.26556C4.06257 22 3.1318 20.9456 3.28101 19.7519L3.67151 16.6279C3.85917 15.1266 5.13538 14 6.64835 14H7" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" placeholder="Your Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 330.001 330.001" style="enable-background:new 0 0 330.001 330.001;" xml:space="preserve">
                                <g id="XMLID_348_">
                                    <path id="XMLID_350_" d="M173.871,177.097c-2.641,1.936-5.756,2.903-8.87,2.903c-3.116,0-6.23-0.967-8.871-2.903L30,84.602
                                        L0.001,62.603L0,275.001c0.001,8.284,6.716,15,15,15L315.001,290c8.285,0,15-6.716,15-14.999V62.602l-30.001,22L173.871,177.097z"
                                        />
                                    <polygon id="XMLID_351_" points="165.001,146.4 310.087,40.001 19.911,40 	"/>
                                </g>
                                </svg>
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" placeholder="example@email.com" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 271.452 271.452" style="enable-background:new 0 0 271.452 271.452;" xml:space="preserve">
                                <path d="M250.393,69.893H21.059C9.447,69.893,0,79.34,0,90.952V180.5c0,11.612,9.447,21.06,21.059,21.06h229.333
                                    c11.612,0,21.06-9.447,21.06-21.06V90.952C271.452,79.34,262.005,69.893,250.393,69.893z M88.156,141.055
                                    c3.614,2.023,4.904,6.594,2.88,10.208c-1.375,2.455-3.924,3.837-6.551,3.837c-1.24,0-2.498-0.308-3.657-0.958l-10.042-5.623v9.206
                                    c0,4.142-3.358,7.5-7.5,7.5s-7.5-3.358-7.5-7.5v-9.205l-10.042,5.622c-1.159,0.649-2.417,0.958-3.657,0.958
                                    c-2.627,0-5.176-1.382-6.551-3.837c-2.024-3.614-0.734-8.185,2.88-10.208l9.518-5.329l-9.518-5.329
                                    c-3.614-2.023-4.904-6.594-2.88-10.208c2.023-3.613,6.595-4.905,10.208-2.88l10.042,5.622v-9.205c0-4.142,3.358-7.5,7.5-7.5
                                    s7.5,3.358,7.5,7.5v9.206l10.042-5.623c3.614-2.023,8.185-0.733,10.208,2.88c2.024,3.614,0.734,8.185-2.88,10.208l-9.518,5.329
                                    L88.156,141.055z M160.596,141.055c3.614,2.023,4.904,6.594,2.88,10.208c-1.375,2.455-3.924,3.837-6.551,3.837
                                    c-1.24,0-2.498-0.308-3.657-0.958l-10.042-5.622v9.205c0,4.142-3.358,7.5-7.5,7.5s-7.5-3.358-7.5-7.5v-9.206l-10.042,5.623
                                    c-1.159,0.649-2.417,0.958-3.657,0.958c-2.627,0-5.176-1.382-6.551-3.837c-2.024-3.614-0.734-8.185,2.88-10.208l9.518-5.329
                                    l-9.518-5.329c-3.614-2.023-4.904-6.594-2.88-10.208c2.024-3.613,6.594-4.905,10.208-2.88l10.042,5.623v-9.206
                                    c0-4.142,3.358-7.5,7.5-7.5s7.5,3.358,7.5,7.5v9.205l10.042-5.622c3.615-2.023,8.185-0.733,10.208,2.88
                                    c2.024,3.614,0.734,8.185-2.88,10.208l-9.518,5.329L160.596,141.055z M233.037,141.055c3.614,2.023,4.904,6.594,2.88,10.208
                                    c-1.375,2.455-3.924,3.837-6.551,3.837c-1.24,0-2.498-0.308-3.657-0.958l-10.042-5.622v9.205c0,4.142-3.358,7.5-7.5,7.5
                                    s-7.5-3.358-7.5-7.5v-9.205l-10.042,5.622c-1.159,0.649-2.417,0.958-3.657,0.958c-2.627,0-5.176-1.382-6.551-3.837
                                    c-2.024-3.614-0.734-8.185,2.88-10.208l9.518-5.329l-9.518-5.329c-3.614-2.023-4.904-6.594-2.88-10.208
                                    c2.023-3.613,6.594-4.905,10.208-2.88l10.042,5.622v-9.205c0-4.142,3.358-7.5,7.5-7.5s7.5,3.358,7.5,7.5v9.205l10.042-5.622
                                    c3.615-2.023,8.186-0.733,10.208,2.88c2.024,3.614,0.734,8.185-2.88,10.208l-9.518,5.329L233.037,141.055z"/>
                                </svg>
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 271.452 271.452" style="enable-background:new 0 0 271.452 271.452;" xml:space="preserve">
                                <path d="M250.393,69.893H21.059C9.447,69.893,0,79.34,0,90.952V180.5c0,11.612,9.447,21.06,21.059,21.06h229.333
                                    c11.612,0,21.06-9.447,21.06-21.06V90.952C271.452,79.34,262.005,69.893,250.393,69.893z M88.156,141.055
                                    c3.614,2.023,4.904,6.594,2.88,10.208c-1.375,2.455-3.924,3.837-6.551,3.837c-1.24,0-2.498-0.308-3.657-0.958l-10.042-5.623v9.206
                                    c0,4.142-3.358,7.5-7.5,7.5s-7.5-3.358-7.5-7.5v-9.205l-10.042,5.622c-1.159,0.649-2.417,0.958-3.657,0.958
                                    c-2.627,0-5.176-1.382-6.551-3.837c-2.024-3.614-0.734-8.185,2.88-10.208l9.518-5.329l-9.518-5.329
                                    c-3.614-2.023-4.904-6.594-2.88-10.208c2.023-3.613,6.595-4.905,10.208-2.88l10.042,5.622v-9.205c0-4.142,3.358-7.5,7.5-7.5
                                    s7.5,3.358,7.5,7.5v9.206l10.042-5.623c3.614-2.023,8.185-0.733,10.208,2.88c2.024,3.614,0.734,8.185-2.88,10.208l-9.518,5.329
                                    L88.156,141.055z M160.596,141.055c3.614,2.023,4.904,6.594,2.88,10.208c-1.375,2.455-3.924,3.837-6.551,3.837
                                    c-1.24,0-2.498-0.308-3.657-0.958l-10.042-5.622v9.205c0,4.142-3.358,7.5-7.5,7.5s-7.5-3.358-7.5-7.5v-9.206l-10.042,5.623
                                    c-1.159,0.649-2.417,0.958-3.657,0.958c-2.627,0-5.176-1.382-6.551-3.837c-2.024-3.614-0.734-8.185,2.88-10.208l9.518-5.329
                                    l-9.518-5.329c-3.614-2.023-4.904-6.594-2.88-10.208c2.024-3.613,6.594-4.905,10.208-2.88l10.042,5.623v-9.206
                                    c0-4.142,3.358-7.5,7.5-7.5s7.5,3.358,7.5,7.5v9.205l10.042-5.622c3.615-2.023,8.185-0.733,10.208,2.88
                                    c2.024,3.614,0.734,8.185-2.88,10.208l-9.518,5.329L160.596,141.055z M233.037,141.055c3.614,2.023,4.904,6.594,2.88,10.208
                                    c-1.375,2.455-3.924,3.837-6.551,3.837c-1.24,0-2.498-0.308-3.657-0.958l-10.042-5.622v9.205c0,4.142-3.358,7.5-7.5,7.5
                                    s-7.5-3.358-7.5-7.5v-9.205l-10.042,5.622c-1.159,0.649-2.417,0.958-3.657,0.958c-2.627,0-5.176-1.382-6.551-3.837
                                    c-2.024-3.614-0.734-8.185,2.88-10.208l9.518-5.329l-9.518-5.329c-3.614-2.023-4.904-6.594-2.88-10.208
                                    c2.023-3.613,6.594-4.905,10.208-2.88l10.042,5.622v-9.205c0-4.142,3.358-7.5,7.5-7.5s7.5,3.358,7.5,7.5v9.205l10.042-5.622
                                    c3.615-2.023,8.186-0.733,10.208,2.88c2.024,3.614,0.734,8.185-2.88,10.208l-9.518,5.329L233.037,141.055z"/>
                                </svg>
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0 btn-wrap">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if(!auth()->user() || auth()->user()->role != "administrator")
@include('layouts.footer')
@endif

@endsection
