<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Account Registration for Tasks Tracker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1>Tasks Tracker Web-based Application</h1>
  <h2>New Account Registration</h2>
  <form action="index.php?page=accounts&action=register" method="post">
   <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" required>
    </div>    
	   <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" required>
    </div>
	
	   <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
	
	   <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="tel" class="form-control" id="phone" placeholder="Enter phone" name="phone" required>
    </div>
	   
	   <div class="form-group">
      <label for="birthday">Birthday:</label>
      <input type="date" class="form-control" id="birthday" placeholder="Enter birthday" name="birthday" required>
    </div>
	
	<div class="form-group">
    <label for="gender">Select Gender:</label>
	  <select class="form-control" name="gender">
        <option>Male</option>
        <option>Female</option>
      </select>
	</label>
	
	</div>
    
	<div class="form-group">
      <label for="password">Password (6 character minimum)</label>
      <input type="password" pattern=".{6,15}" class="form-control" id="password" placeholder="Enter password" name="password" required>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
	<button type="reset" class="btn btn-default" value="Reset">Reset</button>
  </form>
</div>

</body>
</html>
