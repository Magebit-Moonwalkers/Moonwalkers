@extends('layouts.app')
@vite(['resources/sass/form.scss'])
@section('content')

<div class="content">
    <div class="content-wrapper admin-edit-page">
        <div class="form-card">
            <div class="card-header bottom-space">{{ __('Product edit form') }}</div>
            <div class="card-body">
                <form class="p-3 px-5" method="post" action="{{ route('modify-products') }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-select" id="category" name="category">
                            <option value="">Choose product category...</option>
                            @foreach ($categories as $category)
                            <?php $key = $category->category_id; ?>
                            <option value="{{ $category->category_id }}" <?php
                                                                            if (old('category') !== null) {
                                                                                if (old('category') == $category->category_id) {
                                                                                    echo 'selected';
                                                                                }
                                                                            } else if ($product->category_id == $category->category_id) {
                                                                                echo 'selected';
                                                                            }
                                                                            ?>>
                                {{$category->name}}

                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('category'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('category') }}
                        </span>
                        @endif
                    </div>


                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value={{ old('name') !== null ? old('name') : $product->name }}>
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('name') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="product_code">SKU</label>
                        <input type="text" id="product_code" name="product_code" class="form-control" value={{ old('product_code') !== null ? old('product_code') : $product->product_code }}>
                        @if ($errors->has('product_code'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('product_code') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" id="price" name="price" class="form-control" value={{ old('price') !== null ? old('price') : $product->price }}>
                        @if ($errors->has('price'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('price') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" id="description" name="description" class="form-control">
                        @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('description') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <select class="form-select" id="brand" name="brand">
                            <option value="">Choose product brand...</option>
                            @foreach ($brands as $brand)
                            <option value=<?= $brand->brand_id ?> {{ (old('brand') && old('brand') == $brand->brand_id ) ? 'selected' : ($product->brand_id == $brand->brand_id ? 'selected' : '') }}> {{$brand->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('brand'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('brand') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" id="quantity" name="quantity" class="form-control" value={{ old('quantity') !== null ? old('quantity') : $product->quantity }}>
                        @if ($errors->has('quantity'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('quantity') }}
                        </span>
                        @endif
                    </div>

                    <div class="attributes" id="attributes">
                    </div>
                    <div class="btn-wrap">
                        <button type="submit" class="btn btn-edit-save btn-primary">{{__('Save')}}</button>
                    </div>
                    @csrf
                    </from>
            </div>
        </div>
    </div>
</div>
@endsection