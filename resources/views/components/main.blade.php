<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
            
    <title>@yield("titulo")</title>
</head>
<body>
  <h1>hOLA</h1>
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
    @yield("contenido")
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
     $(".dropdown-trigger").dropdown();
    </script>
    @yield("js")

</body>
</html>