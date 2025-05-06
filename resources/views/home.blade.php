<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style_app/style.css') }}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg" id="navbar">
      <div class="container">
        <a class="navbar-brand" id="logo">
            <img src="{{ asset('image/logo.png') }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <div class="container text-center mt-5" id="content">
        <h1 class="display-4">Welcome to TICLES</h1>
        <p class="lead">Please login first, to access the website</p>
        <a href="{{ route('login') }}" class="btn btn-outline-light" id="but">GO TO LOGIN</a>
    </div>
    <footer class="text-center"style="position: fixed; bottom: 0%; width: 100%;">
        <div class="container" id="fot">
        <p>Created by &copy; 2025 Ticles. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>