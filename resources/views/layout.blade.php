<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>LARAVEL 8</title>
  </head>
  <body>


  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">

    <a class="navbar-brand" href="{{ route('students.create') }}">Create</a>
    <a class="navbar-brand" href="">LARAVEL 8</a>
    <a class="navbar-brand" href="{{ route('students.index') }}">Students</a>



    </div>
  </div>
</nav>

    <div class="container">

      @yield('content')
    </div>
  </body>
</html>
