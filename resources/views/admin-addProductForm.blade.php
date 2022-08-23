@extends('layouts.app')

@section('content')
<?php     
$fields=["name", "SKU", "price", "description"];
?>
<form class="p-3 px-5" method="post" action="{{ route('modify-products') }}" enctype="multipart/form-data">
@csrf
@method('post')
<p>PRODUCT ADD FORM</p>
<br />
    @csrf
    <div class="form-group">
        <label for="product-type-select">Product type</label>
        <select  class="form-select" id="product-type-select" name="product-type-select">
            <option value="telescops">Telescops</option>
            <option value="mounting">Mounting</option>
            <option value="eyepieces">Eyepieces</option>
            <option value="lenses">Barlow lenses</option>
            <option value="bags">Bags</option>
            <option value="filters">Filters</option>
        </select>
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="SKU">SKU</label>
        <input type="text" id="SKU" name="SKU" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" id="price" name="price" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" id="description" name="description" class="form-control">
    </div>
    <div class="form-group">
        <!-- <label for="brand">Brand (would be awesome to have dropdown here)</label>
        <input type="text" id="brand" name="brand" class="form-control"> -->
        <label for="brand">Brand</label>
        <select class="form-select" id="brand-select" name="brand-select">
            @foreach ($brands as $brand) 
                <option value= <?=$brand->name?> >{{$brand->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <!-- <label for="category">Category (would be awesome to have dropdown here)</label>
        <input type="text" id="category" name="category" class="form-control"> -->
        <label for="category">Category</label>
        <select class="form-select" id="category-select" name="category-select">
            @foreach ($categories as $category) 
                <option value= <?=$category->name?> >{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" id="image" name="image" class="form-control">
    </div>

    <div class="attributes" id="attributes">
    <?php $attributes = ["a", "d", "r", "p"]; ?> 
    @foreach ($attributes as $attribute) 
        <div class="form-group">
            <label for={{$attribute}}>{{$attribute}}</label>
            <input type="text" id="description" name="description" class="form-control">
        </div>
    @endforeach
    </div>

    <button type="submit" class="btn btn-info btn-round">{{__('Add')}}</button>
@csrf
</form>
@endsection