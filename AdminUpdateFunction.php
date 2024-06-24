<?php include("Header.php"); ?>
<?php include("DatabaseTableConnection.php"); ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = ("SELECT * FROM admin WHERE id='$id'");
    $result = mysqli_query($database_connection, $query);

    if (!$result) {
        die("Connection Failed" . mysqli_error());
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}
?>

<?php
if (isset($_POST['update_admin'])) {

    if (isset($_GET['id_new'])) {
        $idnew = $_GET['id_new'];
    }

    $name = $_POST['name'];
    $password = $_POST['password'];
    $super_user_key = $_POST["super_user_key"];

    if ($super_user_key != "123456789") {
        header("location:AdminDashboard.php?admin_error_message=ERROR: SUPER USER KEY IS WRONG");
    } elseif ($super_user_key == "" || empty($super_user_key)) {
        header("location:AdminDashboard.php?admin_error_message=ERROR: SUPER USER KEY HAS NOT BEEN ENTERED");
    } else {
        $hashed = password_hash($password, PASSWORD_DEFAULT);

        $query = ("UPDATE admin SET name='$name', password='$hashed' WHERE  id='$idnew'");

        $result = mysqli_query($database_connection, $query);

        if (!$result) {
            die("Connection Failed" . mysqli_error());
        } else {
            header('location:AdminDashboard.php?admin_update_message=DATA UPDATED SUCCESSFULLY');
        }
    }
}
?>

<form action="AdminUpdateFunction.php?id_new=<?php echo $id; ?>" method="post">
    <div class="box1">
        <h2>ADMIN UPDATE FORM</h2>
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
    <div class="form-group">
        <label for="super_user_key">Super User Key</label>
        <input type="password" name="super_user_key" class="form-control">
    </div>
    <input type="submit" class="btn btn-success" name="update_admin" value="SAVE">
</form>
<?php include("Footer.php"); ?>