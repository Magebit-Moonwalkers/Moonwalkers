@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{route('add-product')}}">Add product</a>
                @foreach($products as $product)
                    <a href="{{ route('product.show', $product->id) }}">
                        <?php echo $product->name; ?>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection