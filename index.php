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
				<h2 class="h2 align-self-center display-4 font-weight-normal">Forum</h2>
			</div>

			<div class="card" style="min-height: 600px;">
				<div class="card-header">
					<div class="">
						<a href="#" onclick="modal()" class="btn btn-info text-white" ><i class="fa fa-plus"></i> Topik Baru</a>
					</div>
				</div>
				<div class="card-block">
					<div class="m-4" id="topic-content">
						
					</div>
				</div>
			</div>
		</div>	
		<div class="modal fade" id="modal-1">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Topik Baru</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>
						
					</div>
					<div class="modal-body">
						<form action="controll/add_topic.php" method="POST" role="form">
							<div class="form-group">
								<label for="">Nama Topik</label>
								<input required="" type="text" class="form-control" id="" placeholder="Nama Topik" name="nama">
							</div>
							<div class="form-group">
								<label for="">Deskripsi</label>
								<textarea required="" type="text" class="form-control" id="" placeholder="Deskripsi" name="deskripsi"></textarea>
							</div>

							<button type="submit" class="btn btn-primary">Simpan</button>
						</form>

					</div>

				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

	</section>
	<footer class="py-3 bg-dark mt-2 ">
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

	<script type="text/javascript" src="p_index.js"></script>
</body>
</html>