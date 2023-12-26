<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Contact Us</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
         </li>
        
    </ul>
      
    </div>
  </div>
</nav>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];


        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "dbyash";

        $conn = mysqli_connect($servername , $username ,$password , $database);

        if(!$conn) {
            die("sorry failed connection");
        }
        else {
            //echo "Connection Successfull..<br>";

            $sql = "INSERT INTO `employees` (`name`, `email`, `password`) VALUES ('$name', '$email', '$pass');";
            $result = mysqli_query($conn , $sql);
    
            if($result){
                echo "Data submited.";
            }
            else {
                echo "the data not  insert  successfully because this error ---> ".mysqli_error($conn);
            }
        }
        }

?>
    <div class="container mt-3">
        <h1>Contact Us</h1>
    <form action="demo_form.php" method="post">
    <div class="mb-3 mt-2">
    <label for="name" class="form-label">Name :</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email Address :</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <input type="password" class="form-control" name="pass" id="pass">
  </div>
  <button type="submit" class="btn btn-primary" id="btn1">Submit</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>