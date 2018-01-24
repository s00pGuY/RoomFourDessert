<?php 
$page_title = 'Gallery - Room Four Dessert';
$page_desc = '';
$page_keywords = '';
include_once("header.php");
?>

		<main id="content" role="main">
			<section class="intro gallery">
				<h1>Gallery</h1>
			</section>
			<section class="images">
				<?php 
				$dir = "assets/images/gallery/";
				$imgs = glob($dir . "*.{jpg,gif,png,jpeg}", GLOB_BRACE);
				
				foreach($imgs as $img) {
					echo '<img src="' . $img . '" alt=""><br>';
				}
				?>
			</section>
		</main>

<?php include_once("footer.php"); ?>