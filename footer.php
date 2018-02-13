		<footer role="contentinfo">
			<div class="info">
				<ul class="flex">
					<li class="location">
						<h2>Find us</h2>
						<a href="https://www.google.com/maps/search/?api=1&query=Room%20Four%20Dessert,%20Bolton" class="location-pin">
							<img src="assets/images/location.svg" width="28" height="28" alt="">
							<span>Google maps</span>
						</a>
						<p>Room Four Dessert<br>114 Deane Road<br>Bolton<br>BL3 5DL</p>
						<p>Phone: <a href="tel:+441204214257">+44 1204 214257</a></p>
						<p>Email: <a href="mailto:info@roomfourdessert.co.uk">info@roomfourdessert.co.uk</a></p>
					</li>
					<li class="hours">
						<h2>Our business hours</h2>
						<ul>
							<li><p>Monday 	<span>09:00 - 23:00</span></p></li>
							<li><p>Tuesday 	<span>09:00 - 23:00</span></p></li>
							<li><p>Wednesday<span>09:00 - 23:00</span></p></li>
							<li><p>Thursday <span>09:00 - 23:00</span></p></li>
							<li><p>Friday 	<span>09:00 - 00:00</span></p></li>
							<li><p>Saturday <span>10:00 - 00:00</span></p></li>
							<li><p>Sunday 	<span>10:00 - 23:00</span></p></li>
						</ul>
					</li>
					<li class="awards">
						<h2>Recent awards</h2>
						<a href="https://www.thebestof.co.uk/local/bolton/business-guide/feature/room-four-dessert/">
							<img src="assets/images/tbo-award.png" width="150" height="150" alt="">
						</a>
					</li>
					<li class="social">
						<h2>Get social with us</h2>
						<a href="https://www.facebook.com/roomfourdessert">
							<img src="assets/images/facebook-logo.svg" width="36" height="36" alt="">
							<span>/RoomFourDessert</span>
						</a>
						<a href="https://www.instagram.com/roomfourdessert/">
							<img src="assets/images/instagram-logo.svg" width="36" height="36" alt="">
							<span>/RoomFourDessert</span>
						</a>
						<a href="https://twitter.com/RoomFourDessert">
							<img src="assets/images/twitter-logo.svg" width="36" height="36" alt="">
							<span>@RoomFourDessert</span>
						</a>
					</li>
				</ul>
			</div>
			<hr>
			<div class="disclaimer">
				<p>Copyright&copy; Room Four Dessert <?php echo gmdate("Y"); ?>. All rights reserved.</p>
				<p>Developed by <a href="http://www.umeshpatel.co.uk">Umesh Patel</a></p>
			</div>
		</footer>
	</div>
<script src="assets/js/script.js"></script>
<?php 
if (isset($scripts)) {
	echo '<script ' . $scripts . '></script>';
}
?>
</body>
</html>