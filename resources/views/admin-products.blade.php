@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{route('add-product')}}">Add product</a>
                <div class="products">
                @foreach($products as $product)
                    <div><a href="{{ route('product.show', $product->id) }}">
                        <?php echo $product->name; ?>
                    </a></div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection