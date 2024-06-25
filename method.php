<?php
$conn = mysqli_connect("localhost", "root", "", "admission");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$fn = $_FILES['pic']['name'];
$extarr = explode(".", $_FILES['pic']['name']);
$extrev = array_reverse($extarr);
$ext = $extrev[0];
if ($ext == "jpg" || $ext == "jpeg" || $ext == "png") {
    $fn = time() . $_FILES['pic']['name'];
    $buff = $_FILES['pic']['tmp_name'];
    move_uploaded_file($buff, "upload_img/" . $fn);
} else {
    echo "File type is not Allowed";
}
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
$ins = "INSERT INTO student SET fname='$fname', lname='$lname', dob='$dob', profile='$fn', gender='$g', c_edu='$s1', a_edu='$s2', c_dur='$s3', cer='$cer', s_date='$sd', e_date='$ed', g_name='$gname', g_occ='$gocc', fa_name='$fa', ma_name='$ma', state='$state', dist='$dis', city='$city', pin='$pin', contact='$ph', g_contact='$gh', email='$email'";
$conn->query($ins);
header("location:sel.php");
