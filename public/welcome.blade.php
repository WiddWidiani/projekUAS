{{-- filepath: c:\laragon\www\projekUAS\resources\views\home.blade.php --}}
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>filament</title>

    <style>
      body {
        background: url('{{ asset('image/bg.png') }}') no-repeat center center fixed;
        background-size: cover;
      }
      #logo img {
        width: 100%;
        height: 40px;
      }
      #navbar {
        background-color: rgba(255, 255, 255, 0);
      }
      #button{
        height: 50px;
        width: 50%;
        border-radius: 30px;
        color: #3200f8;
        font-family:Monospace; 
        background: #c8fafa;
      }
      #content {
        position: fixed;
        top: 25%;
        left: 7%;
        align-items: center;
        font-family: monospace;
      }
      #fot p{
        display: grid;
        align-items: center;
        justify-items: center;
        justify-content: center;
        align-items: center;
        font-family: monospace;
        background-color: rgba(255, 255, 255, 0);
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
      <div class="container">
        <a class="navbar-brand" id="logo">
            <img src="{{ asset('image/logo.png') }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="container text-center mt-5" id="content">
        <h1 class="display-4">Welcome to TICLES</h1>
        <p class="lead">Please login first, to access the website</p>
        <a href="/admin/login" class="btn btn-primary btn-lg" id="button">GO TO LOGIN</a>
    </div>

    <!-- Footer -->
    <footer class="text-center"style="position: fixed; bottom: 0%; width: 100%;">
        <div class="container" id="fot">
        <p>Created by &copy; 2025 Ticles. All rights reserved.</p>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>