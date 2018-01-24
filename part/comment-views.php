<?php 
session_start();
include '../config/connection.php';

$id_topic = $_SESSION['id_topic'];

$sql = "SELECT * FROM comments, users WHERE comments.id_topic='$id_topic' AND comments.comment_author = users.id_user";

$result = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_assoc($result)) {
   
?>

<div class="m-3	p-2 border border-muted rounded bg-light" style="background-color: gre">
	<div class="">
		<h5 class="h5 m-0 pull-left"><?php echo $data["user_name"]; ?></h5>
		<small class="pull-right"><?php echo $data["date"]; ?></small>
	</div>
	<br>
	<p class="text-justify text-gray-dark"><?php echo $data["comment"]; ?></p>
</div>

<?php } ?>