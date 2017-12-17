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
                    <a href="index.php?page=accounts&action=edit">Edit Account</a>
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
  <h2>Edit or Delete a Task</h2>
  <form action="index.php?page=tasks&action=save" method="post">
   		
	<div class="form-group">
      <label for="email">Owner Email:</label>
      <input type="email" class="form-control" id="owneremail" placeholder="Enter email" name="owneremail" readonly value="<?php echo $data->owneremail; ?>">
    </div>
	
	
	  <div class="form-group">
      <label for="duedate">Due Date:</label>
      <input type="text" class="form-control" id="duedate" placeholder="duedate" name="duedate" value="<?php echo $data->duedate; ?>">
    </div>
	   
	  <div class="form-group">
      <label for="message">Message:</label>
      <input type="text" class="form-control" id="message" placeholder="Message" name="message"value="<?php echo $data->message; ?>">
    </div>
	
	<div class="form-group">
    <label for="isdone">Is this task completed? (0=No, 1=Yes):</label>
	  <input type="number" min="0" max="1" class="form-control" id="isdone" placeholder="Is done" name="isdone" value="<?php echo $data->isdone; ?>">
        
	<input type="hidden" name="id" value="<?php echo $data->id; ?>">
	  <div class="btn-group">
	<button type="submit" class="btn btn-primary">Submit</button>
    </form>
	
	<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form2">
    <button type="submit" class="btn btn-danger" form="form2" value="delete">Delete</button>
	</form>
	 </div>
	
	
	
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
        
</form>



