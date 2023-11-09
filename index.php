<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">

		<?php include 'includes/navbar.php'; ?>

		<div class="content-wrapper">
			<div class="container">

				<!-- Main content -->
				<section class="content" >
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="Welcomepage" style="height: 250px; 
								display: flex; 
								flex-direction: column; 
								justify-content: center; 
								align-items: center; 
								height:300px;
								">
								<h1 style="font-weight: 800; margin-top: 300px">Welcome to Our Ecommerce Website "Swipe"</h1>
								<h3>Swipe is not just a place to buy books; it's an immersive online bookstore
									experience
									designed for book enthusiasts who seek more than just a transaction. Our platform is
									a virtual haven where literature lovers can seamlessly browse through an extensive
									collection of books spanning various genres. From timeless classics to contemporary
									bestsellers, "Swipe" curates a diverse selection to cater to every reader's taste.
									The sleek and user-friendly interface makes navigating through the digital shelves a
									breeze, allowing users to discover new titles and authors effortlessly. Whether
									you're a fiction fanatic, a non-fiction connoisseur, or someone in search of
									educational resources, "Swipe" is your go-to destination. Embrace the joy of reading
									with our intuitive platform that combines the convenience of e-commerce with the
									charm of a traditional bookstore. Welcome to "Swipe," where every click opens the
									door to a world of literary wonders.</h3>
							</div>
						</div>

					</div>
				<br>
					<?php
					if (isset($_SESSION['error'])) {
						echo "
	        					<div class='alert alert-danger'>
	        						" . $_SESSION['error'] . "
	        					</div>
	        				";
						unset($_SESSION['error']);
					}
					?>
					<div class="row" style="margin-top: 300px; ">
						<div class="col-sm-12 text-center">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
									<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
								</ol>
								<div class="carousel-inner">
									<div class="item active">
										<img src="images/HomepageCover.jpg" alt="First slide">
									</div>
									<div class="item">
										<img src="images/HomepageCover1.jpg" alt="First slide">
									</div>
									<div class="item">
										<img src="images/HomepageCover2.jpg" alt="First slide">
									</div>
								</div>
								<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
									<span class="fa fa-angle-left"></span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
									<span class="fa fa-angle-right"></span>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<?php include 'includes/sidebar.php'; ?>
						</div>
					</div>
				</section>

			</div>
		</div>

		<?php include 'includes/footer.php'; ?>
	</div>

	<?php include 'includes/scripts.php'; ?>
</body>

</html>