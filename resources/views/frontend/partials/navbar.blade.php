<nav class="navbar navbar-expand-lg main-navbar">
    <div class="container-fluid">			
      <a class="navbar-brand" href="#">
          <img src="/img/logo.png" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <i class="ion-navicon"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link smooth-link" href="#hero">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-link" href="#features"> About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-link" href="#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-link" href="#project">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-link" href="#contact">Contack</a>
          </li>
        </ul>
        @guest
            <form class="form-inline">
                <a href="{{ route('login') }}" class="btn smooth-link align-middle btn-primary">Login</a>
            </form>	
            <form class="form-inline">
                <a href="{{ route('register') }}" class="btn smooth-link align-middle btn-primary">Register</a>
            </form>
        @else
    
    <li class="dropdown">
        <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
``<ul class="dropdown-menu">
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
        Logout
    </a>
</ul>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
        @endguest
      </div>
  </div>
</nav>