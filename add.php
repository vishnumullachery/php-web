<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <title>Add a Student</title>
    </head>
    <body>
        <?php include("header.php"); ?>
        <div class="container">
            <h1>Add a New Student</h1>
            <form action="addaction.php" method="POST">
                <table class="table">
                    <tr>
                        <td>Enter Student Register Number:</td>
                        <td><input type="number" class="form-control" required name="txtRegNo" /></td>
                    </tr>
                    <tr>
                        <td>Enter Student Name:</td>
                        <td><input type="text" class="form-control" required name="txtName" /></td>
                    </tr>
                    <tr>
                        <td>Enter Email Address:</td>
                        <td><input type="email" class="form-control" required name="txtEmail" /></td>
                    </tr>
                    <tr>
                        <td>Enter Course:</td>
                        <td><input type="text" class="form-control" required name="txtCourse" /></td>
                    </tr>
                    <tr>
                        <td>Enter Mobile Number:</td>
                        <td><input type="text" class="form-control" required name="txtMobile" /></td>
                    </tr>
                    <tr>
                        <td>Enter Age :</td>
                        <td><input type="number" class="form-control" required name="txtAge" /></td>
                    </tr>
                    <tr class="text-center">
                        <td><input type="submit" class="btn btn-success" value="Add Student" /></td>
                        <td><input type="reset" class="btn btn-danger" value="Clear All" /></td>
                    </tr>
                </table>
            </form>
        </div>
         <?php include("footer.php"); ?>
    </body>
</html>
