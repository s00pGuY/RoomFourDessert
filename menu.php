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
					<h2>Download our menu</h2>
				</div>
			</section>
			<section class="ajax-menu hero">
				<div class="wrapper flex">
					<div class="split sel-menu">
						<h2>View menu</h2>
						<button class="btn" id="menu0" name="breakfast">Breakfast</button>
						<button class="btn" id="menu1" name="lunch">Lunch</button>
						<button class="btn" id="menu2" name="desserts">Desserts</button>
						<button class="btn" id="menu3" name="ice-cream-sundaes">Ice Cream & Sundaes</button>
						<button class="btn" id="menu4" name="waffles-crepes-pancakes">Waffles, Crepes & Pancakes</button>
						<button class="btn" id="menu5" name="cold-drinks">Cold Drinks</button>
						<button class="btn" id="menu6" name="hot-drinks">Hot Drinks</button>
					</div>
					<div class="split">
						<!-- Menu -->
					</div>
				</div>
			</section>
		</main>

<?php include_once("footer.php"); ?>