
/*MENU*/
/*Controls the menu slide in and out classes*/
/*
over = function(){
	$("#background").toggleClass("move");
	$("#content").toggleClass("move");
	$("#branding").toggleClass("move");
	$("#branding").toggleClass("static");
	$("#background").toggleClass("static");
	$("#content").toggleClass("static");
	$("#navbar").toggleClass("menu");	
}
*/

$( document ).ready(function() {
    var str = $('#subtext').text();
	str = str.toLowerCase().replace(/\b[A-Z]/g, function(letter) {
	    return letter.toLowerCase();
	});
	card();
});

/*GOOGLE MAPS*/

function initialize() {
	var mapCanvas = document.getElementById('map');
	var mapOptions = {
	  center: new google.maps.LatLng(40.177124, -75.106621),
	  zoom: 14,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(document.getElementById('map'), mapOptions);
	marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.177124, -75.106621)});
	infowindow = new google.maps.InfoWindow({content:'<strong>Reid Repairs</strong><br>2 South York Road<br>19040 Hatboro<br>'});
	google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
	infowindow.open(map,marker);
}

var pathname = window.location.pathname;
if(pathname == '/directions.php'){
	google.maps.event.addDomListener(window, 'load', initialize);
}

card = function(id){
	if(!id){
		$('.front').show();
		$('.back').hide();
	} else {
		//if this, then someone clicked... so we'll have to toggle the show/hide.
		//Do nothing for now - will engage when live
		if($('#' + id).find('.front').is(":visible")){
			$('#' + id).find('.front').hide();
			$('#' + id).find('.back').show();
		} else {
			$('#' + id).find('.front').show();
			$('#' + id).find('.back').hide();
		}

	}
}