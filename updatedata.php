<?php

include 'common/connection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $student_id = $_POST['sid'];
    $student_name = $_POST['sname'];
    $student_address = $_POST['saddress'];
    $student_class = $_POST['sclass'];
    $student_phone = $_POST['sphone'];


    // sql query executed
    $sql = "UPDATE student SET sname = '{$student_name}', saddress = '{$student_address}', sclass = '{$student_class}', sphone = '{$student_phone}' WHERE sid = {$student_id}";
    $result = mysqli_query($conn, $sql) or die("The Record was not successfuly because of this error ---> ". mysqli_error($conn));

    header("Location: http://localhost/PHP-CRUD/index.php");

mysqli_close($conn);    
}

?>