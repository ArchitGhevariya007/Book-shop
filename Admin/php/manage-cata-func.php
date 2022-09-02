<?php
include 'connection.php';
session_start();

//update categories
if (isset($_POST['cat_id'])) {
    $id=$_POST['cat_id'];
    $name=$_POST['update_cat_name'];
    // $sql = "select cat_id from categories where cat_name=$name";
    
    // $result = mysqli_query($conn, $sql);
    

    // if(mysqli_num_rows($result)===1)
    // {  

        // $product = mysqli_fetch_assoc($result);

        // $id = $product['cat_id'];
        $sql = "update categories set cat_name='$name' where cat_id='$id'";

        if (mysqli_query($conn, $sql)) {
            $_SESSION["errormsg"]= "Record update successfully";
            echo "ok update";
        } else {
            $_SESSION["errormsg"]= "Error";
            echo "failed";
        }
    }

    


//Insert categories
if(empty($_POST['cat_id']) && empty($_POST['cat_name'])){
    $_SESSION["errormsg"]= "Please enter details";
}  

if (isset($_POST['add_cat']) && !empty($_POST['cat_id']) && !empty($_POST['cat_name'])) {

    $sql = "insert into categories values('".$_POST['cat_id']."','".$_POST['cat_name']."')";
        if (mysqli_query($conn, $sql)) {
            $_SESSION["errormsg"]= "New record added successfully";
        } else {
            $_SESSION["errormsg"]= "Error";
        }
    }
    header("Location: ../manage-cata.php");
    exit();





?>