<?php
include("DatabaseTableConnection.php");

if (isset($_POST["add_user"])) {
    $name = $_POST["name"];
    $password = $_POST["password"];

    if ($name == "" || empty($name)) {
        header("location:AdminDashboard.php?user_error_message=ERROR: NAME HAS NOT BEEN ENTERED");
    } elseif ($password == "" || empty($password)) {
        header("location:AdminDashboard.php?user_error_message=ERROR: PASSWORD HAS NOT BEEN ENTERED");
    } else {
        $hashed = password_hash($password, PASSWORD_DEFAULT);

        $query = ("INSERT INTO user (name, password) VALUES ('$name','$hashed')");

        $result = mysqli_query($database_connection, $query);

        if (!$result) {
            die("Query Failed" . mysqli_error());
        }

        else{
            header('location:AdminDashboard.php?user_insert_message=DATA SUCCESSFULLY SAVED');
        }
    }
}
