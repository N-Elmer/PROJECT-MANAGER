<?php
include("DatabaseTableConnection.php");

if (isset($_POST["add_antic"])) {
    $title = $_POST["title"];
    $status = $_POST["status"];

    if ($title == "" || empty($title)) {
        header("location:AdminDashboard.php?antic_error_message=ERROR: TITLE HAS NOT BEEN ENTERED");
    } elseif ($status == "" || empty($status)) {
        header("location:AdminDashboard.php?antic_error_message=ERROR: STATUS HAS NOT BEEN ENTERED");
    } else {
        
        $query = ("INSERT INTO antic (title, status) VALUES ('$title','$status')");

        $result = mysqli_query($database_connection, $query);

        if (!$result) {
            die("Query Failed" . mysqli_error());
        }

        else{
            header('location:AdminDashboard.php?antic_insert_message=DATA SUCCESSFULLY SAVED');
        }
    }
}
