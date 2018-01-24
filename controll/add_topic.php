<?php 
include '../config/connection.php';

$topic_name = $_POST['nama'];
$desc = $_POST['deskripsi'];
$id = "TP".date('dHis');
$date = date('d-m-Y H:i:s');
$author = "admin";

$sql = "INSERT INTO topics VALUES ('$id', '$topic_name','$desc', '$date', '$author')";

if (mysqli_query($conn, $sql)) {
	header('location:../index.php');
}
else {
	echo 'Failure';
}

 ?>