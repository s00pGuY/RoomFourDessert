<?php 
$page_title = 'Gallery - Room Four Dessert';
$page_desc = '';
$page_keywords = '';
include_once("header.php");
?>

		<main id="content" role="main">
			<section class="intro img-page flex hero">
				<div class="wrapper">
					<h1>Gallery</h1>
				</div>
			</section>
			<section class="featured">
				<div class="wrapper flex">
					<div class="split">
						<h2>Send us pictures</h2>
						<p>Send us your pictures by email, or via our social media pages to feature on the gallery page. Every month, the featured picture will win a prize.</p>
					</div>
					<div class="split">
						<?php 
							$dir = "assets/images/gallery/featured";
							$imgs = glob($dir . ".{jpg,gif,png,jpeg,JPG,GIF,PNG,JPEG}", GLOB_BRACE);
					
							$count = 0;
							foreach ($imgs as $img) {
								if (file_exists($img) && $count === 0) {
									$count++;
									list($width, $height) = getimagesize($img);
									echo '<div class="img-wrapper flex"><img src="' . $img . '" width="' . $width . '" height="' . $height . '" alt=""></div>';
								}
							}
						?>
					</div>
				</div>
			</section>
			<section class="showcase image-gallery hero">
				<div class="wrapper flex">
					<?php
						$dir = "assets/images/gallery/";
						$imgs = glob($dir . "*.{jpg,gif,png,jpeg,JPG,GIF,PNG,JPEG}", GLOB_BRACE);
						shuffle($imgs);

						for($i = 0; $i < floor(count($imgs) / 3) * 3; $i++) {
							list($width, $height) = getimagesize($imgs[$i]);
							echo '<div class="img-wrapper flex"><img src="' . $imgs[$i] . '" width="' . $width . '" height="' . $height . '" alt=""></div>
						';
						}
					?>
				</div>
			</section>
		</main>

<?php include_once("footer.php"); ?>