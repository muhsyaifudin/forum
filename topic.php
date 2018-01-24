<?php 
session_start();
include 'config/connection.php';


$id_topic = $_GET['id'];

$_SESSION["id_topic"] =  $_GET['id'];

$sql = "SELECT * FROM topics, users WHERE topics.author = users.id_user AND topics.id_topic = '$id_topic'";

$result = mysqli_query($conn, $sql);

$data = mysqli_fetch_assoc($result);

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Forum</title>

	<!-- Bootstrap CSS -->
	<!-- Bootstrap core CSS -->
	<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="assets/style.css" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="assets/style.css"> -->
	<script src="assets/jquery/jquery-3.2.0.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.css">
</head>
<body>

	<header>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<div class="container">
				<a class="navbar-brand" href="#">Forum</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
						
					</ul>
					
				</div>
			</div>
		</nav>
	</header>

	<section>
		<div class="container">
			<div class="align-content-center" align="center">
				<h2 class="h2 align-self-center display-4 font-weight-normal">Diskusi</h2>
			</div>

			<div class="card" style="min-height: 600px;">
				<div class="card-header">
					<div class="row">
						<div class="col-md-9">
							<h3 class="h3"><?php echo $data["title"]; ?></h3>
						</div>
						<div class="col-md-3">
							<label class="text-muted m-0">Dibuat Oleh <?php echo $data["user_name"]; ?></label><br>
							<label class="text-muted m-0">Pada <?php echo $data["created_on"]; ?></label>
						</div>
					</div>
				</div>
				<div class="card-block">
					<div class="ml-3 " align="center">
						<label class="m-0 mt-2">Deskripsi</label><br>
						<small class="text-info"><?php echo $data["desc"]; ?></small>
					</div>
					<div class="mt-2 border rounded">
						<div id="comments" style="max-height: 400px;">
							<div id="comment-content" class="pre-scrollable" style="height: 400px;" >
								
								

							</div>
						</div>
					</div>

					<div class="m-4">
						<div class="row">
							<div class="col-md-6">
								<form action="controll/add_comment.php" method="POST" class="form-horizontal" role="form">
									<div class="form-group">
										<legend>Komentar</legend>
									</div>
									<input type="text" name="id_topic" hidden="" value="<?php echo $data["id_topic"]; ?>">
									<div class="form-group">
										<textarea required="" class="form-control" name="comment" id="comment" placeholder="Komentar"></textarea>
									</div>


									<div class="form-group">
										<div class="">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		

	</section>
	<footer class="py-3 bg-dark mt-2">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; Forum 2018</p>
		</div>
		<!-- /.container -->
	</footer>


	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/jquery/jquery-3.2.0.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<script type="text/javascript">
		
		
	</script>

	<script type="text/javascript" src="p_topic.js"></script>
</body>
</html>