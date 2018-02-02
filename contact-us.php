<?php 
$page_title = 'Contact us - Room Four Dessert';
$page_desc = '';
$page_keywords = '';
include_once("header.php");
?>

		<main id="content" role="main">
			<section class="intro contact-us full-scn">
				<h1>Contact us</h1>
			</section>
			<section class="contact-form">
				<h2>Send us a message</h2>
				<form action="">
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
			</section>
			<section class="find-us">
				<h2>Find us</h2>
				<!-- Interactive Map of location -->
			</section>
		</main>

<?php include_once("footer.php"); ?>