<?php
// Include config file
require_once "../../config.php";

session_start();
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../../login.php");
    exit;
}

// Attempt select query execution
$sql = "SELECT * FROM customers where user_id = '{$_SESSION["id"]}'";
$result = mysqli_query($link, $sql);
// Fetch all data in an array
$data  = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Free result set - manually if need
// mysqli_free_result($result);
// Close connection - manually if need
// mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <?php include('../../layouts/employee-style.php'); ?>
    <meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include('../../layouts/admin-nav.php'); ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">My Customers </h2>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Email</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $row) { ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['age'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['address'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php include('../../layouts/employee-script.php'); ?>
</body>

</html>