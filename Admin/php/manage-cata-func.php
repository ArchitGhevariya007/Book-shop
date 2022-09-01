<?php
include 'connection.php';


if (isset($_POST['add_cat'])) {
    $sql = "insert into cat_name values('".$_POST['categories']."')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

// $sql = "UPDATE categories SET cat_name='$_POST['categories']' WHERE id=2";

// if (mysqli_query($conn, $sql)) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . mysqli_error($conn);
//}

?>