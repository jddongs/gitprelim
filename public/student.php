<?php
session_start();
require 'connection.php';

if(isset($_POST['save_student'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $sex = mysqli_real_escape_string($con, $_POST['sex']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);

    $query = "INSERT INTO student (name,address,age,sex,mobile) VALUES ('$name','$address','$age','$sex','$mobile')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Added Successfuly";
        header("Location: studentcreate.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Student Not Added";
        header("Location: studentcreate.php");
        exit(0);
    }


}

?>