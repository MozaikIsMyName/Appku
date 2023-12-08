<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa</title>
    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="{{ asset('/') }}assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
  </head>
  <body>
    
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#">Data Siswa SMK NMC</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ (request()->segment('1')=='' || request()->segment('1') == 'dashboard') ? 
                'active' : '' }}" aria-current="page" href="{{ url('dashboard') }}">
                    <i class="fa-solid fa-gauge"></i> Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (request()->segment('1') == 'Student') ? 
                    'active' : '' }}" aria-current="page" href="{{ url('Student') }}">
                    <i class="fas fa-user"></i> Data Siswa
                </a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="/login" class="nav-link" {{ (request()->segment('1')=='' || request()->segment('1') == 'dashboard') ? 
                  'active' : '' }}" aria-current="page" href="{{ url('dashboard') }}">
                  <i class="bi bi-box-arrow-in-right"></i>
                  Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- End --}}

    {{-- content --}}
    <div class="mt-2">
        <div class="container">
            @yield('content')
        </div>
    </div>
    {{-- End content --}}

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    {{-- My Style --}}
    <link rel="stylesheet" href="/css/style.css">

    <script src="{{ asset('/') }}assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>