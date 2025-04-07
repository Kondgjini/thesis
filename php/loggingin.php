<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  
<div class="container my-5">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Welcome, please Login to continue!</h5> 
          <form action="loggingindone.php" method="post" class="form-signin">
            <div class="form-label-group">
            <label for="inputEmail">Email address:</label>
              <input type="email" name="email" required placeholder="enter your email" class="form-control">
            </div>
            <div class="form-label-group">
              <label for="inputPassword">Password:</label>
              <input type="password" name="password" required placeholder="enter your password" class="form-control">
            </div>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit1">Login Now</button>
            <div class="text-center">
              <p>First Time? <a href="signup.php">Register Here!</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
