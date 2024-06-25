<?php 
    $conn=mysqli_connect("localhost","root","","admission");
    $id=$_GET['id'];
    $sel="SELECT * FROM student WHERE id='$id'";
    $rs=$conn->query($sel);//result set 
    $row=$rs->fetch_assoc();//fetch row
    unlink("upload_img/".$row['profile']);
    $sql="DELETE FROM student WHERE id='$id'";
    $conn->query($sql);
    header("location:sel.php");
?>