@extends('layouts.app')

@section('content')
<div class="content-wrapper contact">
    <h2>Contact us</h2>
    <form>
        <div class="user-details">
            <input type="text" id="name" name="name" placeholder="Name">
            <input type="text" id="email" name="email" placeholder="Email">
        </div>
        <input type="text" id="telephone" name="telephone" placeholder="Phone number">
        <textarea type="text" id="comment" name="comment" placeholder="Comment"> </textarea>
    </form>
</div>

@endsection