<div>
  <nav class="navbar px-3 navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">E-Commerce</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/products">Product</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/categories" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Pria</a></li>
              <li><a class="dropdown-item" href="#">Wanita</a></li>
              <li><a class="dropdown-item" href="#">Anak-anak</a></li>
            </ul>
          </li>
        </ul>

        <form class="d-flex me-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <!-- <a class="btn btn-outline-primary" href="/login">Login</a> -->

        @if(auth()->guard('customer')->check())
        <div class="dropdown">
          <a class="btn btn-outline-secondary dropdown-toggle"
            href="#" role="button" id="userDropdown" data-bs-toggle="dropdown"
            aria-expanded="false">
            {{ Auth::guard('customer')->user()->name }}
          </a>
          <ul class="dropdown-menu dropdown-menu-end"
            aria-labelledby="userDropdown">
            <li><a class="dropdown-item"
                href="#">Dashboard</a></li>
            <li>
              <form method="POST" action="{{
route('customer.logout') }}">
                @csrf
                <button class="dropdown-item"
                  type="submit">Logout</button>
              </form>
            </li>
          </ul>
        </div>
        @else
        <a class="btn btn-outline-primary me-2" href="{{
route('customer.login') }}">Login</a>
        <a class="btn btn-primary" href="{{
route('customer.register') }}">Register</a>
        @endif
      </div>
    </div>
  </nav>
</div>