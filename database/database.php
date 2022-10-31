<?php
class database
{
    function opencon()
    {
        return new PDO('mysql:host=localhost; dbname=rgo', 'root', 'dyasmir');
    }

    function authenticateLogin($srcode, $password)
    {
        $con = $this->opencon();
        $query = "select * from student_account_table where sr_code='" . $srcode . "' and password='" . $password . "'";
        $result =  $con->query($query)->fetch();
        if ($result) {
            if ($result['sr_code'] == $_POST['srcode'] && $result['password'] == md5($_POST['password'])) {
                $_SESSION['sr_code'] = $result['sr_code'];
                $_SESSION['error'] = false;
            } else {
                $_SESSION['error'] = true;
            }
        } else {
            $_SESSION['error'] = true;
        }
    }

    function getStudentInfo($srcode)
    {
        $con = $this->opencon();
        $query = "select * from student_table where sr_code='" . $srcode . "'";
        $result =  $con->query($query)->fetch();
        if ($result) {
            return $result;
        }
    }

    function setAppointment($srcode, $date, $batch, $transaction_date)
    {
        $con = $this->opencon();
        $transaction_id = "TID" . rand(1000000000, 9999999999);
        $query = "insert into appointment_table (transaction_id, sr_code, appointment_date, batch, transaction_date) values ('" . $transaction_id . "','" . $srcode . "','" . $date . "','" . $batch . "','" . $transaction_date . "')";
        $result =  $con->query($query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}