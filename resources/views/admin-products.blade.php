@extends('layouts.app')
@section('content')
    <div class="container">
    <br><br><br><br>

        <div class="row justify-content-center">
            <div class="col-md-8">

                <a href="{{route('add-product')}}" style="color:red;">Add product</a>
                <div class="products">

                @foreach($products as $product)
                    <div><a href="{{ route('admin.product.show', $product->product_id) }}">
                        <?php echo $product->name; ?>
                    </a></div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection