<!DOCTYPE html>
<html lang="en">
<head>
  <title>NJIT IS601 Final Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
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
<div class="container">
  
  <form class="form-inline" action="index.php?page=accounts&action=login" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<br>
<h3>Click <a href="index.php?page=accounts&action=register">register</a> if you are a new user</h3>

</body>

</html>


