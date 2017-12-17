<!doctype html>
<html lang="en">

<head>
<link rel="stylesheet" href="css/styles.css?v=1.0">
    
	<!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
    <meta name="author" content="">
	
    <title>Tasks tracker Web Application</title>

    <!-- Bootstrap core CSS -->
    <link href="pages/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pages/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a>
                        Main Menu
                    </a>
                </li>
                <li>
                    <a href="index.php?page=tasks&action=all">View Tasks</a>
                </li>
                <li>
                    <a href="index.php?page=accounts&action=logout">Log Out</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Tasks Tracker Dashboard</h1>
                <p></p>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
            </div>
			<br>
			<div class="container">
  <h1>Tasks Tracker Web-based Application</h1>
  <h2>Admin Account Management Dashboard</h2>
  <form action="index.php?page=accounts&action=save" method="post">
   	
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="email" name="email" readonly value="<?php echo $data->email; ?>">
    </div>
	
	
	  <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="fname" name="fname" value="<?php echo $data->fname; ?>">
    </div>
	   
	  <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" id="lname" placeholder="lname" name="lname" value="<?php echo $data->lname; ?>">
    </div>
	   
	  <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="phone" name="phone"value="<?php echo $data->phone; ?>">
    </div>
	
	  <div class="form-group">
	  <label for="birthday">Birthday:</label>
	  <input type="date" class="form-control" id="birthday" placeholder="birthday" name="birthday" value="<?php echo $data->birthday; ?>">
      
	<div class="form-group">
	  <label for="gender">Gender:</label>
	  <input type="text" class="form-control" id="gender" placeholder="gender" name="gender" value="<?php echo $data->gender; ?>">
	  
	<input type="hidden" name="id" value="">
	  <button type="submit" class="btn btn-primary">Submit</button>
	  <button type="reset" class="btn btn-warning" value="Reset">Reset</button>
   </form>
      <form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
      <button type="submit" class="btn btn-danger" form="form1" value="delete">Delete This Account</button>
</form>
      </div>
</div>
     <!-- /#page-content-wrapper -->

	 
    </div>
	

    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="pages/vendor/jquery/jquery.min.js"></script>
    <script src="pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

<script src="js/scripts.js"></script>	
</body>

</html>