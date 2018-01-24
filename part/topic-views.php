<?php 
include '../config/connection.php';

$sql = "SELECT * FROM topics, users WHERE topics.author = users.id_user";

$result = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_assoc($result)) {
   
?>

<div class="border rounded align-content-center align-content-between mt-2" >
<div class="row m-2 ml-3 mb-3">
	<div class="col-md-9 align-self-center align-content-between">
		<a href="topic.php?id=<?php echo $data["id_topic"]; ?>" class="h3 text-capitalize text-info"><?php echo $data["title"]; ?></a>
	</div>
	<div class="col-md-3 text-muted">
		<div class="row">
			<label>Dibuat Oleh <a href="" class="text-muted"><?php echo $data["author"]; ?></a></label>
		</div>
		<div class="row">
			<label>Pada <a href="" class="text-muted"><?php echo $data["created_on"]; ?></a></label>
		</div>
	</div>
</div>

</div>

<?php } ?>