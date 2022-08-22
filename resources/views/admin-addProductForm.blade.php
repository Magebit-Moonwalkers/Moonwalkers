<form class="p-3 px-5" method="post" action="{{ route('modify-products') }}" enctype="multipart/form-data">
@csrf
@method('post')
<p>PRODUCT ADD FORM</p>
<br />

    <div class="form-group">
    </div>
    <div>
        <label class="form-label" for="photo">Add a photo</label>
        <input type="file" name="photo" class="form-control w-50 bg-light" id="photo" />
    </div>
    <button type="submit" class="btn btn-info btn-round">{{__('Add')}}</button>
    @csrf
</form>