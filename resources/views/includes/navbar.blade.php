
    <nav
    class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
    data-aos="fade-down">
    <div class="container">
    <a href="/" class="navbar-brand">
        <img src="/buah/fresh.png" alt="Logo" style="max-width: 50px" />
    </a>
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="/" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="/categories" class="nav-link">Categories</a>
            </li>
            @auth    
            <li class="nav-item">
                <a href="/transaction" class="nav-link">Transaksi</a>
            </li>
            @endauth
            @guest
                <li class="nav-item">
                    <a href="/" class="nav-link">Register</a>
                </li>
                <li class="nav-item">
                    <a
                    href="/login"
                    class="btn btn-success nav-link px-4 text-white">Login</a>
                </li>
            @endguest
        </ul>

        @auth
            <!-- Desktop Menu -->
            <ul class="navbar-nav d-none d-lg-flex">
                <li class="nav-item mb-2">
                    <a href="/cart" class="nav-link d-inline-block mt-2">
                        @php
                            $carts = \App\Models\Cart::where('users_id', Auth::user()->id)->count();
                        @endphp
                        @if($carts > 0)
                            <img src="/images/icon-cart-filled.svg" alt=""/>
                            {{ $carts }}
                            {{-- <div class="card-badge">{{ $carts }}</div> --}}
                        @else
                            <img src="/images/icon-cart-empty.svg" alt="" />
                        @endif
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a
                        href="#"
                        class="nav-link mt-2"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown">
                        {{-- <img
                            src="/images/icon-user.png"
                            alt=""
                            class="rounded-circle mr-2 profile-picture"/> --}}
                        Hi, {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu">
                        @can('admin')
                        <a href="/admin" class="dropdown-item">Dashboard Admin</a>
                        <div class="dropdown-divider"></div>
                        @endcan
                        <a href="/alamat" class="dropdown-item">Alamat Saya</a>
                        <div class="dropdown-divider"></div>
                        <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                        {{-- <a class="dropdown-item" href="/logout"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                               Logout
                        </a>
                        <form id="logout-form" action="/logout" method="POST" style="display: none">
                          @csrf
                        </form> --}}
                    </div>
                </li>
                
            </ul>

            {{-- Responsive Mobile --}}
            <ul class="navbar-nav d-block d-lg-none">
                @can('admin')
                    <li class="nav-item">
                    <a href="/admin" class="nav-link">
                        Dashboard Admin
                    </a>
                    </li>
                @endcan
                <li class="nav-item">
                    <a href="/cart" class="nav-link d-inline-block">
                        Cart
                    </a>
                </li>
            </ul>    
        @endauth
        
    </div>
    </div>
</nav>

