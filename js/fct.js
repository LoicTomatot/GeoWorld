function listePays(continent) {
	var param = '?Continent=' + continent;
	$('#liste').load('http://geoworld.fr/ #liste',{Continent: continent}).hide().fadeIn('slow');
}
function listePaysProf(continent) {
	var param = '?Continent=' + continent;
	$('#liste').load('http://geoworld.fr/compte-maj.html #liste',{Continent: continent}).hide().fadeIn('slow');
}