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
                    </div>

                    <span class="nav2">nav2</span>
                    <span class="nav3">nav3</span>
                </div>
            </div>
            <div class="right-wrapper">
                @guest
                    @if (Route::has('login'))
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif

                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <input type="search" name="main-search" id="main-search" placeholder="Search here...">
                    @if(!auth()->user() || auth()->user()->role != "administrator")
                        <a href="/cart" class="cart-btn">Cart</a>
                    @endif
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                @endguest
            </div>
        </div>
    </nav>
</div>


<!-- <nav class="top-nav">
    <div class="content-wrapper navbar">
        <div class="left-wrapper">
            <a class="logo" href="{{ url('/home') }}">
                MoonWalkers
            </a>
            <div class="buttons-wrapper">
                <span class="nav1">nav1</span>
                <span class="nav2">nav2</span>
                <span class="nav3">nav3</span>
            </div>
        </div>
        <div class="right-wrapper">
            @guest
                @if (Route::has('login'))
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif

                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                <input type="search" name="main-search" id="main-search" placeholder="Search here...">
                @if(!auth()->user() || auth()->user()->role != "administrator")
                    <a href="/cart" class="cart-btn">Cart</a>
                @endif
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
            @endguest
        </div>
    </div>
</nav> -->