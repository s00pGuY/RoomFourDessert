<?php 
$page_title = 'Gallery - Room Four Dessert';
$page_desc = '';
$page_keywords = '';
include_once("header.php");
?>

		<main id="content" role="main">
			<section class="intro gallery half-scn">
				<h1>Gallery</h1>
			</section>
			<section class="images">
<?php 
$dir = "assets/images/gallery/";
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