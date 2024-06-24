<?php
session_start();
include("DatabaseTableConnection.php");

$name = $_POST['user'];
$password = $_POST['password'];

$query = ("SELECT * FROM admin WHERE name='$name'");
$result = mysqli_query($database_connection, $query);
$num = mysqli_num_rows($result);

$query2 = ("SELECT * FROM user WHERE name='$name'");
$result2 = mysqli_query($database_connection, $query2);
$num2 = mysqli_num_rows($result2);

if($num > 0) {
    $row = mysqli_fetch_assoc($result);
    $verify = password_verify($password, $row['password']);
    if($verify == 1){
        header('location:AdminDashboard.php');
    }
    else{
        header('location:Login.php');
        header('location:Login.php?login_error_message=THERE IS NO ACCOUNT WITH THOSE CREDENTIALS');
    }
} elseif($num2 > 0) {
    $row2 = mysqli_fetch_assoc($result2);
    $verify2 = password_verify($password, $row2['password']);
    if($verify2 == 1){
        header('location:UserDashboard.php');
    }
    else{
        header('location:Login.php');
        header('location:Login.php?login_error_message=THERE IS NO ACCOUNT WITH THOSE CREDENTIALS');
    }
} else{
    header('location:Login.php?login_error_message=THERE IS NO ACCOUNT WITH THOSE CREDENTIALS');
}

?>