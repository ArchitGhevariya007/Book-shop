<?php
include 'connection.php';
session_start();

//Select categories
    $sql = "select * from categories";
    $result = mysqli_query($conn, $sql);

    
// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["cat_id"]. " - Name: " . $row["cat_name"] . "<br>";
//     }
// } else {
//     echo "0 results";
// }


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
    header('Location: ../manage-cata.php');
    exit();  
?>