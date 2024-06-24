<?php include("Header.php"); ?>
<?php include("DatabaseTableConnection.php"); ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = ("SELECT * FROM supttic WHERE id='$id'");
    $result = mysqli_query($database_connection, $query);

    if (!$result) {
        die("Connection Failed" . mysqli_error());
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}
?>

<?php
if (isset($_POST['update_supttic'])) {

    if (isset($_GET['id_new'])) {
        $idnew = $_GET['id_new'];
    }

    $title = $_POST['title'];
    $status = $_POST['status'];

    $query = ("UPDATE supttic SET title='$title', status='$status' WHERE id='$idnew'");

    $result = mysqli_query($database_connection, $query);

    if (!$result) {
        die("Connection Failed" . mysqli_error());
    } else {
        header('location:AdminDashboard.php?supttic_update_message=DATA UPDATED SUCCESSFULLY');
    }
}
?>

<form action="SuptticUpdateFunction.php?id_new=<?php echo $id; ?>" method="post">
    <div class="box1">
        <h2>SUPT'TIC UPDATE FORM</h2>
    </div>
    <br>
    <br>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>">
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" name="status" class="form-control" value="<?php echo $row['status']; ?>">
    </div>
    <input type="submit" class="btn btn-success" name="update_supttic" value="SAVE">
</form>
<?php include("Footer.php"); ?>