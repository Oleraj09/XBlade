<?php
require "database.php";

if (!empty($_POST['submit'])) {
    $cehackas = $_POST['email'];
    $emailcheck = "SELECT * from `students` where `email`='$cehackas'";
    $ex = $conn->query($emailcheck);
    $check = $ex->fetch_assoc();
    $errors = [];
    if (empty($_POST['name'])) {
        $errors['name'] = 'The name is required!';
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'The Valid Email is required!';
    } elseif (is_array($check) && count($check) > 0) {
        $errors['email'] = 'Email Already Exits!!';
    }
    if (!filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT)) {
        $errors['phone'] = 'The Valid phone is required!';
    }
    if (empty($_POST['dept'])) {
        $errors['dept'] = 'Enter your Department!';
    }
    if (empty($_POST['roll'])) {
        $errors['roll'] = 'Insert your Roll Number!';
    }
    if (empty($_POST['c_adress'])) {
        $errors['c_adress'] = 'Type your Current Adress!';
    }
    if (empty($_POST['p_adress'])) {
        $errors['p_adress'] = 'Type your Permanent Adress!';
    }
    if (empty($_POST['f_name'])) {
        $errors['f_name'] = 'Enter your Father name!';
    }
    if (empty($_POST['m_name'])) {
        $errors['m_name'] = 'Enter your Mother name!';
    }
    if (empty($_POST['field'])) {
        $errors['field'] = 'Enter you Passion in Job Sector!';
    }
    if (isset($_GET['type']) && $_GET['type'] == 'edit') {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dept = $_POST['dept'];
        $roll = $_POST['roll'];
        $update1 = "UPDATE `students` SET name='$name', email='$email', phone='$phone', dept='$dept', roll='$roll' WHERE id='$id'";
        if ($conn->query($update1) == TRUE) {
            // $last_id = $conn->insert_id;
            $c_adress = $_POST['c_adress'];
            $p_adress = $_POST['p_adress'];
            $f_name = $_POST['f_name'];
            $m_name = $_POST['m_name'];
            $field = $_POST['field'];
            $update2 = "UPDATE `information` SET  c_adress='$c_adress', f_name='$f_name', m_name='$m_name', field='$field', p_adress='$p_adress' WHERE student_id='$id'";
            $conn->query($update2);
            header("Location: {$_SERVER['PHP_SELF']}#ajax");
        }
    } elseif (empty($errors)) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dept = $_POST['dept'];
        $roll = $_POST['roll'];
        $datainsert1 = "INSERT INTO `students` (`name`, `email`, `phone`, `dept`, `roll`) VALUES('$name','$email','$phone','$dept','$roll')";
        if ($conn->query($datainsert1) == TRUE) {
            $last_id = $conn->insert_id;
            $c_adress = $_POST['c_adress'];
            $p_adress = $_POST['p_adress'];
            $f_name = $_POST['f_name'];
            $m_name = $_POST['m_name'];
            $field = $_POST['field'];
            $datainsert2 = "INSERT INTO `information` (`student_id`,`c_adress`, `p_adress`, `f_name`, `m_name`, `field`) VALUES('$last_id','$c_adress','$p_adress','$f_name','$m_name','$field')";

            if ($conn->query($datainsert2) == FALSE) {
                $revartinsert = "DELETE FROM `students` WHERE `id`='$last_id'";
                $conn->query($revartinsert);
                header("Location: {$_SERVER['PHP_SELF']}#ajax");
            }
            header("Location: {$_SERVER['PHP_SELF']}#ajax");
        }
    }
}
$dataview = "SELECT * from `students`";
$dv = $conn->query($dataview);

if (isset($_GET['type']) && $_GET['type'] == 'delete') {
    $id = $_GET['id'];
    $delete = "DELETE FROM `students` WHERE `id`='$id'";
    $conn->query($delete);
    header("Location: {$_SERVER['PHP_SELF']}#ajax");
}
$name = '';
$email = '';
$phone = '';
$dept = '';
$roll = '';
$c_adress = '';
$p_adress = '';
$f_name = '';
$m_name = '';
$field = '';
$button = '';
if (isset($_GET['type']) && $_GET['type'] == 'edit') {
    $id = $_GET['id'];
    $find = "SELECT * from `students` INNER JOIN `information` on students.id=information.student_id WHERE students.id='$id'";
    $user = $conn->query($find);
    $result = $user->fetch_assoc();
    // echo "<pre>";
    // print_r($result);
    $name = $result['name'];
    $email = $result['email'];
    $phone = $result['phone'];
    $dept = $result['dept'];
    $roll = $result['roll'];
    $c_adress = $result['c_adress'];
    $p_adress = $result['p_adress'];
    $f_name = $result['f_name'];
    $m_name = $result['m_name'];
    $field = $result['field'];
    $button = 1;
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $find = "SELECT * from `students` INNER JOIN `information` on students.id=information.student_id WHERE students.id='$id'";
    $user = $conn->query($find);
    $result = $user->fetch_assoc();
    // echo "<pre>";
    // print_r($result);
    $name = $result['name'];
    $email = $result['email'];
    $phone = $result['phone'];
    $dept = $result['dept'];
    $roll = $result['roll'];
    $c_adress = $result['c_adress'];
    $p_adress = $result['p_adress'];
    $f_name = $result['f_name'];
    $m_name = $result['m_name'];
    $field = $result['field'];
}



?>