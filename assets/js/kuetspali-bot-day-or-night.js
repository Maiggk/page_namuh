window.addEventListener( 'load', function() {


	var date = new Date();
	var hour = parseInt( date.getHours() );
	var imgDayOrNight = id( 'imgDayOrNight' );
	var img = new Image();

	if( hour >= 6 && hour <= 18 ) {

		img.src = 'img/institute/entry-morning.jpg';
		id( 'imgDayOrNight' ).src = img.src;

	}	// end if

	else {

		img.src = 'img/institute/entry-night.jpg';
		id( 'imgDayOrNight' ).src = img.src;

	}	// end for

	console.log( img.src )

}, false );