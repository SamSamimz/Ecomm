<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
  <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </div>
    @auth    
    <div class="mx-3">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ auth()->user()->name }}
        </a>
        <div class="dropdown-menu" id="navdropItem">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="{{ route('logout') }}">Signout</a>
        </div>
      </div>
      <div>
        <a href="" class="text-danger" style="font-size: 20px">
          <ion-icon name="cart-outline"></ion-icon>
        </a>
      </div>
      @endauth
  </div>
</nav>