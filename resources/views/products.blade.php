@extends('layouts.app')

@section('content')
    @foreach($categories as $category)

                <h4>{{ $category->name }}</h4>

    @endforeach
@endsection