@extends('layouts.app')

@section('content')
<?php     
$fields=["name", "SKU", "price", "description"];
// $fields=[["as", "asdds"],["asd", "as", "asdds"],["fds"]];
?>
<form class="p-3 px-5" method="post" action="{{ route('modify-products') }}" enctype="multipart/form-data">
@csrf
@method('post')
<p>PRODUCT ADD FORM</p>
<br />
    @csrf
    <div class="form-group">
        <select id="product-type-select" id="product-type" name="product-type">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control" required="">
    </div>
    <div class="form-group">
        <label for="SKU">SKU</label>
        <input type="text" id="SKU" name="SKU" class="form-control" required="">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" id="price" name="price" class="form-control" required="">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" id="description" name="description" class="form-control" required="">
    </div>
    

    <!-- <div id="product-fields">
    </div>
    @foreach($fields as $field)
    <div class="form-group">
        <label for={{$field}}>{{$field}}</label>
        <input type="text" id={{$field}} name={{$field}} class="form-control" required="">
    </div>
    @endforeach -->

    <button type="submit" class="btn btn-info btn-round">{{__('Add')}}</button>
@csrf
</form>
@endsection