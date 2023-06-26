<?php

include 'common/connection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $student_name = $_POST['sname'];
    $student_address = $_POST['saddress'];
    $student_class = $_POST['class'];
    $student_phone = $_POST['sphone'];


    // sql query executed
    $sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('$student_name','$student_address','$student_class','$student_phone')";
    $result = mysqli_query($conn, $sql) or die("The Record was not successfuly because of this error ---> ". mysqli_error($conn));

    header("Location: http://localhost/PHP-CRUD/index.php");

mysqli_close($conn);    
}

?>