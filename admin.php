<?php
session_start();
if(!isset($_SESSION['loggedin_admin']) || $_SESSION['loggedin_admin']!=true){
  header("location: adminlogin.php");
  exit;
}
?>

<?php

$err = false;
$success = false;
$servername= "localhost";
$username = "sattanbi_bisattan";
$password = "bisattan@892265";
$database = "sattanbi_contactdb";
$conn = mysqli_connect($servername, $username , $password , $database,'3306');

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>contact</title>
  </head>
  <body>

  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Sl no.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">About</th>
      <th scope="col">Date</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
   

    <?php
    $sql ="SELECT * FROM `about`";
    $result = mysqli_query($conn, $sql); 
        $slno = 0;
        while($rows = mysqli_fetch_assoc($result)){
            $slno= $slno+1;
            echo '
             <tr>
            <th scope="row">'.$slno.'</th>
      <td>'.$rows['name'].'</td>
      <td>'.$rows['email'].'</td>
      <td>'.$rows['more'].'</td>
      <td>'.$rows['time'].'</td>
      <td><button class="btn btn-outline-danger"><a style="text-decoration:none; color:white;" href="delete.php?id='.$rows['id'].'">Delete</a></button></td>
      </tr>';
        }
    
    ?>
    
      <!-- <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td> -->
    
  </tbody>
</table>
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  
  </body>
</html>