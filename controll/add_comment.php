<?php 
include '../config/connection.php';

$id_topic = $_POST['id_topic'];
$id_comment = "CM".date('dHis');
$comment = $_POST['comment'];
$date = date('d-m-Y H:i:s');
$author = "admin";

$sql = "INSERT INTO comments VALUES ('$id_comment', '$id_topic','$comment', '$date', '$author')";

if (mysqli_query($conn, $sql)) {
	header('location:../index.php');
}
else {
	echo 'Failure';
}

 ?>