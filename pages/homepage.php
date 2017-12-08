<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>NJIT IS601 Final Project</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->

<style>
    body { 
          background-color: #E6E6FA
    }
	    
	h1 {
		font-family: "Courier New", Courier, monospace;
    }
	
	h2 {
		font-family: "Courier New", Courier, monospace;
	}	
	
	h3 {
		font-family: "Courier New", Courier, monospace;
	}
	
</style>	
	
	
	</head>

<body>


<table>
<tr class="box">
    <td>
		<img src="pages/todo-list.png" height="100" width="100"/>
	</td>
    <td>
		<h1>
    <?php

    //coming from homepagecontroller;
    echo $data['site_name'];

    ?> </h1>
	</td>
</tr>
</table>

<br>

<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>


</form>
<br>
<h3>Click <a href="index.php?page=accounts&action=register">register</a> if you are a new user</h3>


<script src="js/scripts.js"></script>
</body>
</html>