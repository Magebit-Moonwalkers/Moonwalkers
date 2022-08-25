@extends('layouts.app')

@section('content')

@vite(['resources/sass/admin.scss'])

<div class="content">
    <div class="content-wrapper admin">
        <div class="card-functionalities-wrap">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hello, {{auth()->user()->name}}
                </div>
            </div>
            <div class="functionalities">
                <div class="functionality">
                    <a href="{{ route('modify-products') }}" class="modify-products">
                        Modify products
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
