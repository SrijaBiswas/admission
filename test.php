<?php
    include('method.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,viewport-fit=cover">
    <title>Admission Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container">
        <form action="www.google.com" method="post">
            <center><h2>Admission Details</h2></center>
            <fieldset>
                <legend>Personal Details</legend>
                <table>
                    <tr>
                        <td><label>First Name</label></td>
                        <td><input type="text" name="fname" placeholder="Enter First Name" required></td>
                        <td><label>Last Name</label></td>
                        <td><input type="text" name="lname" placeholder="Enter Last Name" required></td>
                    </tr>                                             
                </table>
            </fieldset>
            <center><input class="btn" type="submit" name="submit" value="Submit">
            <input class="btn" type="reset" name="refresh" value="Refresh"></center>
            <?php
                if(isset($_POST['submit']))
                {
                    $response=addnewCandidate($_POST);
                    echo $response;
                }
            ?>
        </form>
    </div>
</body>
</html>