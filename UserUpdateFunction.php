<?php include("Header.php"); ?>
<?php include("DatabaseTableConnection.php"); ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = ("SELECT * FROM user WHERE id='$id'");
    $result = mysqli_query($database_connection, $query);

    if (!$result) {
        die("Connection Failed" . mysqli_error());
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}
?>

<?php
if (isset($_POST['update_user'])) {
    
    if (isset($_GET['id_new'])) {
        $idnew = $_GET['id_new'];
    }

    $name = $_POST['name'];
    $password = $_POST['password'];
    $hashed = password_hash($password, PASSWORD_DEFAULT);

    $query = ("UPDATE user set name='$name', password='$hashed' WHERE  id='$idnew'");

    $result = mysqli_query($database_connection, $query);

    if (!$result) {
        die("Connection Failed" . mysqli_error());
    } else {
        header('location:AdminDashboard.php?user_update_message=DATA UPDATED SUCCESSFULLY');
    }
}
?>

<form action="UserUpdateFunction.php?id_new=<?php echo $id; ?>" method="post">
    <div class="box1">
        <h2>USER UPDATE FORM</h2>
    </div>
    <br>
    <br>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" value="<?php echo $row['password'] ?>">
    </div>
    <input type="submit" class="btn btn-success" name="update_user" value="SAVE">
</form>
<?php include("Footer.php"); ?>