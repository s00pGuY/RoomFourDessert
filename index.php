<?php 
$page_title = 'Room Four Dessert - Home';
$page_desc = '';
$page_keywords = '';
include_once("header.php");
?>

		<main id="content" role="main">	
			<section class="intro home flex hero">
				<div class="wrapper">
					<p>No matter what you've eaten, there is always </p>
					<h1>Room Four Dessert</h1>
				</div>
			</section>
			<section class="about">
				<div class="wrapper flex">
					<div class="split">
						<h2>About us</h2>
						<p>Established in 2013, we have secured ourselves firmly on the map as Bolton's premier dessert house.</p>
						<p>Whet your appetite with our extensive menu and visit us to see what extras are on offer in our evolving display fridge. We can assure you that you will be spoilt for choice.</p>
						<p>We offer something for every dessert aficionado alongside a finely honed breakfast and lunch menu to offer something to precede the most important part of a meal, anytime of the day.</p>
					</div>
					<div class="split">
						<img src="assets/images/bg-images/inside.jpg" width="400" height="267" alt="">
					</div>
				</div>
			</section>
			<section class="food flex hero">
				<div class="wrapper flex">
					<div class="split">
						<h2>Our food</h2>
						<div class="menu">
							<h3>Our menus</h3>
							<p>It’s easy to decide you want to eat out. It's harder to find somewhere that'll be able to satisfy your cravings. Our menu will keep you coming back for more. Do remember to leave Room Four Dessert though!</p>
							<a href="menu.php" class="btn">View Menu</a>
						</div>
						<div class="movenpick">
							<h3>Movenpick ice cream</h3>
							<p>We are proud to be official stockists of this luxury gourmet ice cream which is a multiple recipient of the "Cool Brands Award".</p>
							<p>We serve only Movenpick with all of our desserts, guaranteeing you the very best quality ice cream with every indulgent Room Four Dessert moment</p>
						</div>
						<div class="event-catering">
							<h3>Event catering</h3>
							<p>Let us do the hard work, impress your guests with a stylish and tasty winning combination. Catering fit for any occasion. You can tailor it to however specific your requirments/tastes.</p>
							<a href="event-catering.php" class="btn">See more</a>
						</div>
					</div>
				</div>
			</section>
			<section class="img-gallery">
				<div class="wrapper flex">
					<div class="split">
						<h2>Gallery</h2>
						<p>Send us your pictures by email, or via our social media pages to feature on the gallery page. Every month, the featured picture will win a prize.</p>
						<a href="gallery.php" class="btn">View gallery</a>
					</div>
					<div class="split flex">
					<!-- recommended image aspect ratio - wider than 1.2 -->
						<?php
							$dir = "assets/images/gallery/";
							$imgs = glob($dir . "*.{jpg,gif,png,jpeg,JPG,GIF,PNG,JPEG}", GLOB_BRACE);
							shuffle($imgs);

							for($i = 0; $i < 4; $i++) {
								list($width, $height) = getimagesize($imgs[$i]);
								echo '<div class="img-wrapper flex"><img src="' . $imgs[$i] . '" width="' . $width . '" height="' . $height . '" alt=""></div>
							';
							}
						?>
					</div>
				</div>
			</section>
			<section class="contact flex hero">
				<div class="wrapper">
					<h2>Contact Us</h2>
					<form method="POST" action="https://formspree.io/info@roomfourdessert.co.uk" id="contact-form">
						<p>Note: Fields marked with * are required</p>
						<p>
							<label for="name">Name*</label>
							<input type="text" name="Name" id="name" class="formInput">
						</p>
						<p>
							<label for="email">Email*</label>
							<input type="email" name="Email" id="email" class="formInput">
						</p>
						<p>
							<label for="phone">Telephone</label>
							<input type="text" name="Phone" id="phone" class="formInput">
						</p>
						<p>
							<label for="msg">Message*</label>
							<textarea name="Message" id="msg" class="formInput"></textarea>
						</p>
						<p>
							<input type="submit" value="Send" class="btn">
						</p>
					</form>
				</div>
			</section>
		</main>

<?php include_once("footer.php"); ?>