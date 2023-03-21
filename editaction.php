<?php

$stid = filter_input(INPUT_POST, 'txtRegNo');
$stname = filter_input(INPUT_POST, 'txtName');
$stemail = filter_input(INPUT_POST, 'txtEmail');
$stcourse = filter_input(INPUT_POST, 'txtCourse');
$stmobile = filter_input(INPUT_POST, 'txtMobile');
$stage = filter_input(INPUT_POST, 'txtAge');
require './db.php';
$sql = "UPDATE tblStudents SET student_name ='$stname', student_email='$stemail',student_course='$stcourse',student_mobile=$stmobile,student_age=$stage WHERE student_id=$stid";
if (mysqli_query($con, $sql)) {
    header("Location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

