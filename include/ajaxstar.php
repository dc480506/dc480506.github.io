<?php

include 'config.php';
session_start();
$user=$_SESSION['u_user'];

// CLIENT INFORMATION
$active = mysqli_real_escape_string($conn,$_POST['active']);
$id = mysqli_real_escape_string($conn,$_POST['id']);

$query="UPDATE code_info SET star = '$active' WHERE codename = '$id' AND username = '$user'";
$result = mysqli_query($conn, $query);



// if($_POST['action'] == 'checkbox-select') {
//     $checkbox = $_POST['id'];
//     $checked = $_POST['checked'];
//    // Your MySQL code here
//    echo 'Updated';
// }
//       echo 'Code ran';
?>