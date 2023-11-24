<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="" href="data:image/png;base64,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">
    <title>@yield('title') | {{config('app.name')}}</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="">
          <img src="" height="50" alt="logo" />
          </a>    
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @auth
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('admin.informatique')}}">list informatique</a>
              </li>
              <li class="nav-item" >
                <a class="nav-link active" aria-current="page" href="{{ route('admin.infographie')}}">list infographie</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('admin.gestion')}}">list gestion</a>
              </li>
            </ul>
            <h6 class="m-2">{{ Auth::user()->name }}</h6>
            <form action="{{ route('logout') }}" method="POST" class="d-flex justify-content-end" role="search">
              @csrf
              @method('DELETE')
              <button class="btn btn-secondary" type="submit">Logout</button>
          </form>
          @endauth
        </div>
      </nav>
      <div>
        @if (session()->has('success'))
        <div class="alert alert-success col-md-3 m-2 " role="alert">
            {{session('success')}}
        </div>  
        @endif
    </div>
        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    </body>
</html>