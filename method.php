<?php
// Include the database connection
include 'db_connect.php';

// Retrieve form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$g = $_POST['gender'];
$s1 = $_POST['op1'];
$s2 = $_POST['op2'];
$s3 = $_POST['op3'];
$cer = $_POST['cer'];
$sd = $_POST['sdate'];
$ed = $_POST['edate'];
$gname = $_POST['gname'];
$gocc = $_POST['gocc'];
$fa = $_POST['fa'];
$ma = $_POST['ma'];
$state = $_POST['state'];
$dis = $_POST['dis'];
$city = $_POST['city'];
$pin = $_POST['pin'];
$ph = $_POST['ph'];
$gh = $_POST['gh'];
$email = $_POST['email'];

// Handle file upload
$fn = $_FILES['pic']['name'];
$extarr = explode(".", $fn);
$extrev = array_reverse($extarr);
$ext = strtolower($extrev[0]); // Convert to lowercase for consistency

$allowed_ext = ['jpg', 'jpeg', 'png'];

if (in_array($ext, $allowed_ext)) {
    $fn = time() . "_" . $fn; // Prepend timestamp to file name
    $buff = $_FILES['pic']['tmp_name'];
    $target_path = "upload_img/" . $fn;

    if (move_uploaded_file($buff, $target_path)) {
        // Insert data into database
        $sql = "INSERT INTO student (
            fname, lname, dob, profile, gender, c_edu, a_edu, c_dur, cer, s_date, e_date, g_name, g_occ, fa_name, ma_name, state, dist, city, pin, contact, g_contact, email
        ) VALUES (
            '$fname', '$lname', '$dob', '$fn', '$g', '$s1', '$s2', '$s3', '$cer', '$sd', '$ed', '$gname', '$gocc', '$fa', '$ma', '$state', '$dis', '$city', '$pin', '$ph', '$gh', '$email'
        )";

        if (mysqli_query($conn, $sql)) {
            header("Location: sel.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Failed to upload file.";
    }
} else {
    echo "File type is not allowed.";
}

// Close connection
mysqli_close($conn);
