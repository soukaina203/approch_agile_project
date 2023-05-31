<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
    EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .centered-header {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 70vh;
        }
        .user{
            position: absolute;
            top: 25px;
            right: 40px;
            color: rgb(136, 130, 130)
        }.ulHeader{
            position: absolute;
            top: 15px;
            right: 78px;
        }.title{
            position: absolute;
            left: 20px;
            top: 15px
        }.user2{
            position: absolute;
            top: 25px;
            right: 40px;
            color: rgb(136, 130, 130)
        }
      </style>
</head>
<body>
    <div id="app">
        {{-- @include('Header') --}}


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

                </ul>
              </div>
            </div>
          </nav>

    </div>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
