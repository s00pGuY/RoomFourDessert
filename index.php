<?php 
$page_title = 'Room Four Dessert - Home';
$page_desc = '';
$page_keywords = '';
include_once("header.php");
?>

		<main id="content" role="main">	
			<section class="intro home full-scn">
				<div class="slogan flex-wrapper">
					<p>No matter what you've eaten, there is always </p>
					<h1>Room Four Dessert</h1>
				</div>
			</section>
			<section class="about">
				<h2>About us</h2>
				<p>Established in 2013, we have secured ourselves firmly on the map as Bolton's premier dessert house.</p>
				<p>Whet your appetite with our extensive menu and visit us to see what extras are on offer in our evolving display fridge. We can assure you that you will be spoilt for choice.</p>
				<p>We offer something for every dessert aficionado alongside a finely honed breakfast and lunch menu to offer something to precede the most important part of a meal, anytime of the day.</p>
				<img src="assets/images/bg-images/showbox.png" width="455" height="300" alt=""> 
			</section>
			<section class="food full-scn">
				<div class="flex-wrapper">
					<h2>Our food</h2>
					<div class="menu">
						<h3>Visiting us</h3>
						<p>It’s easy to decide you want to eat out. It's harder to find somewhere that'll be able to satisfy your cravings. Our menu will keep you coming back for more. Do remember to leave Room Four Dessert though!</p>
						<a href="menu.php" class="btn">View Menu</a>
					</div>
					<div class="catering">
						<h3>Event catering</h3>
						<p>Let us do the hard work, impress your guests with a stylish and tasty winning combination. Catering fit for any occasion. You can tailor it to however specific your requirments/tastes.</p>
						<a href="event-catering.php" class="btn">See more</a>
					</div>
				</div>
			</section>
			<section class="img-gallery">
				<div class="flex-wrapper">
					<h2>Gallery</h2>
					<p>Send us your pictures by email, or via our social media pages to feature on the gallery page. Every month, the featured picture will win a prize.</p>
					<a href="gallery.php" class="btn">View gallery</a>
					<div class="img-showcase">
<?php 
$dir = "assets/images/gallery/";
$imgs = glob($dir . "*.{jpg,gif,png,jpeg,JPG,GIF,PNG,JPEG}", GLOB_BRACE);
shuffle($imgs);
$indent = '						'; //Allows readable code when viewing scource

for($i = 0; $i < 4; $i++) {
	echo $indent . '<div class="img-flex"><img src="' . $imgs[$i] . '" alt=""></div>
';
}
?>
					</div>
				</div>
			</section>
			<section class="contact full-scn">
				<div class="flex-wrapper">
					<h2>Contact Us</h2>
					<form action="#">
						<p>
							<label for="name">Name</label>
							<input type="text" name="realname" id="name" class="formInput">
						</p>
						<p>
							<label for="email">Email</label>
							<input type="email" name="email" id="email" class="formInput">
						</p>
						<p>
							<label for="phone">Telephone</label>
							<input type="text" name="subject" id="phone" class="formInput">
						</p>
						<p>
							<label for="msg">Message</label>
							<textarea name="message" id="msg" class="formInput"></textarea>
						</p>
						<p>
							<input type="submit" value="Send" class="btn">
						</p>
					</form>
				</div>
			</section>
		</main>

<?php include_once("footer.php"); ?>