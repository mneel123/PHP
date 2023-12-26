<?php
$insert = false;
$update = false;
$delete = false;
$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";

$conn = mysqli_connect($servername , $username ,$password , $database);

if(!$conn) {
    die("sorry failed connection");
}
if(isset($_GET['delete'])){
  $sno = $_GET['delete']; 
  $delete = true;
  $sql = "DELETE FROM `onenote` WHERE `sno` = $sno";
  $result = mysqli_query($conn,$sql);
}
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['snoedit'])){
    $sno = $_POST["snoedit"];
    $title = $_POST["tedit"];
    $des = $_POST["desedit"];
    
    $sql = "UPDATE `onenote` SET `title` = '$title' , `des` = '$des'  WHERE `onenote`. `sno` = $sno";
    $result = mysqli_query($conn,$sql);
    if($result){
      $update = true;
  } else {
      echo "could not Update successfully.";
  }
  }
   else {
    $title = $_POST["title"];
    $des = $_POST["des"];
    
    $sql = "INSERT INTO `onenote` (`title`, `des`) VALUES ('$title ','$des')";
    $result = mysqli_query($conn,$sql);
    
    if($result){
      // echo "the recored has been inserted successfully <br>";
      $insert = true;
    }
    else {
      echo "the recored was not  inserted successfully because this error ---> ".mysqli_error($conn);
    }
    
     }
    
  }


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

   <title>PHP CRUD</title>


  </head>
  <body>

    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editmodal">
  Edit Modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="editmodallable1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editmodallable1">Edit Note</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/crud/index.php" method="post">
        <input type="hidden" name="snoedit" id="snoedit">
  <div class="mb-3">
    <label for="title" class="form-label">Notes Title</label>
    <input type="text" class="form-control" id="tedit" name="tedit">
  </div>
  <div class="mb-3">
    <label for="des" class="form-label">Notes Description</label>
    <textarea class="form-control" id="desedit" name="desedit" rows="3"></textarea>
  </div>
  <button type="submit" id="update" name="update" class="btn btn-primary">Update</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
<?php

if($insert){
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success</strong> Your note has been inserted successfully. 
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}

if($update){
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success</strong> Your note has been inserted successfully. 
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}

if($delete){
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success</strong> Your note has been inserted successfully. 
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}

?>

<div class="container mt-3">
    <h2>Add Note...</h2>
<form action="/crud/index.php" method="post">
  <div class="mb-3">
    <label for="title" class="form-label">Notes Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="des" class="form-label">Notes Description</label>
    <textarea class="form-control" id="des" name="des" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="container mt-3 mb-5">
    
    <table class="table mt-3" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
      $sql = "SELECT * FROM `onenote`";
      $result = mysqli_query($conn,$sql);
      $sno = 0;
      while($row = mysqli_fetch_assoc($result)){
          $sno = $sno + 1;
        echo "<tr>
        <th scope='row'>" . $sno . "</th>
        <td>" . $row['title'] . "</td>
        <td>" . $row['des'] . "</td>
        <td>  <button  class='edit btn btn-sm btn-primary' id=". $row['sno'] .">Edit</button>  <button  class='delete btn btn-sm btn-primary' id=d". $row['sno'] .">Delete</button> </td>
      </tr>";
           
      }
    ?>
  </tbody>
</table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
      let table = new DataTable('#myTable');
    </script>
    <script>
     edits = document.getElementsByClassName('edit');
     Array.from(edits).forEach((element)=>{
      element.addEventListener("click", (e)=>{
        console.log("edit", );
        tr = e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[0].innerText;
        des = tr.getElementsByTagName("td")[1].innerText;
        console.log(title, des);
        tedit.value = title;
        desedit.value = des;
        snoedit.value = e.target.id;
        console.log(e.target.id);
        $('#editmodal').modal('toggle');
      })
     })
     deletes = document.getElementsByClassName('delete');
     Array.from(deletes).forEach((element)=>{
      element.addEventListener("click", (e)=>{
        console.log("delete", );
        sno = e.target.id.substr(1,);
       if(confirm("Press a button!")){
        console.log("Yes");
        window.location = `/crud/index.php?delete=${sno}`;
       }
       else {
        console.log("No")
       }
       
      })
     })
    </script>
  </body>
</html>