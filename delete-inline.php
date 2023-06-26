<?php

include 'common/connection.php';

$student_id = $_GET['id'];


$sql = "DELETE FROM STUDENT WHERE sid = $student_id";
$result = mysqli_query($conn, $sql) or die("Query Unsuccesful." .mysqli_errno($conn));


header("Location: http://localhost/PHP-CRUD/index.php");

mysqli_close($conn);
?>