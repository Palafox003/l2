@extends("layouts.main")

@section("titulo","INICIO")

@section("contenido")
    <br><br>
    <div class="row p-0 mt-5" id="scrollspyServerEstatus">
        <div class="col">
            @livewire('welcome')
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>

                </div>
                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('/img/l2/s1.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Descarga el Juego y el Parche de System</h3>
                            <a href="#descargas" class="btn btn-lg btn-primary">Instalador del Juego</a>
                            <a href="#descargas" class="btn btn-lg btn-success">Parche System</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/img/l2/s2.jpg')}}" class="d-block w-100" alt="...">
                        <div style="" class="h-100 align-middle carousel-caption d-md-block">
                            <div class="row align-middle" style="margin-top:25%">
                                <div class="col-12 col-sm-12 col-md-6">
                                  <div class="card" style="background-color: rgba(255,255,255,0.7)">
                                    <div class="card-body">
                                      <h5 class="card-title">Rates del Servidor</h5>
                                      <p class="card-text">xp: 20x / SP: 20x / Adena: 60x / Drop: 20x / Spoil: 20x / Boss: 10x / Quest: 10x</p>
                                      <a href="#informacion" class="btn btn-primary">Información</a>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/img/l2/s3.jpg')}}" class="d-block w-100" alt="...">
                        
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/img/l2/s5.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/img/l2/s6.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="row justify-content-center"  >  
        <div class="col-12 col-md-3 text-center">
            <a href="#scrollspyServerEstatus">
                <div class="card border-light text-center " style="width: 18rem;margin:auto;">
                    <img src="{{asset('/img/l2/logo3.png')}}" class="card-img-top opciones" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fondo-card">
                        <i class="bi bi-house"></i>
                        Inicio
                      </h5>                      
                    </div>
                  </div>                
            </a>
        </div>
        <div class="col-12 col-md-3">
            <a href="#usuarios">
                <div class="card border-light text-center" style="width: 18rem;margin:auto;">
                    <img src="{{asset('/img/l2/img1.png')}}" class="img-fluid card-img-top opciones" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fondo-card">
                        <i class="bi bi-people"></i>
                        Usuarios
                      </h5>                      
                    </div>
                  </div> 
            </a>
        </div>
        <div class="col-12 col-md-3">
            <a href="#descargas">
                <div class="card border-light text-center" style="width: 18rem;margin:auto;">
                    <img src="{{asset('/img/l2/img2.png')}}" class="img-fluid card-img-top opciones" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fondo-card">
                        <i class="bi bi-cloud-download"></i>
                        Descargas
                      </h5>                      
                    </div>
                  </div> 
            </a>                        
        </div>
        
        
        <div class="col-12 col-md-3">
            <a href="#informacion">
                <div class="card border-light text-center" style="width: 18rem;margin:auto;">
                    <img src="{{asset('/img/l2/img3.png')}}" class="img-fluid card-img-top opciones" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fondo-card">
                        <i class="bi bi-info-circle"></i>
                        Información
                      </h5>                      
                    </div>
                  </div> 
            </a>                        
        </div>
             
    </div>

    
    <div class="row d-none d-sm-block">
        <div class="col">
            <div class="parallax" style="background-image: url({{asset('img/l2/body-bg-top.jpg')}})">
                
            </div>
        </div>
    </div>
    
    <div id="usuarios" class="row">
        <div class="col">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              @livewire('usuarios-online')
            </div>
          </div>
        </div>
    </div>
    
    <div class="row d-none d-sm-block">
        <div class="col">
            <div class="parallax" style="background-image: url({{asset('/img/l2/body-bg-bottom.jpg')}})">
                
            </div>
        </div>
    </div>
    
    <div class="row" id="descargas">
        <div class="col text-center">
            <div class="card">
                <div class="card-header">
                  DESCARGAS
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="https://drive.google.com/drive/folders/1b4eirkq4zyS8QdvDuuZoQw7XXWywdWCm?usp=drive_link">
                            DESCARGA EL INSTALADOR
                            <i class="bi bi-cloud-download"></i>
                        </a>    
                    </li>
                    <li class="list-group-item">
                        <a href="{{asset('/img/l2/Parche_1.2.zip')}}">
                            DESCARGA PARCHE 1.2
                            <i class="bi bi-cloud-download"></i>
                        </a>
                    </li>
                </ul>
              </div>
        </div>
    </div>
    
    <div class="row d-none d-sm-block">
        <div class="col">
            <div class="parallax" style="background-image: url({{asset('/img/l2/485633.jpg')}})">
                
            </div>
        </div>
    </div>
    
    <div id="informacion" class="row justify-content-center text-center">
        <div class="col text-center">
            <div class="card text-cente m-3">
                <div class="card-body text-center table-responsive">
                  <h5 class="card-title">DATOS DEL SERVIDOR</h5>
                        <table class="table table-responsive">
                            <thead class="table-dark">
                              <tr>
                                <th scope="col">CONFIRUACIÓN</th>
                                <th scope="col">RATES</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>XP/SP</td>
                                <td>X20</td>
                              </tr>
                              <tr>
                                <td>ADENA</td>
                                <td>X60</td>
                              </tr>
                              <tr>
                                <td>DROP</td>
                                <td>X</td>
                              </tr>
                              <tr>
                                <td>RAID DROP</td>
                                <td>X</td>
                              </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card m-3">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                    <table class="table">
                        <thead class="table-dark">
                          <tr>
                            <th scope="col">ENCATAMIENTO</th>
                            <th scope="col">RATES</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>SAFE</td>
                            <td>+10</td>
                          </tr>
                          <tr>
                            <td >MAX WEAPON</td>
                            <td>+18</td>
                          </tr>
                          <tr>
                            <td>MAX ARMOR</td>
                            <td>+10</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("js")
    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                var barra = $(window).scrollTop();
                var posicion =  (barra * 0.10);                
                $('#parallax1').css({
                    'background-position': '0 -' + posicion + 'px'
                }); 
                $('#parallax2').css({
                    'background-position': '0 -' + posicion + 'px'
                });      
            });        
        });
    </script>
@endsection