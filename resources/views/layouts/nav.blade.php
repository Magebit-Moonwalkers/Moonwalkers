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
                        <a class="dropdown-button" href="{{ url('/products') }}">Products</a>
                        <div class="dropdown-products-content">
                            <a>Telescopes</a>
                            <a>Mountings</a>
                            <a>Eyepieces</a>
                            <a>Barlow lenses</a>
                            <a>Bags</a>
                            <a>Filters</a>    
                        </div>
                    </div>

                    <div class="nav2">nav2</div>
                    <div class="nav3">nav3</div>
                </div>
            </div>
            <div class="right-wrapper">
                @guest
                    <div class="guest-view">
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
                            <input type="search" name="main-search" id="main-search" placeholder="Search here...">
                            @if(!auth()->user() || auth()->user()->role != "administrator")
                                <a href="/cart" class="cart-btn">Cart</a>
                            @endif
                        </div>

                        <div class="user-and-logout">
                            <a id="navbarDropdown" class="user-name-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
