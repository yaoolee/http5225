<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lara LMS</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
crossorigin="anonymous">
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
        <a class="nav-link active" href="/students">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/students">Students</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/courses">Courses</a>
    </li>
     <li class="nav-item">
        <a class="nav-link" href="/professors">Professors</a>
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
 