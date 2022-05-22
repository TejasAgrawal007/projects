<?php include "header.php"; ?>
	<!-- Start header -->
	<img src="images/banner_about_us.jpg" width="100%">
	<!-- End header -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 text-center">
					<div class="inner-column">
						<h1>Welcome To <span> FOOD SPARK  Restuarent</span></h1>
						<h4>Little Story</h4>
                                                  <P>  THESE RESTAURENT OWNER IS FOUR GIRLS, AKASHATA ANDHARE, MAYURI REWATKAR, RANI KORDE, RAJANI PATLE..</P>
						<p> Restaurants in NAGPUR, NAGPUR Restaurants, MAHARASHTRIAN  restaurants, Best MAHARASHTRIAN Restaurants, West NAGPUR restaurants, MAHARASHTRIAN Restaurants in NAGPUR, NAGPUR near me, NAGPURestaurants in MAHARASHTRA </p>
						<p> DELICIOUS Restaurants in NAGPUR, Quick Bites in NAGPUR, Quick Bites near me, Quick Bites in West NAGPUR, Quick Bites in MAHARASTRA, in NAGPUR, near me, in West NAGPUR, in MAHARASHTRA, in NAGPUR, near me, in West NAGPUR, in MAHARASHTRA, New Year Parties in NAGPUR, Christmas' Special in NAGPUR, </p>
						<!--<a class="btn btn-lg btn-circle btn-outline-new-white" href="#"> Comment</a> -->
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<img src="images/images.jpg" style="height: 450px; width: 100%" class="img-fluid">
				</div>
				<div class="col-md-12">
					<div class="inner-pt">
						<p> Making way for a hearty meal is FOOD SPARK Restaurant in NAGPUR. This place is synonymous with delicious food that can satiate all food cravings.
 It is home to some of the most appreciated cuisines. So as to be able to cater to a large number of diners, it occupies a favourable location at MAHARASHTRA. Opposite Skoda Workshop,Ring Road,is where one can visit the venue. Courtesy to this strategic location, foodies in and around the neighborhood can walk in to this eating house conveniently without facing any hassles related to commuting to this part of the city. It is one of the most sought after Restaurants . This is a one of the renowned Restaurants in NAGPUR.
 </p>
						<p>FOOD SPARK Restaurant at NAGPUR makes sure one has a great food experience by offering highly palatable 
food. The restaurant welcomes guests from 11:00-19:00 - 15:00-00:00 allowing diners to relish a scrumptious meal between the functional hours.The price
 range of the food at the restaurant ranges from 1. This listing is also listed in Restaurants, FOOD SPARK Restaurants, FOOD SPARK Restaurants (Below Rs 500),   FOOD SPARK Restaurants.
 </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
				
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">KathiyaWadi</a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">RajsThani</</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Rise</a>

						<a class="nav-link" id="v-pills-tava-tab" data-toggle="pill" href="#v-pills-tava" role="tab" aria-controls="v-pills-tava" aria-selected="false">tava</a>
					</div>
				</div>
				
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
								<?php include "connect.php";
								$s = mysqli_query($con,"select * from menu");
								while($r = mysqli_fetch_array($s))
								{	
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<p>Rs <?php echo $r['price']; ?> /-</p>
											<h5 align="center">
									<?php if(isset($_SESSION['uid']))
									{
									?>
											<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a></h5>

									<?php
									}
									else
									{
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
								$s = mysqli_query($con,"select * from menu where category='kathiyawadi'");
								while($r = mysqli_fetch_array($s))
								{	
								?>

								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<h5>Rs <?php echo $r['price']; ?> /-</h5>
											<h5 align="center">
												<?php if(isset($_SESSION['uid']))
									{
									?>
											<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a></h5>

									<?php
									}
									else
									{
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
								$s = mysqli_query($con,"select * from menu where category='rajsthani'");
								while($r = mysqli_fetch_array($s))
								{	
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<h5>Rs <?php echo $r['price']; ?> /-</h5>
											<h5 align="center">
												<?php if(isset($_SESSION['uid']))
									{
									?>
											<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a></h5>

									<?php
									}
									else
									{
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
					</div>
				</div>
			</div>
		</div>
	</div>								

	<!-- End Menu -->
	
	<?php include "footer.php" ; ?>