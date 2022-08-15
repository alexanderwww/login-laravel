<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>

    <link rel="stylesheet" href="{{ url('hojaCss.css') }}">

</head>
<body>

  <nav class="navbar navbar-dark bg-dark navbar-expand-lg mb-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homeIndex')}}">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homeIndex')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('registerShow') }}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('loginShow') }}">Login</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logoutUser') }}" class="nav-link">Exit</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

