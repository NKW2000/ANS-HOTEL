 <nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 shadaw-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold fs-3 h-font  me-5 " href="{{ route('welcome') }}">ANS Hotel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-5" aria-current="page" href="{{ route('welcome') }}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active me-5" aria-current="page" href="{{ route('rooms.index') }}">Rooms</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active me-5" aria-current="page" href="About.php">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active me-5" aria-current="page" href="contactus.php">Contact Us</a>
          </li>
        </ul>
        @if (Route::has('login'))
        <div class="d-flex"> 
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
           @auth 
           <a class="btn btn-outline-danger me-2" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>    
           @else
          <a class="btn btn-outline-primary me-2" type="submit" href="{{ route('login') }}">{{ __('login') }}</a>
           @if (Route::has('register'))
          <a class="btn btn-outline-dark me-2" type="submit" href="{{ route('register') }}">{{ __('register') }}</a>       
        @endif  
        @endauth
        </div>
        @endif
          
      </div>
    </div>
  </nav>