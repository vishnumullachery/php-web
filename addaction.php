<?php

$stid = filter_input(INPUT_POST, 'txtRegNo');
$stname = filter_input(INPUT_POST, 'txtName');
$stemail = filter_input(INPUT_POST, 'txtEmail');
$stcourse = filter_input(INPUT_POST, 'txtCourse');
$stmobile = filter_input(INPUT_POST, 'txtMobile');
$stage = filter_input(INPUT_POST, 'txtAge');
require './db.php';
$sql = "INSERT INTO tblstudents VALUES($stid,'$stname','$stemail','$stcourse',$stmobile,$stage)";
if (mysqli_query($con, $sql)) {
    header("Location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
