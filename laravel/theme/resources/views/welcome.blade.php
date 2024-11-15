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


@yield('content')





<!-- Footer -->
<!-- ======================== -->
<footer class=" pt-4 pb-4" style="background-color: #0784ad;">
    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Travel Smart</h5>
                <p style="color: #fff;">Welcome to Travel Smart, your go-to platform for all your travel needs!Our goal is to make your travel planning easy, enjoyable, and hassle-free.</p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Links</h5>
                <p>
                  <a href="#" class="text-white" style="text-decoration: none;">Home</a>
                </p>
                <p>
                    <a href="#catalog" class="text-white" style="text-decoration: none;">Catalog</a>
                </p>
                <p>
                    <a href="#about" class="text-white" style="text-decoration: none;">About Us</a>
                </p>
                <p>
                    <a href="#contact" class="text-white" style="text-decoration: none;">Contact Us</a>
                </p>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Useful links</h5>
                <p>
                    <a href="#review" class="text-white" style="text-decoration: none;">Reviews</a>
                </p>
                <p>
                    <a href="#rate" class="text-white" style="text-decoration: none;">Rate Here</a>
                </p>
                <p>
                    <a href="#feedback" class="text-white" style="text-decoration: none;">Feedback</a>
                </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 text-white">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contacts</h5>
                <p>
                   <i class="fas fa-home mr-3"></i> Pakistan
                </p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> ebadansari161@gmail.com
                </p>
                <p>
                   <i class="fas fa-phone mr-3"></i> 0313-2434877
                </p>
                <p>
                    <i class="fas fa-print mr-3"></i> 0310-2935875
                </p>
            </div>
          </div>
    </div>
</footer>
       


    <!-- JS LINK -->
    <script src="js/script.js"></script>
    <!-- BOOTSTRAP JS LINK -->
    <script src="bootstrap/bootstrap.bundle.js"></script>
    <!-- FONT AWESOME JS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>