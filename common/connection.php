<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'crud';

$conn = mysqli_connect($servername,$username,$password,$dbname) or die("Sorry we failed to Connect: ". mysqli_connect_errno());

?>
