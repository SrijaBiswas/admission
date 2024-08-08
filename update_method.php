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
$id = $_POST['id']; // Assuming the ID is sent in a hidden field or URL parameter

// Handle file upload
$fn = $_FILES['pic']['name'];
$extarr = explode(".", $fn);
$extrev = array_reverse($extarr);
$ext = strtolower($extrev[0]); // Convert to lowercase for consistency

$allowed_ext = ['jpg', 'jpeg', 'png'];

if ($fn) {
    if (in_array($ext, $allowed_ext)) {
        $fn = time() . "_" . $fn; // Prepend timestamp to file name
        $buff = $_FILES['pic']['tmp_name'];
        $target_path = "upload_img/" . $fn;

        if (move_uploaded_file($buff, $target_path)) {
            // Update record with new file
            $sql = "UPDATE student SET
                fname = '$fname',
                lname = '$lname',
                dob = '$dob',
                profile = '$fn',
                gender = '$g',
                c_edu = '$s1',
                a_edu = '$s2',
                c_dur = '$s3',
                cer = '$cer',
                s_date = '$sd',
                e_date = '$ed',
                g_name = '$gname',
                g_occ = '$gocc',
                fa_name = '$fa',
                ma_name = '$ma',
                state = '$state',
                dist = '$dis',
                city = '$city',
                pin = '$pin',
                contact = '$ph',
                g_contact = '$gh',
                email = '$email'
            WHERE id = '$id'";
        } else {
            echo "Failed to upload file.";
            exit();
        }
    } else {
        echo "File type is not allowed.";
        exit();
    }
} else {
    // Update record without changing the file
    $sql = "UPDATE student SET
        fname = '$fname',
        lname = '$lname',
        dob = '$dob',
        gender = '$g',
        c_edu = '$s1',
        a_edu = '$s2',
        c_dur = '$s3',
        cer = '$cer',
        s_date = '$sd',
        e_date = '$ed',
        g_name = '$gname',
        g_occ = '$gocc',
        fa_name = '$fa',
        ma_name = '$ma',
        state = '$state',
        dist = '$dis',
        city = '$city',
        pin = '$pin',
        contact = '$ph',
        g_contact = '$gh',
        email = '$email'
    WHERE id = '$id'";
}

if (mysqli_query($conn, $sql)) {
    header("Location: sel.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
