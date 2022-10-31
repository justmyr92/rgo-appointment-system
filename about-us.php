<?php

require_once('database/database.php');

$con = new database();
session_start();


if (isset($_POST['srcode'])) {
    $con->authenticateLogin($_POST['srcode'], md5($_POST['password']));
}
if (isset($_SESSION['sr_code'])) {
    $student = $con->getStudentInfo($_SESSION['sr_code']);
    $_SESSION['first_name'] = $student['first_name'];
    $_SESSION['last_name'] = $student['last_name'];
    $_SESSION['middle_initial'] = $student['middle_initial'];
    $_SESSION['course'] = $student['course'];
    $_SESSION['year_level'] = $student['year_level'];
}

$current_page = "about-us";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="icon" href="image/bsu-logo.png" type="image/x-icon" />
    <title>RGO Appointment System</title>
</head>


<body>
    <?php include("include/navbar.php"); ?>

    <?php
    $page = "about us";
    include("include/header.php");
    ?>

    <?php include("include/footer.php"); ?>

    <?php
    if (!isset($_SESSION['sr_code'])) {
        include("include/login-modal.php");
    }
    ?>
    <script>
    var current_page = "about us";
    </script>
    <script src="js/alert.js"></script>
    <script src="js/app.js"></script>
    <?php
    if (isset($_SESSION['error'])) {
        if ($_SESSION['error'] == true) {
            echo "<script>loginAuthentication(true);</script>";
            unset($_SESSION['error']);
        } else {
            echo "<script>loginAuthentication(false);</script>";
            unset($_SESSION['error']);
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>