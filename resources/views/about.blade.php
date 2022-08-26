@extends('layouts.app')

@section('content')

@vite(['resources/sass/about.scss'])
<div class="content">
    <div class="content-wrapper about-page">
        <div class="banner">
            <img src="/images/backgrounds/about-banner1.jpg" alt="oops">
        </div>
        <p class="credits"><a href="https://www.freepik.com/free-vector/alien-planet-landscape-cosmic-background-deserted-coastline-with-mountains-view-glowing-cleft-stars-shining-spheres-space-extraterrestrial-pc-game-backdrop-cartoon-vector-illustration_20700727.htm?query=universe banner" target="_blank">Image by upklyak</a> on Freepik</p>
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