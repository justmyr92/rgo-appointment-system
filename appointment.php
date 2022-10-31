<?php

session_start();
require_once('database/database.php');

$con = new database();

if (!isset($_SESSION['sr_code'])) {
    header("Location: index.php");
} else {
    $student = $con->getStudentInfo($_SESSION['sr_code']);
    $_SESSION['first_name'] = $student['first_name'];
    $_SESSION['last_name'] = $student['last_name'];
    $_SESSION['middle_initial'] = $student['middle_initial'];
    $_SESSION['course'] = $student['course'];
    $_SESSION['year_level'] = $student['year_level'];
}


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
    $page = "appointment system";
    include("include/header.php");
    ?>

    <section class="appointment-section py-5 bg-light">
        <div class="container">
            <div class="card border-primary mb-3">
                <div class="card-body text-primary">
                    <p class="card-text fs-5 fw-bold">Please select your preferred date and time of appointment.</p>
                </div>
            </div>
            <div class="row">
                <?php

                for ($c = 0; $c < 90; $c = $c + 30) {
                    $month = date('m', strtotime("+$c days"));
                    $year = date('Y', strtotime("+$c days"));
                    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                ?>
                <div class="col-lg-4 col-md-12">
                    <div class="table-container d-flex justify-content-center align-items-center border">
                        <table class="table table-bordered border-dark">
                            <thead>
                                <tr>
                                    <th colspan="7" class="text-center">
                                        <?php echo date('F Y', strtotime($year . '-' . $month)); ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    //get first day of month
                                    $firstDay = date('N', strtotime($year . '-' . $month . '-01'));
                                    //make calendar
                                    $day = 1;
                                    for ($i = 0; $i < 6; $i++) {
                                        echo '<tr>';
                                        for ($j = 0; $j < 7; $j++) {
                                            if ($i == 0 && $j < $firstDay && $firstDay != 7) {
                                                echo '<td></td>';
                                            } else if ($day > $daysInMonth) {
                                                echo '<td class="empty-cell"></td>';
                                            } else {
                                                $id = date('Y-m-d', strtotime($year . '-' . $month . '-' . $day));
                                                echo '<td>';
                                                if ($j == 0 || $j == 6) {
                                                    echo '<button type="button" class="btn btn-primary btn-sm rounded-5 disabled date-btn"  data-bs-toggle="modal" data-bs-target="#appointmentModal">' . $day . '</button>';
                                                } else {
                                                    echo '<button type="button" class="btn btn-primary btn-sm rounded-5 date-btn"  data-bs-toggle="modal" data-bs-target="#appointmentModal" id="' . $id . '">' . $day . '</button>';
                                                }
                                                echo '</td>';
                                                $day++;
                                            }
                                        }
                                        echo '</tr>';
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
            <form action="include/submit/submit-appointment.php" method="POST">

                <div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-center">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body appointmentDetails">
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" class="btn btn-secondary rounded-0"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-outline-dark rounded-0">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php include("include/footer.php"); ?>
    <script defer>
    var current_page = "appointment system";
    $(document).ready(function() {
        $('.date-btn').click(function() {
            var date = $(this).attr('id');
            if (date != null) {
                $.ajax({
                    url: "include/appointment-details.php",
                    method: "POST",
                    data: {
                        date: date
                    },
                    success: function(data) {
                        $(('.appointmentDetails')).html(data);
                    }
                });
            }
        });
    });
    </script>
    <script src="js/app.js"></script>
    <script src="js/alert.js"></script>

    <?php
    if (isset($error)) {
        if ($_SESSION['invalidDate'] == true) {
            echo "<script>disabledCalendarDates();</script>";
            unset($_SESSION['invalidDate']);
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