@extends('layouts.app')

@section('content')

@vite(['resources/sass/admin_products.scss'])

    <div class="content-no-footer">

        <div class="content-wrapper admin-products">
            <div class="add-products-wrap">

                <a href="{{route('add-product')}}" class="add-product-btn">Add product</a>

                <div class="products">

                @foreach($products as $product)
                    <div class="product">
                        <a href="{{ route('admin.product.show', $product->product_id) }}">
                            <?php echo $product->name; ?>
                        </a>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection