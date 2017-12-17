<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NJIT IS601 Final Project</title>

    <!-- Bootstrap core CSS -->
    <link href="pages/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="pages/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="pages/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="pages/css/landing-page.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" >Version 1.0</a>
        <a class="btn btn-primary" href="index.php?page=accounts&action=register">New Account Registration</a>
      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Tasks Tracker Web-based Application</h1>
			<h2> Sign In Page </h2>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">

<form action="index.php?page=accounts&action=login" method="POST">
	<div class="form-control form-control-lg">
        <input type="email" class="form-control form-control-lg" placeholder="Enter Email" name="email" required>
        <input type="password" class="form-control form-control-lg" placeholder="Enter Password" name="password" required>
        <button type="submit" class="btn btn-block btn-lg btn-primary">Sign In</button>
    </div>

</form>
			
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3>Mobile Task Mangement</h3>
              <p class="lead mb-0">Manage your tasks from any device!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
              <h3>New Features Added Weekly</h3>
              <p class="lead mb-0">Every week new features are added to make managing your tasks easier!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>Easy to Use</h3>
              <p class="lead mb-0">Easy design and live support 24x7!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <!-- Bootstrap core JavaScript -->
    <script src="pages/vendor/jquery/jquery.min.js"></script>
    <script src="pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
