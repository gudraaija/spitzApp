<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SpitzApp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/common.css" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">My profile</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Spitz Training App
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Public trainings</a>
                    <a href="#about">About</a>
                </div>
            </div>
        </div>

          <!-- Page Content -->
        <section align="center" id="about">
          <div class="container">
            <h1> -- About SpitzApp -- </h1>
            <p>Spitz breeds, also known as northern breeds, have a rugged charm. The group is diverse and includes breeds from Scandinavia; Finnish spitz, Norwegian spitz, Asia, shar pei, Akita and chow chow plus Siberia and America; husky and Alaskan malamute respectively. To effectively train your spitz dog, understanding his personality and motivations is key.</p>
          </div>
        </section>
        
        <footer>
          <div class="container">
            <p align="center">Aijas Čaures Eksāmena darbs Tīmekļu tehnoloģijās II </p>
          </div>
          <!-- /.container -->
        </footer>
    </body>
</html>
