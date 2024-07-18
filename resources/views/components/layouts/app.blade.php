<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!--Import Google Icon Font-->
   
       <!-- Compiled and minified CSS -->
       <!-- Compiled and minified JavaScript -->
        <title>{{ $title ?? 'Page Title' }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
         <!-- Dropdown Structure -->
            <div  class="navbar-fixed">
                
                <nav class="menux">
                  <div   class="nav-wrapper">
                    <a href="#!" class="brand-logo"></a>
                      <img id="logo2" class="responsive-img" src="{{asset('/img/l2/logo2.png')}}" alt="">
                    <ul class="right hide-on-med-and-down">
                      <!-- Dropdown Trigger -->
                    </ul>
                  </div>
              </nav>
          </div>
        {{ $slot }}
        
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
