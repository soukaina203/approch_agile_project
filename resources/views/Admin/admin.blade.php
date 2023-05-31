{{-- @extends('../layouts.app')

@section('content')




 --}}
 <!doctype html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
     EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 </head>
 <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand title" href="#">Eduschool</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

          <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
            <div class="ulHeader">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/choose">Sign Up</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/logout">Log out</a>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link" href="{{url('logout/')}}">Log out</a>
                  </li> --}}
            </ul>
          </div>
        </div>
      </nav>




     <div>
         <a href="/Profs" class="btn btn-primary">tous les Profs</a>
         <a href="/Etudiants" class="btn btn-primary">tous les Etudiants</a>
         <a href="/cours/all/admin" class="btn btn-primary">tous les Cours</a>
         <a href="/Matiere" class="btn btn-primary">tous les Matieres</a>
     </div>

 </body>
 </html>

<br>











