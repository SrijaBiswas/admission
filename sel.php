<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Students Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">th{width: 10%;font-size: 20px;}</style>
</head>
<body>
<div class="container">
  <center><h2>Students Details</h2>
  <p>Using select query print the database table :</p>            
  <table class="table" border=".5">
    <thead>
      <tr>
        <th>Full Name</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Current Education</th>
        <th>Applied Course</th>
        <th>Course Duration</th>
        <th>Course Certificate</th>
        <th>Starting Date</th>
        <th>Ending Date</th>
        <th>Gardian Name</th>
        <th>Gardian Occupation</th>
        <th>Father's Name</th>
        <th>Mothers Name</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Gardian Number</th>
        <th>Email ID</th>
        <th>Profile Photo</th>
        <th>Delete</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $conn=mysqli_connect("localhost","root","","admission");
        $sel="SELECT * FROM student";
        $rs=$conn->query($sel);
        while($data=$rs->fetch_assoc()){
      ?>
      <tr>
        <td><center><?php echo $data['fname']." ".$data['lname']; ?></center></td>
        <td><center><?php echo $data['dob']; ?></center></td>
        <td><center><?php echo $data['gender']; ?></center></td>
        <td><center><?php echo $data['c_edu']; ?></center></td>
        <td><center><?php echo $data['a_edu']; ?></center></td>
        <td><center><?php echo $data['c_dur']; ?></center></td>
        <td><center><?php echo $data['cer']; ?></center></td>
        <td><center><?php echo $data['s_date']; ?></center></td>
        <td><center><?php echo $data['e_date']; ?></center></td>
        <td><center><?php echo $data['g_name']; ?></center></td>
        <td><center><?php echo $data['g_occ']; ?></center></td>
        <td><center><?php echo $data['fa_name']; ?></center></td>
        <td><center><?php echo $data['ma_name']; ?></center></td>
        <td><center><?php echo $data['dist']." ".$data['state'].", ".$data['city']."-".$data['pin']; ?></center></td>
        <td><center><?php echo $data['contact']; ?></center></td>
        <td><center><?php echo $data['g_contact']; ?></center></td>
        <td><center><?php echo $data['email']; ?></center></td>
        <td><center><img src="upload_img/<?php echo $data['profile']; ?>" style="width: 70px; height: 70px;"></center></td>
        <td><center><a href="del.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</a></center></td>
        <td><center><a href="update.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Are you sure you want to update?')" class="btn btn-danger">Update</a></center></td>
      </tr>
      <?php } ?>
    </tbody>
  </table></center>
</div>
</body>
</html>