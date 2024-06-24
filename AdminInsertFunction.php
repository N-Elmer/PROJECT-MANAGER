<?php
include("DatabaseTableConnection.php");

if (isset($_POST["add_admin"])) {
    $name = $_POST["name"];
    $password = $_POST["password"];
    $super_user_key = $_POST["super_user_key"];

    if ($super_user_key != "123456789") {
        header("location:AdminDashboard.php?admin_error_message=ERROR: SUPER USER KEY IS WRONG");
    } elseif ($name == "" || empty($name)) {
        header("location:AdminDashboard.php?admin_error_message=ERROR: NAME HAS NOT BEEN ENTERED");
    } elseif ($password == "" || empty($password)) {
        header("location:AdminDashboard.php?admin_error_message=ERROR: PASSWORD HAS NOT BEEN ENTERED");
    } elseif ($super_user_key == "" || empty($super_user_key)) {
        header("location:AdminDashboard.php?admin_error_message=ERROR: SUPER USER KEY HAS NOT BEEN ENTERED");
    } else {
        $hashed = password_hash($password, PASSWORD_DEFAULT);

        $query = ("INSERT INTO admin (name, password) VALUES ('$name','$hashed')");

        $result = mysqli_query($database_connection, $query);

        if (!$result) {
            die("Query Failed" . mysqli_error());
        }

        else{
            header('location:AdminDashboard.php?admin_insert_message=DATA SUCCESSFULLY SAVED');
        }
    }
}
