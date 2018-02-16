<?php 
$page_title = 'Menu - Room Four Dessert';
$page_desc = '';
$page_keywords = '';
include_once("header.php");
?>

		<main id="content" role="main">
			<section class="intro menus flex hero">
				<div class="wrapper">
					<h1>Our menu</h1>
				</div>
			</section>
			<section class="pdf-menu">
				<div class="wrapper">
					<div class="split">
						<h2>Download our menu</h2>
						<p>Download and save for future reference so you can either tantalize your taste buds or place your order in advance. We will have your order whether you’re eating in or taking out.  Also look out for specials and new items which may not be on the menu as of yet.</p>
						<a href="assets/pdf/menu.pdf" class="btn">Open menu</a>
					</div>
				</div>
			</section>
			<section class="js-menu hero">
				<div class="wrapper flex">
					<div class="split sel-menu">
						<h2>View menu</h2>
						<p>We’re not just about desserts – take a look at the full menu and see what we’re all about.</p>
						<button class="btn" id="menu0" name="breakfast.png">Breakfast</button>
						<button class="btn" id="menu1" name="lunch.png">Lunch</button>
						<button class="btn" id="menu2" name="desserts.png">Desserts</button>
						<button class="btn" id="menu3" name="ice-cream-sundaes.png">Ice Cream & more</button>
						<button class="btn" id="menu4" name="waffles-crepes-pancakes.png">Waffles & more</button>
						<button class="btn" id="menu5" name="cold-drinks.png">Cold Drinks</button>
						<button class="btn" id="menu6" name="hot-drinks.png">Hot Drinks</button>
						<?php 
							$dir = "assets/images/menu/offer";
							$offers = glob($dir . "*.{jpg,gif,png,jpeg,JPG,GIF,PNG,JPEG}", GLOB_BRACE);
					
							$count = 6;
							foreach ($offers as $offer) {
								$count++;
								if (file_exists($offer)) {
									echo '<button class="btn" id="menu' . $count . '" name="' . str_replace($dir, "offer", $offer) . '">Special offer ' . ($count - 6) . '</button>
									';
								}
							}
						?>
					</div>
					<div class="split">
						<img src="assets/images/menu/desserts.png" id="menu-img" width="738" height="1044">
					</div>
				</div>
			</section>
		</main>

<?php include_once("footer.php"); ?>