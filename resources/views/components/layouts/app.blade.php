<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">            
    <title>@yield("titulo")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  <div id="contenido" class="container-fluid">

      <!-- Navbar  -->
    <div class="row">
      <div class="col">
        <nav class="navbar fixed-top bg-dark navbar-expand-lg"  data-bs-theme="dark">
              <a href="/" class="navbar-brand">
                <img id="logo2" src="{{asset('/img/l2/logo2.png')}}" alt="" width="100">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Inicio</a>
                  </li>
              
                @if(Auth::check())
                <li class="nav-item">
                  <a class="nav-link active" href="/raidboss">RaidBoss</a>
                </li>
                @else
                  <li class="nav-item float-end">
                    <a style="cursor: pointer" class="nav-link" data-bs-toggle="modal" data-bs-target="#Modal2">Registro</a>
                  </li>
                  <li class="nav-item float-end">
                    <a style="cursor: pointer" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
                  </li>
                @endif
              </ul>

                @if(Auth::check())
                <ul class="nav justify-content-end" style="width:100%">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      {{ Auth::user()->email }}
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">{{ Auth::user()->name }}</a></li>
                      <li>
                            <!-- Authentication -->
                          <form method="POST" action="{{ route('logout') }}">
                            @csrf    
                            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Logout') }}
                            </a>
                          </form>
                      </li>
                    </ul>
                  </li>
                </ul>
                @endif
              </div>
        </nav>
    </div>
  </div>  
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
      {{$slot}}
 
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>