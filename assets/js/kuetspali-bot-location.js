var mapCenter = new google.maps.LatLng( 19.53338793594941, -99.18744478044505 );
var mapEast = new google.maps.LatLng( 19.536216563314966, -99.11316904840464 );

function initialize( map, id, text ) {

	var location = map;

	var mapProp = {

		center: location,
		zoom: 17,
		scrollwheel: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP

	};

	var map = new google.maps.Map( document.getElementById( id ), mapProp );

	var marker = new google.maps.Marker( {

		position: location,
		icon:'img/scaffolding/ittla.png',
		animation: google.maps.Animation.BOUNCE

	} );

	marker.setMap( map );

	var infowindow = new google.maps.InfoWindow( { content: text } );

	google.maps.event.addListener( marker, 'click', function() {

		infowindow.open( map, marker );

	} );

}	// end function initialize

google.maps.event.addDomListener( window, 'load', initialize( mapCenter, 'mapCenter', 'Unidad Centro' ) );
google.maps.event.addDomListener( window, 'load', initialize( mapEast, 'mapEast', 'Unidad Oriente' ) );
