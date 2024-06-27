<?php
session_start();

if (!isset($_SESSION['loggedIN'])) {
	header('Location: login.php');
	exit();
}
?>

<html>

<head>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>

	<header class="p-3 bg-dark text-white">
		<div class="container">
			<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
				<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
					<svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
						<use xlink:href="#bootstrap"></use>
					</svg>
				</a>

				<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
					<li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
					<li><a href="products.php" class="nav-link px-2 text-white">Products</a></li>
					<li><a href="orders.php" class="nav-link px-2 text-white">Invoice</a></li>
					<li><a href="users.php" class="nav-link px-2 text-white">Users</a></li>
					<li><a href="logout.php" class="btn btn-danger">Log Out</a></li>
				</ul>

				<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
					<input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
				</form>

				<div class="text-end">
					<button type="button" class="btn btn-outline-light me-2">Search</button>
				</div>
			</div>
		</div>
	</header>

	<div class="container" style="padding-top:5%">
		<div class="row">
			<div class="col-md-6">
				<h5> Top grossing items </h5>
				<canvas id="myChart" style="width:100%;"></canvas>
			</div>

			<div class="col-md-6">
				<h5> User signups per month</h5>
				<canvas id="UserSignups" style="width:100%;"></canvas>
			</div>
		</div>

		<div class="row" style="padding-top:5%;">
			<div class="col-md-6">
				<h5> Gross income per month </h5>
				<canvas id="MonthlySales" style="width:100%;"></canvas>
			</div>

			<div class="col-md-6">
				<h5> Orders Per Month</h5>
				<canvas id="OrdersMonthly" style="width:100%;"></canvas>
			</div>
		</div>
	</div>
</body>

<script src="javascript/homepageanayltics.js"></script>

</script>

</html>