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
<br />
<br />
<br />
    @csrf
    <div class="form-group">
        <label for="category">Category</label>
        <select class="form-select" id="product-category-select" name="category-select">
            <option value="">Choose product category...</option>
            @foreach ($categories as $category) 
                <option value= <?=strtolower(str_replace(" ", "", ($category->name)))?> >{{$category->name}}</option>
            @endforeach
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
        <label for="brand">Brand</label>
        <select class="form-select" id="brand-select" name="brand-select">
            @foreach ($brands as $brand) 
                <option value= <?=$brand->name?> >{{$brand->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" id="image" name="image" class="form-control">
    </div>

    <div class="attributes" id="attributes">
    </div>

    <button type="submit" class="btn btn-info btn-round">{{__('Add')}}</button>
@csrf
</form>
@endsection