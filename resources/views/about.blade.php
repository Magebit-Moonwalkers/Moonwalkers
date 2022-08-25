@extends('layouts.app')

@section('content')

@vite(['resources/sass/about.scss'])
<div class="content">
    <div class="content-wrapper about">
        <div class="images">
            <img src="https://www.ieskaties.lv/image/cache/catalog/ext4oc/2592038772-3179022424-3392-468x468.jpg" alt="">
            <img src="https://www.ieskaties.lv/image/cache/catalog/ext4oc/2592038772-3179022424-3392-468x468.jpg" alt="">
            <img src="https://www.ieskaties.lv/image/cache/catalog/ext4oc/2592038772-3179022424-3392-468x468.jpg" alt="">
        </div>
        <div class="about-us">
            <h2>About</h2>
            <p>
                We are the biggest retailer of optics telescopes, binoculars, riflescopes, spotting scopes, microscopes and all other optical parts in Baltic Market. This webshop are for people interested in astronomy, science, hunting, nature exploration, animal research, security and other activities. We are offering the main brands of American, Asian and European producers providing high quality. We offer full warranty and support for all products bought in our store.
            </p>
        </div>
    </div>
</div>

@if(!auth()->user() || auth()->user()->role != "administrator")
    @include('layouts.footer')
@endif

@endsection