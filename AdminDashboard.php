<?php include("Header.php"); ?>
<?php include("DatabaseTableConnection.php"); ?>

<h2 id="admin_sub_title"><strong>ADMIN DASHBOARD</strong></h2>

<br>
<br>

<div class="box1">
    <h2>ADMIN ACCOUNTS</h2>
    <!-- button trigger modal-->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AdminForm">ADD ADMINS</button>
</div>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PASSWORD</th>
            <th>UPDATE</th>
            <!-- <th>DELETE</th> -->
        </tr>
    </thead>

    <tbody>
        <?php
        $query = ("SELECT * FROM admin");
        $result = mysqli_query($database_connection, $query);

        if (!$result) {
            die("Connection Failed" . mysqli_error());
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></th>
                    <td><?php echo $row['name']; ?></th>
                    <td><?php echo $row['password']; ?></th>

                    <td><a href="AdminUpdateFunction.php?id=<?php echo $row['id']; ?>" class="btn btn-success">UPDATE</a></td>
                    <!-- <td><a href="AdminDeleteFunction.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a></td> -->
                </tr>
        <?php
            }
        }
        ?>
    </tbody>

</table>

<?php
if (isset($_GET["admin_error_message"])) {
    echo "<h6>" . $_GET["admin_error_message"] . "</h6>";
}
?>

<?php
if (isset($_GET["admin_insert_message"])) {
    echo "<h5>" . $_GET["admin_insert_message"] . "</h5>";
}
?>

<?php
if (isset($_GET["admin_update_message"])) {
    echo "<h5>" . $_GET["admin_update_message"] . "</h5>";
}
?>

<?php
if (isset($_GET["admin_delete_message"])) {
    echo "<h6>" . $_GET["admin_delete_message"] . "</h6>";
}
?>

<!-- Modal -->
<form action="AdminInsertFunction.php" method="post">
    <div class="modal fade" id="AdminForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">ADMIN REGISTRATION FORM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div>
                        <label for="super_user_key">Super User Key</label>
                        <input type="password" name="super_user_key" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                    <input type="submit" class="btn btn-success" name="add_admin" value="SAVE">
                </div>

            </div>
        </div>
    </div>
</form>

<br>
<br>

<div class="box1">
    <h2>USER ACCOUNTS</h2>
    <!-- button trigger modal-->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#UserForm">ADD USER</button>
</div>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PASSWORD</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $database_connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
        $query = ("SELECT * FROM user");
        $result = mysqli_query($database_connection, $query);

        if (!$result) {
            die("Connection Failed" . mysqli_error());
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></th>
                    <td><?php echo $row['name']; ?></th>
                    <td><?php echo $row['password']; ?></th>

                    <td><a href="UserUpdateFunction.php?id=<?php echo $row['id']; ?>" class="btn btn-success">UPDATE</a></td>
                    <td><a href="UserDeleteFunction.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a></td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>

<?php
if (isset($_GET["user_error_message"])) {
    echo "<h6>" . $_GET["user_error_message"] . "</h6>";
}
?>

<?php
if (isset($_GET["user_insert_message"])) {
    echo "<h5>" . $_GET["user_insert_message"] . "</h5>";
}
?>

<?php
if (isset($_GET["user_update_message"])) {
    echo "<h5>" . $_GET["user_update_message"] . "</h5>";
}
?>

<?php
if (isset($_GET["user_delete_message"])) {
    echo "<h6>" . $_GET["user_delete_message"] . "</h6>";
}
?>

<!-- Modal -->
<form action="UserInsertFunction.php" method="post">
    <div class="modal fade" id="UserForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">USER REGISTRATION FORM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                    <input type="submit" class="btn btn-success" name="add_user" value="SAVE">
                </div>

            </div>
        </div>
    </div>
</form>

<br>
<br>

<div class="box1">
    <h2>ANTIC PROJECTS</h2>
        <!-- button trigger modal-->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AnticForm">ADD ANTIC PROECT</button>
</div>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>MATRICLE</th>
            <th>TITLE</th>
            <th>STATUS</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $database_connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
        $query = ("SELECT * FROM antic");
        $result = mysqli_query($database_connection, $query);

        if (!$result) {
            die("Connection Failed" . mysqli_error());
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></th>
                    <td><?php echo $row['title']; ?></th>
                    <td><?php echo $row['status']; ?></th>

                    <td><a href="AnticUpdateFunction.php?id=<?php echo $row['id']; ?>" class="btn btn-success">UPDATE</a></td>
                    <td><a href="AnticDeleteFunction.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a></td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>

<?php
if (isset($_GET["antic_error_message"])) {
    echo "<h6>" . $_GET["antic_error_message"] . "</h6>";
}
?>

<?php
if (isset($_GET["antic_insert_message"])) {
    echo "<h5>" . $_GET["antic_insert_message"] . "</h5>";
}
?>

<?php
if (isset($_GET["antic_update_message"])) {
    echo "<h5>" . $_GET["antic_update_message"] . "</h5>";
}
?>

<?php
if (isset($_GET["antic_delete_message"])) {
    echo "<h6>" . $_GET["antic_delete_message"] . "</h6>";
}
?>

<!-- Modal -->
<form action="AnticInsertFunction.php" method="post">
    <div class="modal fade" id="AnticForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">ANTIC PROECT REGISTRATION FORM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                    <input type="submit" class="btn btn-success" name="add_antic" value="SAVE">
                </div>

            </div>
        </div>
    </div>
</form>

<br>
<br>

<div class="box1">
    <h2>ART PROJECTS</h2>
        <!-- button trigger modal-->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ArtForm">ADD ART PROECT</button>
</div>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>MATRICLE</th>
            <th>TITLE</th>
            <th>STATUS</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $database_connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
        $query = ("SELECT * FROM art");
        $result = mysqli_query($database_connection, $query);

        if (!$result) {
            die("Connection Failed" . mysqli_error());
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></th>
                    <td><?php echo $row['title']; ?></th>
                    <td><?php echo $row['status']; ?></th>

                    <td><a href="ArtUpdateFunction.php?id=<?php echo $row['id']; ?>" class="btn btn-success">UPDATE</a></td>
                    <td><a href="ArtDeleteFunction.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a></td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>

<?php
if (isset($_GET["art_error_message"])) {
    echo "<h6>" . $_GET["art_error_message"] . "</h6>";
}
?>

<?php
if (isset($_GET["art_insert_message"])) {
    echo "<h5>" . $_GET["art_insert_message"] . "</h5>";
}
?>

<?php
if (isset($_GET["art_update_message"])) {
    echo "<h5>" . $_GET["art_update_message"] . "</h5>";
}
?>

<?php
if (isset($_GET["art_delete_message"])) {
    echo "<h6>" . $_GET["art_delete_message"] . "</h6>";
}
?>

<!-- Modal -->
<form action="ArtInsertFunction.php" method="post">
    <div class="modal fade" id="ArtForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">ART PROJECT REGISTRATION FORM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                    <input type="submit" class="btn btn-success" name="add_art" value="SAVE">
                </div>

            </div>
        </div>
    </div>
</form>

<br>
<br>

<div class="box1">
    <h2>CAMPOST PROJECTS</h2>
        <!-- button trigger modal-->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CampostForm">ADD CAMPOST PROECT</button>
</div>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>MATRICLE</th>
            <th>TITLE</th>
            <th>STATUS</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $database_connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
        $query = ("SELECT * FROM campost");
        $result = mysqli_query($database_connection, $query);

        if (!$result) {
            die("Connection Failed" . mysqli_error());
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></th>
                    <td><?php echo $row['title']; ?></th>
                    <td><?php echo $row['status']; ?></th>

                    <td><a href="CampostUpdateFunction.php?id=<?php echo $row['id']; ?>" class="btn btn-success">UPDATE</a></td>
                    <td><a href="CampostDeleteFunction.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a></td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>

<?php
if (isset($_GET["campost_error_message"])) {
    echo "<h6>" . $_GET["campost_error_message"] . "</h6>";
}
?>

<?php
if (isset($_GET["campost_insert_message"])) {
    echo "<h5>" . $_GET["campost_insert_message"] . "</h5>";
}
?>

<?php
if (isset($_GET["campost_update_message"])) {
    echo "<h5>" . $_GET["campost_update_message"] . "</h5>";
}
?>

<?php
if (isset($_GET["campost_delete_message"])) {
    echo "<h6>" . $_GET["campost_delete_message"] . "</h6>";
}
?>

<!-- Modal -->
<form action="campostInsertFunction.php" method="post">
    <div class="modal fade" id="CampostForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">CAMPOST PROJECT REGISTRATION FORM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                    <input type="submit" class="btn btn-success" name="add_campost" value="SAVE">
                </div>

            </div>
        </div>
    </div>
</form>

<br>
<br>

<div class="box1">
    <h2>CAMTEL PROJECTS</h2>
        <!-- button trigger modal-->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CamtelForm">ADD CAMTEL PROECT</button>
</div>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>MATRICLE</th>
            <th>TITLE</th>
            <th>STATUS</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $database_connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
        $query = ("SELECT * FROM camtel");
        $result = mysqli_query($database_connection, $query);

        if (!$result) {
            die("Connection Failed" . mysqli_error());
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></th>
                    <td><?php echo $row['title']; ?></th>
                    <td><?php echo $row['status']; ?></th>

                    <td><a href="CamtelUpdateFunction.php?id=<?php echo $row['id']; ?>" class="btn btn-success">UPDATE</a></td>
                    <td><a href="CamtelDeleteFunction.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a></td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>

<?php
if (isset($_GET["camtel_error_message"])) {
    echo "<h6>" . $_GET["camtel_error_message"] . "</h6>";
}
?>

<?php
if (isset($_GET["camtel_insert_message"])) {
    echo "<h5>" . $_GET["camtel_insert_message"] . "</h5>";
}
?>

<?php
if (isset($_GET["camtel_update_message"])) {
    echo "<h5>" . $_GET["camtel_update_message"] . "</h5>";
}
?>

<?php
if (isset($_GET["camtel_delete_message"])) {
    echo "<h6>" . $_GET["camtel_delete_message"] . "</h6>";
}
?>

<!-- Modal -->
<form action="camtelInsertFunction.php" method="post">
    <div class="modal fade" id="CamtelForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">CAMTEL PROJECT REGISTRATION FORM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                    <input type="submit" class="btn btn-success" name="add_camtel" value="SAVE">
                </div>

            </div>
        </div>
    </div>
</form>

<br>
<br>

<div class="box1">
    <h2>SUPT'TIC PROJECTS</h2>
        <!-- button trigger modal-->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#SuptticForm">ADD SUPT'TIC PROECT</button>
</div>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>MATRICLE</th>
            <th>TITLE</th>
            <th>STATUS</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $database_connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
        $query = ("SELECT * FROM supttic");
        $result = mysqli_query($database_connection, $query);

        if (!$result) {
            die("Connection Failed" . mysqli_error());
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></th>
                    <td><?php echo $row['title']; ?></th>
                    <td><?php echo $row['status']; ?></th>

                    <td><a href="SuptticUpdateFunction.php?id=<?php echo $row['id']; ?>" class="btn btn-success">UPDATE</a></td>
                    <td><a href="SuptticDeleteFunction.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a></td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>

<?php
if (isset($_GET["supttic_error_message"])) {
    echo "<h6>" . $_GET["supttic_error_message"] . "</h6>";
}
?>

<?php
if (isset($_GET["supttic_insert_message"])) {
    echo "<h5>" . $_GET["supttic_insert_message"] . "</h5>";
}
?>

<?php
if (isset($_GET["supttic_update_message"])) {
    echo "<h5>" . $_GET["supttic_update_message"] . "</h5>";
}
?>

<?php
if (isset($_GET["supttic_delete_message"])) {
    echo "<h6>" . $_GET["supttic_delete_message"] . "</h6>";
}
?>

<!-- Modal -->
<form action="suptticInsertFunction.php" method="post">
    <div class="modal fade" id="SuptticForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">SUPT'TIC PROJECT REGISTRATION FORM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                    <input type="submit" class="btn btn-success" name="add_supttic" value="SAVE">
                </div>

            </div>
        </div>
    </div>
</form>

<br>
<br>

<a href="Logout.php"><strong><b>LOGOUT</b></strong></a>

<br>
<br>

<?php include("Footer.php"); ?>