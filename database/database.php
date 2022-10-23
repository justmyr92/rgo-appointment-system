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

    function studentInfo($srcode, $password)
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
}