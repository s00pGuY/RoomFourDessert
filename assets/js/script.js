document.querySelector(".hamburger").addEventListener("click", function() {
	document.getElementById("nav").classList.toggle("nav-open");
});

var findMenu = document.getElementsByClassName("sel-menu");

//Prevents executing on pages without the sel-menu class
if (findMenu.length > 0) {
	var btn = findMenu[0].querySelectorAll(".btn");
	
	//ES5 version of ES6 'let' statement
	for (var i = 0; i < btn.length; i++) {
		addEvent(i);
	}
}

function addEvent(num) {
	var current = document.getElementById('menu' + num);
	var img = document.getElementById('menu-img');
	current.addEventListener('click', function() {
		img.src = 'assets/images/menu/' + current.name + '.jpeg';
		img.width = img.naturalWidth;
		img.height = img.naturalHeight;
	});
}

function initMap() {
	var map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: 53.573659, lng: -2.440009},
		zoom: 17
	});
	
	var infowindow = new google.maps.InfoWindow();
	var service = new google.maps.places.PlacesService(map);
	
	service.getDetails({
		placeId: 'ChIJJYQkV66ne0gRi9_Kbfplyes'
	}, function(place, status) {
		if (status === google.maps.places.PlacesServiceStatus.OK) {
			var marker = new google.maps.Marker({
				map: map,
				position: place.geometry.location
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + 'Place ID: ' + place.place_id + '<br>' + place.formatted_address + '</div>');
				infowindow.open(map, this);
			});
		}
	});
}