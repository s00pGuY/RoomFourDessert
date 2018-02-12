document.querySelector(".hamburger").addEventListener("click", function() {
	document.getElementById("nav").classList.toggle("nav-open");
});

var findMenu = document.getElementsByClassName("sel-menu");

if (findMenu.length > 0) {
	var btn = findMenu[0].querySelectorAll(".btn");
	for (var i = 0; i < btn.length; i++) {
		addEvent(i);
	}
}

function addEvent(num) {
	document.getElementById('menu' + num).addEventListener('click', function() {
		console.log(num);
	});
}