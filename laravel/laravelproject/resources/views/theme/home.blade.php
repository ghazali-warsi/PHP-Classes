<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Smart</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styler.css">
    <!-- BOOTSTRAP LINK -->
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    
     {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" id="logo" href="#">TRAVEL<span style="color: #0784ad;">SMART</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="navlink" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="navlink" href="#catalog">Trip Catalog</a>
                </li>
              <li class="nav-item">
                <a class="navlink" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="navlink" href="#contact">Contact Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="navlink dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tour Review
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#rate">Rate Website</a></li>
                  <li><a class="dropdown-item" href="#feedback">Feedback</a></li>
                </ul>
              </li>
              
              <form class="me-lg-4">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              </form>
              <div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal1" type="button">Sign Up</button>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal2" type="button">Login</button>
              </div>
            </ul>
          </div>
      </nav>
      <!-- =======LOGIN SIGNUP MODAL -->
      <!-- Modal -->
<div class="modal fade" id="loginModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up Here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input class="form-control mb-3" type="text" name="" id="" placeholder="Full Name">
        <input class="form-control mb-3" type="email" name="" id="" placeholder="Email">
        <input class="form-control mb-3" type="password" name="" id="" placeholder="Password">
        <button class="btn btn-primary">Sign Up</button>
      </div>
    </div>
  </div>
</div>

     <!-- Modal -->
<div class="modal fade" id="loginModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input class="form-control mb-3" type="email" name="" id="" placeholder="Email">
        <input class="form-control mb-3" type="password" name="" id="" placeholder="Password">
        <button class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>