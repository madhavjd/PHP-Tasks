<?php  
if (isset($_SESSION['UserData'])) {
  header("location:home");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"> -->

    <!-- Font Icon -->
   
</head>
<body>

<form method="POST">
  <div>
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
    <small>We'll never share your Details with anyone else.</small><br><br>
  </div>
  <div>
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password"><br><br>
  </div>
  <div>
  <button type="submit" name="Login" class="btn btn-primary">Submit</button>
  </div>
  
</form>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>