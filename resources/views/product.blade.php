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
        </div>
    </div>
</div>

@if(!auth()->user() || auth()->user()->role != "administrator")
@include('layouts.footer')
@endif

@endsection