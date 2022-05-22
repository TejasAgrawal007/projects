<?php session_start(); ?>
<?php include "header.php"; ?>
<!-- Start slides -->
<br>
<div id="slides" class="cover-slides">
	<ul class="slides-container">
		<li class="text-left">
			<img src="images/267.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Welcome To <br> FOOD SPARK Restaurant</strong></h1>
						<p class="m-b-40">Have It Your Way, <br>
							World's Greatest Hamburgers</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Food Menu</a></p>
					</div>
				</div>
			</div>
		</li>
		<li class="text-left">
			<img src="images/1-kathiyawadi-restaurants-1-ki1aq.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>We like <br> to eat well.</strong></h1>
						<p class="m-b-40"> FOOD SPARK Restaurant is serving a Authentic Delicious Food.And Restaurant's
							<br>
							Ambience is a very good with well trained staff with open kitchen concept...
						</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Contact Us</a></p>
					</div>
				</div>
			</div>
		</li>
		<li class="text-left">
			<img src="images/DSC_2734.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Welcome To <br> Yamifood with Food Spark</strong></h1>
						<p class="m-b-40">Deliciousness jumping into the mouth<br>
							We know our food..</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Review</a></p>
					</div>
				</div>
			</div>
		</li>
	</ul>
	<div class="slides-navigation">
		<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
		<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
	</div>
</div>
<!-- End slides -->

<!-- Start About -->
<div class="about-section-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 text-center">
				<div class="inner-column">
					<h1>Welcome To <span> food spark Restaurant</span></h1>
					<h4>Little Story</h4>
					<p>Restaurent in Nagpur, Maharashtra Restaurants, Delicious food spark restaurants, Best Nagpur restaurants, maharashtrar restaurants, food stack Restaurants in Nagpur, if you order from these restaurent definetly you are satisfied from food. Restaurants in Nagpur, FOOD STACK Restaurants in Nagpur,
					</p>
					<p>Quick Bites in Nagpur, Quick Bites near me, Quick Bites in Nagpur, Quick Bites in Nagpur, Maharashtra, in nagpur you visited many resturent but its a special restaurent for nagpur customers, near me, in maharashtra New Year Parties in Nagpur, Christmas' Special in Nagpur,</p>
					<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Contact Us</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<img src="images/images.jpg" width="200%" height="200%" class="img-fluid">
			</div>
		</div>
	</div>
</div>
<!-- End About -->

<!-- Start QT -->
<div class="qt-box qt-background">
	<div class="container">
		<div class="row">
			<div class="col-md-8 ml-auto mr-auto text-center">
				<p class="lead ">
					" If you're not the one cooking, stay out of the way and compliment the chef. "
				</p>
				<span class="lead"> FOOD SPARK Restaurent</span>
			</div>
		</div>
	</div>
</div>
<!-- End QT -->

<!-- Start Menu -->
<div class="menu-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Special Menu</h2>
					<p>Enjoy the new Tasty</p>
				</div>
			</div>
		</div>

		<div class="row inner-menu-box">
			<div class="col-3">
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
					<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">KathiyaWadi</a>
					<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">RajsThani</a>
					<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Rise</a>

					<a class="nav-link" id="v-pills-tava-tab" data-toggle="pill" href="#v-pills-tava" role="tab" aria-controls="v-pills-tava" aria-selected="false">tava</a>
				</div>
			</div>

			<div class="col-9">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
						<div class="row">
							<?php include "connect.php";
							$s = mysqli_query($con, "select * from menu");
							while ($r = mysqli_fetch_array($s)) {
							?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<p>Rs <?php echo $r['price']; ?> /-</p>
											<h5 align="center">
												<?php if (isset($_SESSION['uid'])) {
												?>
													<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>&category=<?php echo $r['category']; ?>&sub_cat=<?php echo $r['sub_cat']; ?>">Add Cart</a>
											</h5>

										<?php
												} else {
										?>
											<a href="login.php">Add Cart</a>
										<?php } ?>

										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>


					<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
						<div class="row">


							<?php include "connect.php";
							$s = mysqli_query($con, "select * from menu where category='kathiyawadi'");
							while ($r = mysqli_fetch_array($s)) {
							?>

								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?><br><?php echo $r['category']; ?></p>
											<h5>Rs <?php echo $r['price']; ?> /-</h5>
											<h5 align="center">
												<?php if (isset($_SESSION['uid'])) {
												?>
													<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>&category=<?php echo $r['category']; ?>&sub_cat=<?php echo $r['sub_cat']; ?>">Add Cart</a>
											</h5>

										<?php
												} else {
										?>
											<a href="login.php">Add Cart</a>
										<?php } ?>




										</h5>
										</div>
									</div>
								</div>
							<?php } ?>


						</div>

					</div>
					<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
						<div class="row">

							<?php include "connect.php";
							$s = mysqli_query($con, "select * from menu where category='rajsthani'");
							while ($r = mysqli_fetch_array($s)) {
							?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<h5>Rs <?php echo $r['price']; ?> /-</h5>
											<h5 align="center">
												<?php if (isset($_SESSION['uid'])) {
												?>
													<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>&category=<?php echo $r['category']; ?>&sub_cat=<?php echo $r['sub_cat']; ?>">Add Cart</a>
											</h5>

										<?php
												} else {
										?>
											<a href="login.php">Add Cart</a>
										<?php } ?>


										</h5>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
						<div class="row">
							<?php include "connect.php";
							$s = mysqli_query($con, "select * from menu where category='rise'");
							while ($r = mysqli_fetch_array($s)) {
							?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<h5>Rs <?php echo $r['price']; ?> /-</h5>
											<h5 align="center">
												<?php if (isset($_SESSION['uid'])) {
												?>
													<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>&category=<?php echo $r['category']; ?>&sub_cat=<?php echo $r['sub_cat']; ?>">Add Cart</a>
											</h5>

										<?php
												} else {
										?>
											<a href="login.php">Add Cart</a>
										<?php } ?>


										</h5>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>


					<div class="tab-pane fade" id="v-pills-tava" role="tabpanel" aria-labelledby="v-pills-tava-tab">
						<div class="row">
							<?php include "connect.php";
							$s = mysqli_query($con, "select * from menu where category='tava'");
							while ($r = mysqli_fetch_array($s)) {
							?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<h5>Rs <?php echo $r['price']; ?> /-</h5>
											<h5 align="center"><?php if (isset($_SESSION['uid'])) {
																?>
													<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>&category=<?php echo $r['category']; ?>&sub_cat=<?php echo $r['sub_cat']; ?>">Add Cart</a>
											</h5>

										<?php
																} else {
										?>
											<a href="login.php">Add Cart</a>
										<?php } ?></h5>
										</div>
									</div>
								</div>
							<?php } ?>



						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- End Menu -->

<!-- Start Gallery -->
<div class="gallery-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Gallery</h2>
					<p>Delicious food Pictures for Maher Restaurent Listed Here </p>
				</div>
			</div>
		</div>
		<div class="tz-gallery">
			<div class="row">

				<?php
				include "connect.php";
				$s = mysqli_query($con, "select * from gallery order by id desc limit 6");
				while ($r = mysqli_fetch_array($s)) {
				?>
					<div class="col-sm-12 col-md-4 col-lg-4">

						<a class="lightbox" href="<?php echo "admin/" . $r['image']; ?>">
							<img class="img-fluid" src="<?php echo "admin/" . $r['image']; ?>" alt="Gallery Images" style="width: 350px; height: 250px;">


						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- End Gallery -->

<!-- Start Customer Reviews -->
<div class="customer-reviews-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Customer Reviews</h2>
					<p>"if you build a greater experience, customer tell each other about that, word of mouth is very powerful"</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 mr-auto ml-auto text-center">
				<div id="reviews" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner mt-4">
						<?php include "connect.php";
						$s = mysqli_query($con, "select * from review  limit 4");
						while ($r = mysqli_fetch_array($s)) {
						?>
							<div class="carousel-item text-center ">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">
										<?php echo $r['name']; ?>
									</strong></h5>
								<h6 class="text-dark m-0">Review : <?php echo $r['review']; ?></h6>
								<p class="m-0 pt-3">
									<?php echo $r['description']; ?>
								</p>
							</div>
						<?php } ?>
						<div class="carousel-item text-center active">
							<div class="img-box p-1 border rounded-circle m-auto">
								<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">


							</div>
							<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
								<i class="fa fa-angle-left" aria-hidden="true"></i>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Customer Reviews -->
		<?php include "footer.php"; ?>