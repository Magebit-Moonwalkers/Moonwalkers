@extends('layouts.app')

@section('content')
<form class="p-3 px-5" method="post" action="{{ route('modify-products') }}" enctype="multipart/form-data">
@csrf
@method('put')
<p>PRODUCT EDIT FORM</p>
<br />
<?php echo $id; ?>
    <div class="form-group">
    </div>
    <div>
        <label class="form-label" for="photo">Add a photo</label>
        <input type="file" name="photo" class="form-control w-50 bg-light" id="photo" />
    </div>
    <button type="submit" class="btn btn-info btn-round">{{__('Save')}}</button>
    @csrf
</from>
@endsection