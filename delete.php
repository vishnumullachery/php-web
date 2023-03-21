<?php

require 'db.php';
$id = filter_input(INPUT_GET, 'id');
$sql = "DELETE FROM tblStudents WHERE student_id=$id";

if (mysqli_query($con, $sql)) {
    header("Location:index.php");
} else {
    echo "Some SQL Error Happened!!";
}