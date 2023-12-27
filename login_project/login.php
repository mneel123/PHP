<?php 
 $login = false;
 $error = false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
    include 'db_connect.php';
    $sname = $_POST["sname"];
    $password = $_POST["password"];
    
    

        $sql = "Select * from student where sname = '$sname' AND password = '$password'";
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if($num == 1){
           $login = true;
            session_start();
            $_SESSION['Loggedin'] = true;
            $_SESSION['sname'] = $sname;
           header("location: home.php");
          }
        
          else {
            $error = "Invalid Credentials";
          }
          
    
        }
   
      



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'navbar.php' ?>
    <?php
            if($login){ 
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Success</strong> You Are Logged In. 
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            }

            if($error){ 
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Error!</strong>'. $error .'
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            }


    ?>
    <div class="container mt-4">
        <h2 class="text-center">Login</h2>
<form action="/login_project/login.php" method="post">
        <div class="mb-3">
            <label for="sname" class="form-label">User Name</label>
            <input type="text" class="form-control" id="sname" name="sname">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        
        <div class="text-center">
        <button type="submit" class="btn btn-primary col-md-2 ">Login</button>
        </div>
  
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>