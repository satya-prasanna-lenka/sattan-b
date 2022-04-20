<?php
$servername= "localhost";
$username = "sattanbi_bisattan";
$password = "bisattan@892265";
$database = "sattanbi_contactdb";
$conn = mysqli_connect($servername, $username , $password , $database,'3306');
if($_GET['id']){
    $id = $_GET['id'];
    // echo $id;
    $sql = "SELECT * FROM `about` WHERE `id`= '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        $sql = "DELETE FROM `about` WHERE `about`.`id` = '$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("location: admin.php");
        }
    }
}

?>