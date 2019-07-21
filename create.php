<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$username = $_POST("username");

$sql = "INSERT INTO website(username,email,password)values($username,'kcuebcw','kwncuwcw');
$result = $conn->query($sql);

$conn->close();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Create a account</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--external css -->
    <link rel="stylesheet" type="text/css" href="main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    
     <link rel="stylesheet" type="text/css" href="main.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    
    <!--NAVBAR-->
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
            <a class="navbar-brand" href="main.html">Scrutiny</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="http://www.change.org" target="_blank">change.org <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="signin.html" target="_blank">Sign in</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Survey</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
          


          <div style="background-image: url(https://w.wallhaven.cc/full/ox/wallhaven-oxllk9.jpg) ;background-attachment:fixed;background-repeat: no-repeat;background-size: cover;">
          <br>
          <br>
            <div class="container rounded" style="background-color:beige;width: 400px;margin-left: 3%;">
              <form class="w-100 p-3" method="post">
                  <div class="form-group row">
                    <div class="col-md-10">
                      <label>Username</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-md-10">
                        <label>Email address</label>
                        <input type="email" name="username" class="form-control">
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-md-10">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="password" name="password" class="form-control">
                      </div>
                  </div>
                  <div class ="form-group row">
                      <div class="col-md-10">
                        <label class="small">Make sure it's at least 15 characters OR at least 8 characters including a number and a lowercase letter.</label>
                      </div>
                  </div>
                  <div class ="form-group row">
                    <div class="col-md-10">
                      <button type="button" class="btn btn-primary btn-lg btn-block form-control">Sign Up</button>
                    </div>
                  </div>
                  <div class ="form-group row col-md-10">
                      <label class="small">By clicking “Sign up”, you agree to our Terms of Service and Privacy Statement. We’ll occasionally send you account related emails</label>
                  </div>
                  
                </form>
                <br>
                <br>
                
              </div>
          </div>
            
             
          
</body>
</html>