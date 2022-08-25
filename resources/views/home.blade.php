@extends('layouts.app')

@section('content')

@vite(['resources/sass/home.scss'])

<div class="content">
    <div class="content-wrapper home">
        <div class="card-wrap">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hello, {{auth()->user()->name}}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
