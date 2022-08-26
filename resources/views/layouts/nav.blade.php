@vite(['resources/sass/navbar.scss'])

<div class="navbar-container">
    <nav class="top-nav">
        <div class="content-wrapper navbar">
            <div class="left-wrapper">
                <a class="logo" href="{{ url('/') }}">
                    MoonWalkers
                </a>
                <div class="buttons-wrapper">
                    <div class="dropdown-products">
                        <a class="dropdown-button nav-left-links" href="{{ url('/products') }}">Products</a>
                        <div class="dropdown-products-content">
                            <a href="{{ route('products.in.category', ['category' => 'Telescopes']) }}">Telescopes</a>
                            <a href="{{ route('products.in.category', ['category' => 'Mountings']) }}">Mountings</a>
                            <a href="{{ route('products.in.category', ['category' => 'Eyepieces']) }}">Eyepieces</a>
                            <a href="{{ route('products.in.category', ['category' => 'Barlow lenses']) }}">Barlow lenses</a>
                            <a href="{{ route('products.in.category', ['category' => 'Bags']) }}">Bags</a>
                            <a href="{{ route('products.in.category', ['category' => 'Filters']) }}">Filters</a>    
                        </div>
                    </div>

                    <a class="nav-left-links" href="/about">About</a>
                </div>
            </div>
            <div class="right-wrapper">
                @guest
                    <div class="guest-view">
                        <form id="search-form" action="{{ route('products.for.search') }}" enctype="multipart/form-data">
                            @csrf
                            @method('get')
                            <input type="search" name="main_search" id="main-search" placeholder="Search here...">
                            @csrf
                        </form>
                        @if (Route::has('login'))
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif

                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </div>
                @else
                    <div class="logged-view">
                        <div class="search-and-cart">
                            <form id="search-form" action="{{ route('products.for.search') }}" enctype="multipart/form-data">
                                @csrf
                                @method('get')
                                <input type="search" name="main_search" id="main-search" placeholder="Search here...">
                                @csrf
                            </form>
                            @if(!auth()->user() || auth()->user()->role != "administrator")
                                <a href="/cart" class="cart-btn">Cart</a>
                                <a href="/orders" class="cart-btn"> Orders</a>
                            @endif
                        </div>

                        <div class="user-and-logout">
                            <a class="user-name-link" href="/home">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="logout-wrapper">
                                <a class="logout-btn" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </nav>
</div>
