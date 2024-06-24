<?php include("Header.php"); ?>
<?php include("DatabaseTableConnection.php"); ?>

<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $query = ("DELETE FROM campost WHERE id='$id'");
    $result = mysqli_query($database_connection, $query);

    if (!$result) {
        die("Connection Failed" . mysqli_error());
    }

    else{
        header('location:AdminDashboard.php?campost_delete_message=DATA SUCCESSFULLY DELETED');
    }
?>