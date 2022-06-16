<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
        
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <div class="container">
                  <a class="navbar-brand" href="{{route('home')}}">
                    <img height="60" src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/logo.png" alt="">
                  </a>
                  <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                      <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home <span class="visually-hidden">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('comics.index')}}">Comics</a>
                      </li>
          
                    </ul>
          
                  </div>
                </div>
              </nav>
        </header>

        <main>
            @yield('content')
        </main>


    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
