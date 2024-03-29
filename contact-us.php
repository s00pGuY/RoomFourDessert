<?php 
$page_title = "Contact us - Room Four Dessert";
$page_desc = "Want to know more about us? Let's get in touch, there are many ways to contact us, either by phone or by email. Find out more on ways to contact us.";
$page_keywords = "Room Four Dessert, Room 4 Dessert, Room 4, Dessert, Dessert Bolton, Dessert catering, Event catering, Room Four Dessert contact details, Contact details";
$scripts = 'src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBisDclpL_8JqQMcYsovWCBOFWH1kKursk&libraries=places&callback=initMap" async defer';
include_once("header.php");
?>

		<main id="content" role="main">
			<section class="intro contact-page flex hero">
				<div class="wrapper">
					<h1>Contact us</h1>
				</div>
			</section>
			<section class="contact">
				<div class="wrapper">
					<h2>Send us a message</h2>
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
			<section class="map">
				<div class="map-wrapper" id="map"></div>
			</section>
		</main>

<?php include_once("footer.php"); ?>