<?php
session_start();
require_once '../../database/database.php';

$con = new database();

$con->setAppointment($_SESSION['sr_code'], $_POST['date'], $_POST['batch'], date('Y-m-d H:i:s'));

header('Location: ../../index.php');