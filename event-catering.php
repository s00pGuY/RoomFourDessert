<?php 
$page_title = 'Event catering - Room Four Dessert';
$page_desc = '';
$page_keywords = '';
include_once("header.php");
?>

		<main id="content" role="main">
			<section class="intro events half-scn">
				<h1>Event catering</h1>
			</section>
			<section class="events-details">
				<h2>Room Four Events</h2>
				<p>No matter what event you're hosting, be it a wedding, birthday party, corporate function, or just a good old fashioned get together, the most memorable aspect will be the desserts you treat your guests with.</p>
				<p>Our Room Four Events team have it all covered. We can come up with a special menu for your event, that will be designed with your guests in mind. From a full range of miniatures, ensuring your guests are able to enjoy a vast array of desserts, to our waffle station, we will design a dessert experience to cater for your every requirement.</p> 
				<p>We can arrange a consultation, which includes tasters, and agree a menu with you to suit your tastes, budget and theme.</p>
				<p>We offer a bespoke dessert table service, providing you with an elegant display to wow your guests.</p>
				<p>Alternatively we can provide the desserts for you to serve your guests yourself. However you proceed, we will ensure you enjoy the experience as much as your guests.</p>
				<p>If you would like someone to get in touch with you about an event you'd like catering for, please click on the events button below to send us an email and someone from our events team will contact you as soon as possible.</p>
				<a href="mailto:events@roomfourdessert.co.uk" class="btn">Email us</a>
			</section>
			<section class="showcase">
				<h2>Events</h2>
<?php 
$dir = "assets/images/events/";
$imgs = glob($dir . "*.{jpg,gif,png,jpeg,JPG,GIF,PNG,JPEG}", GLOB_BRACE);
$indent = '				'; //Allows readable code when viewing scource
				
foreach($imgs as $img) {
	echo $indent . '<div class="img-flex"><img src="' . $img . '" alt=""></div>
';
}
?>
			</section>
		</main>

<?php include_once("footer.php"); ?>