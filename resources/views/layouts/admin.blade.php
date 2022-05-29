<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    {{-- Datatables Css --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>
    @stack('addon-style')
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/admin.png" alt="" class="my-4" style="max-width: 150px" />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="/admin"
              class="list-group-item list-group-item-action {{ request()->is('admin') ? 'active' : '' }}"
              >Dashboard</a
            >
            <a
              href="/admin/category"
              class="list-group-item list-group-item-action {{ request()->is('admin/category*') ? 'active' : '' }}"
              >Categories</a
            >
            <a
              href="/admin/product"
              class="list-group-item list-group-item-action {{ request()->is('admin/product') ? 'active' : '' }}"
              >Products</a
            >
            <a
              href="/admin/product-gallery"
              class="list-group-item list-group-item-action {{ request()->is('admin/product-gallery*') ? 'active' : '' }}"
              >Product Gallery</a
            >
            {{-- <a
              href="/admin/discount"
              class="list-group-item list-group-item-action {{ request()->is('admin/product-gallery*') ? 'active' : '' }}"
              >Product Discount</a
            > --}}
            <a
              href="/admin/transaction"
              class="list-group-item list-group-item-action"
              >Transactions</a
            >
            <a
              href="/admin/user"
              class="list-group-item list-group-item-action {{ request()->is('admin/user*') ? 'active' : '' }}"
              >Users</a
            >
          </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
            data-aos="fade-down"
          >
            <button
              class="btn btn-secondary d-md-none mr-auto mr-2"
              id="menu-toggle"
            >
              &laquo; Menu
            </button>

            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto d-none d-lg-flex mr-5 mt-3">
                <li class="nav-item dropdown">
                  <a
                    class="btn btn-info nav-link px-4 text-white"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    Hi, {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/"
                      >Back to Store</a>
                    <div class="dropdown-divider"></div>
                    <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item" href="/logout">Logout</button>
                    </form>
                  </div>
                </li>
              </ul>
              <!-- Mobile Menu -->
              <ul class="navbar-nav d-block d-lg-none mt-3">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    Hi, {{ Auth::user()->name }}
                  </a>
                </li>
              </ul>
            </div>
          </nav>

        @yield('content')

        </div>
        <!-- /#page-content-wrapper -->
      </div>
    </div>

    @stack('prepend-script')
    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    {{-- Datatables Script, ket:jquery.slim -> jquery.min --}}
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    @stack('addon-script')
  </body>
</html>
