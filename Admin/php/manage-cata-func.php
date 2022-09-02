<?php
include 'connection.php';
session_start();

//Select categories
$sql = "select * from categories";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result)) {
        $_SESSION['table'].= 
           "<tr> <td> $row[cat_id] </td> 
            <td> $row[cat_name] </td>
            <td> <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#mediumModal' id='edit_btn'>Edit</button>
           <button type='button' class='btn btn-danger delete_btn' name='delete_btn' id='$row[cat_id]'>Delete</button></td>
            </tr>";
        
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