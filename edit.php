<?php
require 'db.php';
$id = filter_input(INPUT_GET, 'id');
$sql = "SELECT * FROM tblStudents WHERE student_id = $id";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) != 1) {
    die('Given Student ID Does Not Exist! Please Try again from the Home Page');
}
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <title>Edit a Student</title>
    </head>
    <body>
        <?php include("header.php"); ?>
        <div class="container">
            <h1>Update Record of <?php echo $row['student_name']; ?></h1>
            <form action="editaction.php" method="POST">
                <table class="table">
                    <tr>
                        <td>Enter Student Register Number:</td>
                        <td><input type="number" value="<?php echo $row['student_id']; ?>" class="form-control" required readonly name="txtRegNo" /></td>
                    </tr>
                    <tr>
                        <td>Enter Student Name:</td>
                        <td><input type="text" value="<?php echo $row['student_name']; ?>" class="form-control" required name="txtName" /></td>
                    </tr>
                    <tr>
                        <td>Enter Email Address:</td>
                        <td><input type="email" value="<?php echo $row['student_email']; ?>" class="form-control" required name="txtEmail" /></td>
                    </tr>
                    <tr>
                        <td>Enter Course:</td>
                        <td><input type="text" value="<?php echo $row['student_course']; ?>" class="form-control" required name="txtCourse" /></td>
                    </tr>
                    <tr>
                        <td>Enter Mobile Number:</td>
                        <td><input type="text" value="<?php echo $row['student_mobile']; ?>" class="form-control" required name="txtMobile" /></td>
                    </tr>
                    <tr>
                        <td>Enter Age :</td>
                        <td><input type="number" value="<?php echo $row['student_age']; ?>" class="form-control" required name="txtAge" /></td>
                    </tr>
                    <tr class="text-center">
                        <td><input type="submit" class="btn btn-success" value="Update" /></td>
                        <td><input type="reset" class="btn btn-danger" value="Reset" /></td>
                    </tr>
                </table>
            </form>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>
