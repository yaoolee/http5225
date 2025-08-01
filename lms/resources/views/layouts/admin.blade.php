<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lara LMS</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container-fluid">
<div class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
<a class="navbar-brand" href="#">Laravel LMS</a>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="/students">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/students">Students</a>
</li>
</ul>
</div>
</div>
</nav>
</div>
</div>
<div class="container-fluid mt-5">
<div class="container">
@yield('content')
</div>
</div>
</body>
</html>
 