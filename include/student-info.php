<?php

require_once('database/database.php');

$con = new database();

if (isset($_SESSION['sr_code'])) {
    $student = $con->getStudentInfo($_SESSION['sr_code']);
}