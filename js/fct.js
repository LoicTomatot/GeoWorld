function listePays(continent) {
	var param = '?Continent=' + continent;
	$('#liste').load('http://geoworld.fr/ #liste',{Continent: continent}).hide().fadeIn('slow');
}