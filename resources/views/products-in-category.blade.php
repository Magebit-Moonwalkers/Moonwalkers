@extends('layouts.app')

@section('content')
    @foreach($products as $product)

        <h4>{{ $product->name }}</h4>

    @endforeach
@endsection