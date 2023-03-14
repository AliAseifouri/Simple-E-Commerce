
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Brand</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/myorders">Orders</a>
          </li>
          <li>
            <form class="d-flex navbar-form navbar-left" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
          </li>


        </ul>

       <ul class="nav navbar-nav navbar-right">
        <li>

           @php
           if(Session::has('user')) {
            $total = App\Models\Cart::where('user_id',Session::get('user')['id'] )->count();
           }

           else{$total = 0;}
           @endphp




            <a href="/cartlist">Cart({{$total}}

                )</a>
        </li>

        @if(Session::has('user'))
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
          </a>
          <ul class="dropdown-menu">
            <li><a href="/logout">Logout</a></li>

          </ul>
        </li>
        @else
        <li><a href="/login">Login</a></li>
        <li><a href="/register">register</a></li>
        @endif
       </ul>


      </div>
    </div>
  </nav>
