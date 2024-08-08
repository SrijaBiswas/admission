<?php
// Include the database connection
include 'db_connect.php';

// Retrieve the ID from the GET request
$id = $_GET['id'];

// Prepare a statement to select the record
$stmt = $conn->prepare("SELECT profile FROM student WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Check if the record exists
if ($row) {
    // Delete the file from the server if it exists
    $file_path = "upload_img/" . $row['profile'];
    if (file_exists($file_path)) {
        if (!unlink($file_path)) {
            echo "Error: Unable to delete the file.";
            exit();
        }
    }

    // Prepare a statement to delete the record from the database
    $stmt = $conn->prepare("DELETE FROM student WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        header("Location: sel.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "Record not found.";
}

// Close the database connection
$stmt->close();
$conn->close();
