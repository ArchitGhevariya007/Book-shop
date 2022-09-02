<?php

include 'connection.php';
session_start();

//delete categories
if (isset($_POST['cat_id'])){
    $id =$_POST['cat_id'];
    $sql = "delete from categories where cat_id=$id";
if (mysqli_query($conn, $sql)) {
    $_SESSION["errormsg"]= "Record deleted successfully";
} else {
    $_SESSION["errormsg"]= "Error";
}
    }
?>