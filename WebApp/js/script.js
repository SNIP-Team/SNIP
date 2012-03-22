/* Author:

*/
$(document).ready(function() {


	// Setup the Map (Leaflet)
	var map = new L.Map('map');

	//http://tile.openstreetmap.org/2/2/1.png
	var mapnik = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
	    maxZoom: 20
	});

	map.setView(new L.LatLng(51.489, -0.088), 10).addLayer(mapnik);
	
});