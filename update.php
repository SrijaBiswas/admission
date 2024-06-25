<?php
	$con=mysqli_connect("localhost","root","","admission");
	$id=$_GET['id'];
	$sel="SELECT * FROM student WHERE id='$id'";
	$rs=$con->query($sel);
	$row=$rs->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,viewport-fit=cover">
    <title>Admission Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container">
        <form action="method.php" method="post" enctype="multipart/form-data">
            <center><h2>Admission Details</h2></center>
            <fieldset>
                <legend>Personal Details</legend>
                <table>
                    <tr>
                        <td><label>First Name</label></td>
                        <td><input type="text" name="fname" placeholder="Enter First Name" required value="<?php echo $row['fname']; ?>"></td>
                        <td><label>Last Name</label></td>
                        <td><input type="text" name="lname" placeholder="Enter Last Name" required value="<?php echo $row['lname']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label>Date of Birth</label></td>
                        <td><input type="date" name="dob" required value="<?php echo $row['dob']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label>Upload Candidate Photo</label></td>
                        <td><input type="file" name="pic" required ></td>
                        <td><img src="upload_img/<?php echo $row['profile']; ?>" style="width: 100px; height: 100px;"></td>
                    </tr>
                    <tr>
                        <td><label>Gender</label></td>
                        <td><input type="radio" name="gender" value="male" <?php if($row['gender']=="male"){ echo "checked";} ?>>Male</td>
                        <td><input type="radio" name="gender" value="female" <?php if($row['gender']=="female"){ echo "checked";} ?>>Female</td>
                        <td><input type="radio" name="gender" value="others" <?php if($row['gender']=="others"){ echo "checked";} ?>>Others</td>
                    </tr>                                   
                </table>
            </fieldset>
            <fieldset>
            <legend>Course Details</legend>
                <table>
                    <tr>
                       <td><label>Current Education</label></td>
                        <td>
                            <select name="op1">
                                <option value="">----Select Your Current Course----</option>
                                <option value="Class X" <?php if($row['c_edu']=="Class X"){ echo "selected";} ?>>Class X</option>
                                <option value="Class XI" <?php if($row['c_edu']=="Class XI"){ echo "selected";} ?>>Class XI</option>
                                <option value="Class XII" <?php if($row['c_edu']=="Class XII"){ echo "selected";} ?>>Class XII</option>
                                <option value="UG" <?php if($row['c_edu']=="UG"){ echo "selected";} ?>>UG</option>
                                <option value="PG" <?php if($row['c_edu']=="PG"){ echo "selected";} ?>>PG</option>
                                <option value="Others" <?php if($row['c_edu']=="Others"){ echo "selected";} ?>>Others</option>
                            </select>
                        </td>
                        <td><label>Applied For</label></td>
                        <td><select name="op2">
                                <option value="">----Select Your Applied Course----</option>
                                <option value="Java Programming" <?php if($row['a_edu']=="Java Programming"){ echo "selected";} ?>>Java Programming</option>
                                <option value="Python Programming" <?php if($row['a_edu']=="Python Programming"){ echo "selected";} ?>>Python Programming</option>
                                <option value="Web Development" <?php if($row['a_edu']=="Web Development"){ echo "selected";} ?>>Web Development</option>
                                <option value="C Programing" <?php if($row['a_edu']=="Java Programming"){ echo "selected";} ?>>C Programing</option>
                                <option value="C++ Programing" <?php if($row['a_edu']=="C++ Programing"){ echo "selected";} ?>>C++ Programing</option>
                                <option value="Multi Media" <?php if($row['a_edu']=="Multi Media"){ echo "selected";} ?>>Multi Media</option>
                                <option value="Tally" <?php if($row['a_edu']=="Tally"){ echo "selected";} ?>>Tally</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Course Duration</label></td>
                        <td>
                            <select name="op3">
                                <option value="">----Select Your Course Details----</option>
                                <option value="3 Months" <?php if($row['c_dur']=="3 Months"){ echo "selected";} ?>>3 Months</option>
                                <option value="6 Months" <?php if($row['c_dur']=="6 Months"){ echo "selected";} ?>>6 Months</option>
                                <option value="8 Months" <?php if($row['c_dur']=="8 Months"){ echo "selected";} ?>>8 Months</option>
                                <option value="12 Months" <?php if($row['c_dur']=="12 Months"){ echo "selected";} ?>>12 Months</option>
                                <option value="1.5 Years" <?php if($row['c_dur']=="1.5 Years"){ echo "selected";} ?>>1.5 Years</option>
                                <option value="2 Years" <?php if($row['c_dur']=="2 Years"){ echo "selected";} ?>>2 Years</option>
                            </select>
                        </td>
                        <td><label>Course Certification Required</label></td>
                        <td><input type="radio" name="cer" value="yes" <?php if($row['cer']=="yes"){ echo "checked";} ?>>Yes
                        <input type="radio" name="cer" value="no"  <?php if($row['cer']=="no"){ echo "checked";} ?>>No</td>                        
                    </tr>
                    <tr>
                        <td><label>Staring Date</label></td>
                        <td><input type="date" name="sdate" required value="<?php echo $row['s_date']; ?>"></td>
                        <td><label>Ending Date</label></td>
                        <td><input type="date" name="edate" required value="<?php echo $row['e_date']; ?>"></td>
                    </tr>
                    </table>
            </fieldset>
             <fieldset>
                <legend>Gardian Details</legend>
                <table>
                    <tr>
                        <td><label>Gardian Name</label></td>
                        <td><input type="text" name="gname" placeholder="Enter Gardian Name" required value="<?php echo $row['g_name']; ?>"></td>
                        <td><label>Gardian Occupaton</label></td>
                        <td><input type="text" name="gocc" placeholder="Enter Gardian Occupation" required value="<?php echo $row['g_occ']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label>Father's Name</label></td>
                        <td><input type="text" name="fa" placeholder="Enter Father Name" required value="<?php echo $row['fa_name']; ?>"></td>
                        <td><label>Mothers's Name</label></td>
                        <td><input type="text" name="ma" placeholder="Enter Mother's Name" required value="<?php echo $row['ma_name']; ?>"></td>
                    </tr>                                  
                </table>
            </fieldset>
            <fieldset>
                <legend>Address Details</legend>
                <table>
                    <tr>
                        <td><label>State Name</label></td>
                        <td><input type="text" name="state" placeholder="Enter State Name" required value="<?php echo $row['state']; ?>"></td>
                        <td><label>District</label></td>
                        <td><input type="text" name="dis" placeholder="Enter District name" required value="<?php echo $row['dist']; ?>"></td>
                    </tr>
                    <tr>
                    <td><label>City/Village Name</label></td>
                        <td><input type="text" name="city" placeholder="Enter City/Village name" required value="<?php echo $row['city']; ?>"></td>
                        <td><label>Pin Code</label></td>
                        <td><input type="number" name="pin" placeholder="Enter Pin Code" required value="<?php echo $row['pin']; ?>"></td>
                    </tr>                                  
                </table>
            </fieldset>
            <fieldset>
            <legend>Contact Details</legend>
                <table>
                    <tr>
                        <td><label>Phone Number</label></td>
                        <td><input type="number" name="ph" placeholder="Enter Phone Number" required value="<?php echo $row['contact']; ?>"></td>
                        <td><label>Gardian Number</label></td>
                        <td><input type="number" name="gh" placeholder="Enter  Phone Number" required value="<?php echo $row['g_contact']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label>Email ID</label></td>
                        <td><input type="email" name="email" placeholder="student@gmail.com" required value="<?php echo $row['email']; ?>"></td>
                    </tr>                  
                </table>
            </fieldset>
            <center><input style="padding-right: 10px;" type="submit" name="update" value="Save Update"></center>            
        </form>
    </div>
</body>
</html>