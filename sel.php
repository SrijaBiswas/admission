<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .table td, .table th {
      vertical-align: middle;
      text-align: center; /* Center-align text in table cells */
    }
    .table img.profile-img {
      width: 70px;
      height: 70px;
      object-fit: cover;
      border-radius: 50%; /* Make the image circular */
    }
    .table-container {
      overflow-x: auto;
    }
    @media (max-width: 768px) {
      .table th, .table td {
        white-space: nowrap;
      }
    }
    /* Center align the table within its container */
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
  </style>
</head>
<body>
<div class="container mt-5">
  <h2 class="text-center mb-4">Students Overview</h2>
  <p class="text-center mb-4">Displaying summary records:</p>
  <a href="form.php" class="btn btn-success">Add Details</a>
<br>
  <div class="table-container">
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th>#</th> <!-- Serial Number Column -->
          <th>Profile Photo</th>
          <th>Full Name</th>
          <th>Date of Birth</th>
          <th>Gender</th>
          <th>Applied Course</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
// Include database connection
include 'db_connect.php';

// Fetch data from the database
$sel = "SELECT * FROM student";
$result = mysqli_query($conn, $sel);

// Check if query was successful
if ($result) {
    $serialNumber = 1; // Initialize serial number
    while ($data = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                  <td><?php echo $serialNumber++; ?></td> <!-- Display serial number -->
                  <td><img src="upload_img/<?php echo htmlspecialchars($data['profile']); ?>" class="profile-img" alt="Profile Photo"></td>
                  <td><?php echo htmlspecialchars($data['fname'] . " " . $data['lname']); ?></td>
                  <td><?php echo htmlspecialchars($data['dob']); ?></td>
                  <td><?php echo htmlspecialchars($data['gender']); ?></td>
                  <td><?php echo htmlspecialchars($data['a_edu']); ?></td>
                  <td>
                    <a href="details.php?id=<?php echo htmlspecialchars($data['id']); ?>" class="btn btn-info btn-sm">Details</a>
                    <a href="update.php?id=<?php echo htmlspecialchars($data['id']); ?>" class="btn btn-warning btn-sm">Update</a>
                    <a href="del.php?id=<?php echo htmlspecialchars($data['id']); ?>" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
                <?php
}
} else {
    echo "<tr><td colspan='7' class='text-center'>No records found</td></tr>";
}

// Close the database connection
mysqli_close($conn);
?>
      </tbody>
    </table>
  </div>
</div>
</body>
</html>
