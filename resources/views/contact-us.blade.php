@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="contact-card">
        <div class="card-header">{{ __('Contact us') }}</div>

        <div class="card-body">
            <form>
                <div class="user-details">
                    <input type="text" id="name" name="name" placeholder="Name">
                    <input type="text" id="email" name="email" placeholder="Email">
                </div>
                <input type="text" id="telephone" name="telephone" placeholder="Phone number">
                <textarea type="text" id="comment" name="comment" placeholder="Comment"> </textarea>
                <div class="btn-wrap">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Submit') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection