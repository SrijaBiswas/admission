<?php
// Include the database connection
include 'db_connect.php';

// Retrieve the ID from URL
$id = $_GET['id'];

// Fetch data from the database
$sel = "SELECT * FROM student WHERE id='$id'";
$rs = $conn->query($sel);
$row = $rs->fetch_assoc();

// Check if date values exist and format them properly
$sdate = isset($row['s_date']) ? date('Y-m-d', strtotime($row['s_date'])) : '';
$edate = isset($row['e_date']) ? date('Y-m-d', strtotime($row['e_date'])) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Admission Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <div class="container mt-5">
        <form action="update_method.php" method="post" enctype="multipart/form-data">
            <h2 class="text-center mb-4">Update Admission Details</h2>
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">

            <div class="section mb-4">
                <legend>Personal Details</legend>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" required value="<?php echo htmlspecialchars($row['fname']); ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" required value="<?php echo htmlspecialchars($row['lname']); ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" required value="<?php echo htmlspecialchars($row['dob']); ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="pic" class="form-label">Upload Candidate Photo</label>
                    <input type="file" class="form-control" id="pic" name="pic">
                    <img src="upload_img/<?php echo htmlspecialchars($row['profile']); ?>" class="img-fluid mt-2" style="width: 100px; height: 100px;" alt="Profile Picture">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="male" name="gender" value="male" <?php if ($row['gender'] == "male") echo "checked";?>>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="female" name="gender" value="female" <?php if ($row['gender'] == "female") echo "checked";?>>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="others" name="gender" value="others" <?php if ($row['gender'] == "others") echo "checked";?>>
                        <label class="form-check-label" for="others">Others</label>
                    </div>
                </div>
            </div>

            <div class="section mb-4">
                <legend>Course Details</legend>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="op1" class="form-label">Current Education</label>
                            <select id="op1" name="op1" class="form-select">
                                <option value="">----Select Your Current Course----</option>
                                <option value="Class X" <?php if ($row['c_edu'] == "Class X") echo "selected";?>>Class X</option>
                                <option value="Class XI" <?php if ($row['c_edu'] == "Class XI") echo "selected";?>>Class XI</option>
                                <option value="Class XII" <?php if ($row['c_edu'] == "Class XII") echo "selected";?>>Class XII</option>
                                <option value="UG" <?php if ($row['c_edu'] == "UG") echo "selected";?>>UG</option>
                                <option value="PG" <?php if ($row['c_edu'] == "PG") echo "selected";?>>PG</option>
                                <option value="Others" <?php if ($row['c_edu'] == "Others") echo "selected";?>>Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="op2" class="form-label">Applied For</label>
                            <select id="op2" name="op2" class="form-select">
                                <option value="">----Select Your Applied Course----</option>
                                <option value="Java Programming" <?php if ($row['a_edu'] == "Java Programming") echo "selected";?>>Java Programming</option>
                                <option value="Python Programming" <?php if ($row['a_edu'] == "Python Programming") echo "selected";?>>Python Programming</option>
                                <option value="Web Development" <?php if ($row['a_edu'] == "Web Development") echo "selected";?>>Web Development</option>
                                <option value="Data Science" <?php if ($row['a_edu'] == "Data Science") echo "selected";?>>Data Science</option>
                                <option value="Cloud Computing" <?php if ($row['a_edu'] == "Cloud Computing") echo "selected";?>>Cloud Computing</option>
                                <option value="Others" <?php if ($row['a_edu'] == "Others") echo "selected";?>>Others</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="op3" class="form-label">Course Duration</label>
                    <input type="text" class="form-control" id="op3" name="op3" placeholder="Enter Duration" value="<?php echo htmlspecialchars($row['c_dur']); ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="cer" class="form-label">Certificates</label>
                    <input type="text" class="form-control" id="cer" name="cer" placeholder="Enter Certificates" value="<?php echo htmlspecialchars($row['cer']); ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="sdate" class="form-label">Start Date</label>
                    <input type="date" class="form-control" id="sdate" name="sdate" value="<?php echo htmlspecialchars($sdate); ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="edate" class="form-label">End Date</label>
                    <input type="date" class="form-control" id="edate" name="edate" value="<?php echo htmlspecialchars($edate); ?>">
                </div>
            </div>

            <div class="section mb-4">
                <legend>Guardian Details</legend>
                <div class="form-group mb-3">
                    <label for="gname" class="form-label">Guardian Name</label>
                    <input type="text" class="form-control" id="gname" name="gname" placeholder="Enter Guardian Name" value="<?php echo htmlspecialchars($row['g_name']); ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="gocc" class="form-label">Guardian Occupation</label>
                    <input type="text" class="form-control" id="gocc" name="gocc" placeholder="Enter Guardian Occupation" value="<?php echo htmlspecialchars($row['g_occ']); ?>">
                </div>
            </div>

            <div class="section mb-4">
                <legend>Family Details</legend>
                <div class="form-group mb-3">
                    <label for="fa" class="form-label">Father's Name</label>
                    <input type="text" class="form-control" id="fa" name="fa" placeholder="Enter Father's Name" value="<?php echo htmlspecialchars($row['fa_name']); ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="ma" class="form-label">Mother's Name</label>
                    <input type="text" class="form-control" id="ma" name="ma" placeholder="Enter Mother's Name" value="<?php echo htmlspecialchars($row['ma_name']); ?>">
                </div>
            </div>

            <div class="section mb-4">
                <legend>Address</legend>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="state" class="form-label">State</label>
                            <input type="text" class="form-control" id="state" name="state" placeholder="Enter State" value="<?php echo htmlspecialchars($row['state']); ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="dis" class="form-label">District</label>
                            <input type="text" class="form-control" id="dis" name="dis" placeholder="Enter District" value="<?php echo htmlspecialchars($row['dist']); ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="Enter City" value="<?php echo htmlspecialchars($row['city']); ?>">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pin" class="form-label">Pincode</label>
                            <input type="text" class="form-control" id="pin" name="pin" placeholder="Enter Pincode" value="<?php echo htmlspecialchars($row['pin']); ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ph" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="ph" name="ph" placeholder="Enter Contact Number" value="<?php echo htmlspecialchars($row['contact']); ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="gh" class="form-label">Guardian Contact Number</label>
                    <input type="text" class="form-control" id="gh" name="gh" placeholder="Enter Guardian Contact Number" value="<?php echo htmlspecialchars($row['g_contact']); ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address" value="<?php echo htmlspecialchars($row['email']); ?>">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="sel.php"><button type="submit" class="btn btn-secondary">Back</button></a>
            </div>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
