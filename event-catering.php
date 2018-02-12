<?php 
$page_title = 'Event catering - Room Four Dessert';
$page_desc = '';
$page_keywords = '';
include_once("header.php");
?>

		<main id="content" role="main">
			<section class="intro catering flex hero">
				<div class="wrapper">
					<h1>Event catering</h1>
				</div>
			</section>
			<section class="events-details">
				<div class="wrapper flex">
					<div class="split">
						<h2>Room Four Events</h2>
						<p>No matter what event you're hosting, be it a wedding, birthday party, corporate function, or just a good old fashioned get together, the most memorable aspect will be the desserts you treat your guests with.<br>
						Our Room Four Events team have it all covered. We can come up with a special menu for your event, that will be designed with your guests in mind. From a full range of miniatures, ensuring your guests are able to enjoy a vast array of desserts, to our waffle station, we will design a dessert experience to cater for your every requirement.<br> 
						We can arrange a consultation, which includes tasters, and agree a menu with you to suit your tastes, budget and theme.<br>
						We offer a bespoke dessert table service, providing you with an elegant display to wow your guests.<br>
						Alternatively we can provide the desserts for you to serve your guests yourself. However you proceed, we will ensure you enjoy the experience as much as your guests.<br>
						If you would like someone to get in touch with you about an event you'd like catering for, please email events@roomfourdessert.co.uk and someone from our events team will contact you as soon as possible.</p>
						<a href="mailto:events@roomfourdessert.co.uk" class="btn">Email us</a>
					</div>
					<div class="split">
						<!-- img -->
					</div>
				</div>
			</section>
			<section class="showcase hero">
				<div class="wrapper">
					<?php
						$dir = "assets/images/events/";
						$imgs = glob($dir . "*.{jpg,gif,png,jpeg,JPG,GIF,PNG,JPEG}", GLOB_BRACE);
						shuffle($imgs);

						foreach($imgs as $img) {
							list($width, $height) = getimagesize($img);
							echo '<div class="img-wrapper flex"><img src="' . $img . '" width="' . $width . '" height="' . $height . '" alt=""></div>
						';
						}
					?>
				</div>
			</section>
		</main>

<?php include_once("footer.php"); ?>