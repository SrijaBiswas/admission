<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <div class="container">
        <form action="method.php" method="post" enctype="multipart/form-data">
            <h2 class="text-center mb-4">Admission Details</h2>

            <div class="section">
                <legend>Personal Details</legend>
                <div class="form-group d-flex align-items-center">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" required>
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" required>
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="pic" class="form-label">Upload Candidate Photo</label>
                    <input type="file" class="form-control" id="pic" name="pic" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Gender</label>
                    <div class="d-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="male" name="gender" value="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="female" name="gender" value="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="others" name="gender" value="others">
                            <label class="form-check-label" for="others">Others</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <legend>Course Details</legend>
                <div class="form-group d-flex align-items-center">
                    <label for="op1" class="form-label">Current Education</label>
                    <select id="op1" name="op1" class="form-select">
                        <option value="">----Select Your Current Course----</option>
                        <option value="Class X">Class X</option>
                        <option value="Class XI">Class XI</option>
                        <option value="Class XII">Class XII</option>
                        <option value="UG">UG</option>
                        <option value="PG">PG</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="op2" class="form-label">Applied For</label>
                    <select id="op2" name="op2" class="form-select">
                        <option value="">----Select Your Applied Course----</option>
                        <option value="Java Programming">Java Programming</option>
                        <option value="Python Programming">Python Programming</option>
                        <option value="Web Development">Web Development</option>
                        <option value="C Programming">C Programming</option>
                        <option value="C++ Programming">C++ Programming</option>
                        <option value="Multi Media">Multi Media</option>
                        <option value="Tally">Tally</option>
                    </select>
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="op3" class="form-label">Course Duration</label>
                    <select id="op3" name="op3" class="form-select">
                        <option value="">----Select Your Course Details----</option>
                        <option value="3 Months">3 Months</option>
                        <option value="6 Months">6 Months</option>
                        <option value="8 Months">8 Months</option>
                        <option value="12 Months">12 Months</option>
                        <option value="1.5 Years">1.5 Years</option>
                        <option value="2 Years">2 Years</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Course Certification Required</label>
                    <div class="d-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="cer-yes" name="cer" value="yes">
                            <label class="form-check-label" for="cer-yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="cer-no" name="cer" value="no">
                            <label class="form-check-label" for="cer-no">No</label>
                        </div>
                    </div>
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="sdate" class="form-label">Starting Date</label>
                    <input type="date" class="form-control" id="sdate" name="sdate" required>
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="edate" class="form-label">Ending Date</label>
                    <input type="date" class="form-control" id="edate" name="edate" required>
                </div>
            </div>

            <div class="section">
                <legend>Guardian Details</legend>
                <div class="form-group d-flex align-items-center">
                    <label for="gname" class="form-label">Guardian Name</label>
                    <input type="text" class="form-control" id="gname" name="gname" placeholder="Enter Guardian Name" required>
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="gocc" class="form-label">Guardian Occupation</label>
                    <input type="text" class="form-control" id="gocc" name="gocc" placeholder="Enter Guardian Occupation" required>
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="fa" class="form-label">Father's Name</label>
                    <input type="text" class="form-control" id="fa" name="fa" placeholder="Enter Father's Name" required>
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="ma" class="form-label">Mother's Name</label>
                    <input type="text" class="form-control" id="ma" name="ma" placeholder="Enter Mother's Name" required>
                </div>
            </div>

            <div class="section">
                <legend>Address Details</legend>
                <div class="form-group d-flex align-items-center">
                    <label for="state" class="form-label">State Name</label>
                    <input type="text" class="form-control" id="state" name="state" placeholder="Enter State Name" required>
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="dis" class="form-label">District</label>
                    <input type="text" class="form-control" id="dis" name="dis" placeholder="Enter District Name" required>
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="city" class="form-label">City/Village Name</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Enter City/Village Name" required>
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="pin" class="form-label">Pin Code</label>
                    <input type="number" class="form-control" id="pin" name="pin" placeholder="Enter Pin Code" required>
                </div>
            </div>

            <div class="section">
                <legend>Contact Details</legend>
                <div class="form-group d-flex align-items-center">
                    <label for="ph" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="ph" name="ph" placeholder="Enter Phone Number" required>
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="gh" class="form-label">Guardian Number</label>
                    <input type="number" class="form-control" id="gh" name="gh" placeholder="Enter Guardian Phone Number" required>
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="email" class="form-label">Email ID</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="student@gmail.com" required>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
