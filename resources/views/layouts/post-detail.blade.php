<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('page title')</title>
  <!-- favicon -->
  <link rel="icon" type="image/png" href="../img-src/logo/02.png">
  <!-- bootstrap css -->
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- fontawesome css -->
  <link rel="stylesheet" href="../fontawesome/css/all.css">
  <!-- our css -->
  <link rel="stylesheet" href="../css/global.css">
  <!-- animate css -->
  <link rel="stylesheet" href="../animate/css/animate.min.css">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');
  </style>
</head>
<body>
  <header>
    @include('layouts.header01')
  </header>
  <main>
    @yield('breadcrumbs')
    @yield('content')
  </main>
  <footer>
    @include('layouts.footer01')
  </footer>
  <!-- boostrap js -->
  <script src="../bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- fontawesome js -->
  <script src="../fontawesome/js/all.js"></script>
</body>
</html>
