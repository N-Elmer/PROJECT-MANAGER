<?php
include("DatabaseTableConnection.php");

if (isset($_POST["add_supttic"])) {
    $title = $_POST["title"];
    $status = $_POST["status"];

    if ($title == "" || empty($title)) {
        header("location:AdminDashboard.php?supttic_error_message=ERROR: TITLE HAS NOT BEEN ENTERED");
    } elseif ($status == "" || empty($status)) {
        header("location:AdminDashboard.php?supttic_error_message=ERROR: STATUS HAS NOT BEEN ENTERED");
    } else {
        
        $query = ("INSERT INTO supttic (title, status) VALUES ('$title','$status')");

        $result = mysqli_query($database_connection, $query);

        if (!$result) {
            die("Query Failed" . mysqli_error());
        }

        else{
            header('location:AdminDashboard.php?supttic_insert_message=DATA SUCCESSFULLY SAVED');
        }
    }
}
