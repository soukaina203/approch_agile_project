

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
    EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div id="app">
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
                        <a class="nav-link" href="/choose">SignUp</a>
                    </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">{{$etud_name}}</a>
                        </li>

                          <li class="nav-item">
                            <a class="nav-link" href="{{url('logout/')}}">Log out</a>
                          </li>
                </ul>
              </div>
            </div>
          </nav>
        <br>


        @if ($cours->isEmpty())
        <h2>No Result</h2>
      @else
      <h1>Results</h1>
        <table class="table table-bordered">
          <tr>
            <th>No</th>
            <th>Titre</th>
            <th>Prof</th>
            <th>Matiere</th>
            <th>Actions</th>
          </tr>
          @foreach ($cours as $index => $cour)
          <tr>
            <td>{{ $cour->id }}</td>
            <td>{{ $cour->title }}</td>
            <td>{{ $profs[$index] }}</td>
            <td>{{ $matier[$index] }}</td>
            <td>
              <a class="btn btn-info" href="{{ url('Cours/'. $cour->id).'/etud' }}">Voir</a>
            </td>
          </tr>
          @endforeach
        </table>
      @endif
    </div>
</body>
</html>
