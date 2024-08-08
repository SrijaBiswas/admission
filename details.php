<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .container {
      width: 210mm; /* A4 width */
      max-width: 100%;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      background-color: #f9f9f9;
    }
    .profile-img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      border: 2px solid #ddd;
    }
    .resume-header {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    .resume-header img {
      margin-right: 20px;
    }
    .resume-header h2 {
      margin: 0;
    }
    .resume-section {
      margin-bottom: 20px;
    }
    .resume-section h3 {
      margin-bottom: 10px;
      font-size: 1.5rem;
      border-bottom: 2px solid #007bff;
      padding-bottom: 5px;
    }
    .resume-table {
      width: 100%;
      border-collapse: collapse;
    }
    .resume-table .resume-header {
      background-color: #007bff;
      color: #fff;
      font-weight: bold;
    }
    .resume-table .resume-row {
      background-color: #f2f2f2;
      border-bottom: 1px solid #ddd;
    }
    .resume-table .resume-data {
      padding: 8px;
    }
    .cv-btn {
      display: block;
      width: 150px;
      margin: 20px auto;
      text-align: center;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      text-decoration: none;
    }
    .cv-btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
<?php
// Include database connection
include 'db_connect.php';

// Fetch data from the database based on student ID
$id = intval($_GET['id']);
$sel = "SELECT * FROM student WHERE id = $id";
$result = mysqli_query($conn, $sel);

// Check if query was successful
if ($result && $data = mysqli_fetch_assoc($result)) {
    ?>
<div class="container">
<a href="sel.php" class="btn btn-secondary">Back</a>

  <div class="resume-header">
  <img src="upload_img/<?php echo htmlspecialchars($data['profile']); ?>" class="profile-img" alt="Profile Photo">
    <div>
      <h2>Student Details</h2>
    </div>
  </div>
  <div class="resume-section">

        <div class="resume-table">
          <div class="resume-section">
            <h3>Personal Information</h3>
            <div class="resume-row">
              <div class="resume-data"><strong>Full Name:</strong> <?php echo htmlspecialchars($data['fname'] . " " . $data['lname']); ?></div>
            </div>
            <div class="resume-row">
              <div class="resume-data"><strong>Date of Birth:</strong> <?php echo htmlspecialchars($data['dob']); ?></div>
            </div>
            <div class="resume-row">
              <div class="resume-data"><strong>Gender:</strong> <?php echo htmlspecialchars($data['gender']); ?></div>
            </div>
            <div class="resume-row">
              <div class="resume-data"><strong>Phone Number:</strong> <?php echo htmlspecialchars($data['contact']); ?></div>
            </div>
            <div class="resume-row">
              <div class="resume-data"><strong>Email ID:</strong> <?php echo htmlspecialchars($data['email']); ?></div>
            </div>
          </div>
          <div class="resume-section">
            <h3>Education</h3>
            <div class="resume-row">
              <div class="resume-data"><strong>Current Education:</strong> <?php echo htmlspecialchars($data['c_edu']); ?></div>
            </div>
            <div class="resume-row">
              <div class="resume-data"><strong>Applied Course:</strong> <?php echo htmlspecialchars($data['a_edu']); ?></div>
            </div>
            <div class="resume-row">
              <div class="resume-data"><strong>Course Duration:</strong> <?php echo htmlspecialchars($data['c_dur']); ?></div>
            </div>
            <div class="resume-row">
              <div class="resume-data"><strong>Course Certificate:</strong> <?php echo htmlspecialchars($data['cer']); ?></div>
            </div>
            <div class="resume-row">
              <div class="resume-data"><strong>Starting Date:</strong> <?php echo htmlspecialchars($data['s_date']); ?></div>
            </div>
            <div class="resume-row">
              <div class="resume-data"><strong>Ending Date:</strong> <?php echo htmlspecialchars($data['e_date']); ?></div>
            </div>
          </div>
          <div class="resume-section">
            <h3>Guardian Information</h3>
            <div class="resume-row">
              <div class="resume-data"><strong>Guardian Name:</strong> <?php echo htmlspecialchars($data['g_name']); ?></div>
            </div>
            <div class="resume-row">
              <div class="resume-data"><strong>Guardian Occupation:</strong> <?php echo htmlspecialchars($data['g_occ']); ?></div>
            </div>
            <div class="resume-row">
              <div class="resume-data"><strong>Guardian Number:</strong> <?php echo htmlspecialchars($data['g_contact']); ?></div>
            </div>
          </div>
          <div class="resume-section">
            <h3>Family Information</h3>
            <div class="resume-row">
              <div class="resume-data"><strong>Father's Name:</strong> <?php echo htmlspecialchars($data['fa_name']); ?></div>
            </div>
            <div class="resume-row">
              <div class="resume-data"><strong>Mother's Name:</strong> <?php echo htmlspecialchars($data['ma_name']); ?></div>
            </div>
          </div>
          <div class="resume-section">
            <h3>Address</h3>
            <div class="resume-row">
              <div class="resume-data"><?php echo htmlspecialchars($data['dist'] . " " . $data['state'] . ", " . $data['city'] . "-" . $data['pin']); ?></div>
            </div>
          </div>

        </div>

        <?php
} else {
    echo "<p class='text-center'>No details found for this student.</p>";
}

// Close the database connection
mysqli_close($conn);
?>
  </div>
</div>
</body>
</html>
