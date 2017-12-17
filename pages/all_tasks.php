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
                    <a href="#">
                        Main Menu
                    </a>
                </li>
                <li>
                    <a href="index.php?page=tasks&action=create">Create Task</a>
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
                <p>Within this dashboard you can view, edit or delete your tasks</p>
                <p></p>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
            </div>
			<br>
<?php

if ($data == false) {
	echo '<p>You do not have any tasks created yet. Click Create task under the Main Menu to begin</p>';
} else {
    print utility\htmlTable::genarateTableFromMultiArray($data);
}

?>
			
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