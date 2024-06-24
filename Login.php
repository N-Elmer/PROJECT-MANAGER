<?php include("Header.php"); ?>

<div class="cotainer">
    <div class="login-box">
        <div class="row">
            <div class="col-md-6">
                <h2> LOGIN HERE </h2>
                <br>
                <form action="Validation.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
</div>
</div>
<br>
<br>
<?php
if (isset($_GET["login_error_message"])) {
    echo "<h6>" . $_GET["login_error_message"] . "</h6>";
}
?>

<?php include("Footer.php"); ?>