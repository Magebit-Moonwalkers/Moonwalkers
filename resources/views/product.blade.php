@extends('layouts.app')

@vite(['resources/sass/product.scss'])

@section('content')

<div class="content">
    <div class="content-wrapper">
        <div class="left">
        </div>
        <div class="right">
        </div>
    </div>
</div>

@if(!auth()->user() || auth()->user()->role != "administrator")
@include('layouts.footer')
@endif

@endsection