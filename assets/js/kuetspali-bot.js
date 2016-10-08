window.addEventListener( 'load', function() {

	titles();
	externalLinks();

}, false );

// functions

function id( id ) {

	return document.getElementById( id );

}	// end function id


function titles() {

	var h1 = document.querySelector( 'h1' );
	var store = h1.innerHTML;
	h1.innerHTML = '<span>\u00a0\u00a0\u00a0\u00a0\u00a0</span>' + store + '<span>\u00a0\u00a0\u00a0\u00a0\u00a0</span>';
	h1.style.textAlign = 'center';


}	// end function h1

function externalLinks() {

	var links = document.querySelectorAll( 'a[ href ^= "http" ], a[ href ^= "https" ] , a[ href *= "files"]' );

	for( var i = 0; i < links.length; i++ ) {

		links[ i ].setAttribute( 'target', '_blank' );

	}	// end for

}	// end function externalLinks
