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
                        <td><input type="text" name="fname" placeholder="Enter First Name" required></td>
                        <td><label>Last Name</label></td>
                        <td><input type="text" name="lname" placeholder="Enter Last Name" required></td>
                    </tr>
                    <tr>
                        <td><label>Date of Birth</label></td>
                        <td><input type="date" name="dob" required></td>
                    </tr>
                    <tr>
                        <td><label>Upload Candidate Photo</label></td>
                        <td><input type="file" name="pic" required></td>
                    </tr>
                    <tr>
                        <td><label>Gender</label></td>
                        <td><input type="radio" name="gender" value="male">Male</td>
                        <td><input type="radio" name="gender" value="female">Female</td>
                        <td><input type="radio" name="gender" value="others">Others</td>
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
                                <option value="Class X">Class X</option>
                                <option value="Class XI">Class XI</option>
                                <option value="Class XII">Class XII</option>
                                <option value="UG">UG</option>
                                <option value="PG">PG</option>
                                <option value="Others">Others</option>
                            </select>
                        </td>
                        <td><label>Applied For</label></td>
                        <td><select name="op2">
                                <option value="">----Select Your Applied Course----</option>
                                <option value="Java Programming">Java Programming</option>
                                <option value="Python Programming">Python Programming</option>
                                <option value="Web Development">Web Development</option>
                                <option value="C Programing">C Programing</option>
                                <option value="C++ Programing">C++ Programing</option>
                                <option value="Multi Media">Multi Media</option>
                                <option value="Tally">Tally</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Course Duration</label></td>
                        <td>
                            <select name="op3">
                                <option value="">----Select Your Course Details----</option>
                                <option value="3 Months">3 Months</option>
                                <option value="6 Months">6 Months</option>
                                <option value="8 Months">8 Months</option>
                                <option value="12 Months">12 Months</option>
                                <option value="1.5 Years">1.5 Years</option>
                                <option value="2 Years">2 Years</option>
                            </select>
                        </td>
                        <td><label>Course Certification Required</label></td>
                        <td><input type="radio" name="cer" value="yes">Yes
                        <input type="radio" name="cer" value="no">No</td>                        
                    </tr>
                    <tr>
                        <td><label>Staring Date</label></td>
                        <td><input type="date" name="sdate" required></td>
                        <td><label>Ending Date</label></td>
                        <td><input type="date" name="edate" required></td>
                    </tr>
                    </table>
            </fieldset>
             <fieldset>
                <legend>Gardian Details</legend>
                <table>
                    <tr>
                        <td><label>Gardian Name</label></td>
                        <td><input type="text" name="gname" placeholder="Enter Gardian Name" required></td>
                        <td><label>Gardian Occupaton</label></td>
                        <td><input type="text" name="gocc" placeholder="Enter Gardian Occupation" required></td>
                    </tr>
                    <tr>
                        <td><label>Father's Name</label></td>
                        <td><input type="text" name="fa" placeholder="Enter Father Name" required></td>
                        <td><label>Mothers's Name</label></td>
                        <td><input type="text" name="ma" placeholder="Enter Mother's Name" required></td>
                    </tr>                                  
                </table>
            </fieldset>
            <fieldset>
                <legend>Address Details</legend>
                <table>
                    <tr>
                        <td><label>State Name</label></td>
                        <td><input type="text" name="state" placeholder="Enter State Name" required></td>
                        <td><label>District</label></td>
                        <td><input type="text" name="dis" placeholder="Enter District name" required></td>
                    </tr>
                    <tr>
                    <td><label>City/Village Name</label></td>
                        <td><input type="text" name="city" placeholder="Enter City/Village name" required></td>
                        <td><label>Pin Code</label></td>
                        <td><input type="number" name="pin" placeholder="Enter Pin Code" required></td>
                    </tr>                                  
                </table>
            </fieldset>
            <fieldset>
            <legend>Contact Details</legend>
                <table>
                    <tr>
                        <td><label>Phone Number</label></td>
                        <td><input type="number" name="ph" placeholder="Enter Phone Number" required></td>
                        <td><label>Gardian Number</label></td>
                        <td><input type="number" name="gh" placeholder="Enter  Phone Number" required></td>
                    </tr>
                    <tr>
                        <td><label>Email ID</label></td>
                        <td><input type="email" name="email" placeholder="student@gmail.com" required></td>
                    </tr>                  
                </table>
            </fieldset>
            <center><input class="btn" type="submit" name="submit" value="Submit">
            <input class="btn" type="reset" name="refresh" value="Refresh"></center>            
        </form>
    </div>
</body>
</html>