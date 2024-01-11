<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bienvenido</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            .center-element {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .right-element {
                display:flex;
                justify-content: right;
                align-items: center;
                

            }
            .background {
                background: blueviolet;
                padding:16px;
            }
            .cetrado {
                width: 80%;
                text-align: center;
                padding: 16px;
            }
            a {
                text-decoration: none;
                color: white;
                font-weight: bold;
                font-size: 20px;
            }
            a:hover {
                color: black;
            }
            .mitad {
                flex: 1;
                padding: 10px;
            }
            .vertical {
                flex: direction: column;
            }
            .center-text {
                text-align: center;
            }
          </style>
    </head>
    <body>
        

        <div class="right-element">
            <div class="right-element background centrado">
                @if (Route::has('login'))
               
                    @auth
                        <a href="{{ url('/dashboard') }}" class="">Inicio</a>
                    @else
                    <div class="mitad vertical">
                        <a href="{{ route('login') }}" class="">Iniciar sesion</a>
                    </div>
                   
                        @if (Route::has('register'))
                        <div class="mitad vertical">
                            <a href="{{ route('register') }}" class="">Registrarse</a>
                        </div>
                        @endif
                    @endauth
                </div>
            @endif

            </div>


        </div>
        <div class="center-element">
            <img src="{{asset('img/mip.png')}}" style="width: 453px; height: 257px;" alt="Descripción de la imagen">
        </div>
            
    <div class="center-text">
        <h1>Bienvenido al manejo integrado del paisaje</h1>
            <h3>Conoce el sistema de gestion de paisajes</h3>
    </div>        
            
    </body>
</html>
