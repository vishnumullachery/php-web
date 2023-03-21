<?php
require './db.php';
$sql = 'SELECT * FROM tblStudents';
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <title>List of All Students</title>
    </head>
    <body>
        <?php include './header.php'; ?>
        <div class="container">
            <h1>List of Students</h1>
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Email Address</th>
                        <th>Course Enrolled</th>
                        <th>Mobile Number</th>
                        <th>Student Age</th>
                        <th colspan="2">Operations</th>
                    </tr>                
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr class="text-center">
                            <td><?php echo $row['student_id']; ?></td>
                            <td><?php echo $row['student_name']; ?></td>
                            <td><?php echo $row['student_email']; ?></td>
                            <td><?php echo $row['student_course']; ?></td>
                            <td><?php echo $row['student_mobile']; ?></td>
                            <td><?php echo $row['student_age']; ?></td>
                            <td><a href="edit.php?id=<?php echo $row['student_id']; ?>" class="btn btn-success">Edit</a></td>
                            <td><a href="delete.php?id=<?php echo $row['student_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete the record of <?php echo $row['student_name']; ?>?')">Delete</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>   
            <a href="add.php" class="btn btn-primary">Add Student</a>
        </div>
        <?php include './footer.php'; ?>
    </body>
</html>
