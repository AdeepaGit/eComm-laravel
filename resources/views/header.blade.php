<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
    $total=ProductController::cartItem();
}

?>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">E-Comm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Order</a>
        </li>
        <li class="nav-item">
            <form action="/search" class="d-flex" role="search">
                <input class="form-control me-2" type="text" name="query" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
        </li>
      </ul>
      <div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li>
        <a class="nav-link" href="/cartList"><i class="fa-solid fa-cart-shopping lg">({{ $total }})</i></a>
            </li>
               @if(Session::has('user'))

               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Session::get('user')['name'] }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </li>

                @else
                 <li><a class="nav-link" href="/login">Login</a></li>

                @endif
        </ul>
      </div>
    </div>
  </div>
</nav>
