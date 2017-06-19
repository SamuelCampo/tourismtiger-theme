/*  =========================
	ACF Google map
    @package Art_Forja
    ========================= */

/*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/

var map = null;


$('.acf-map').each(function(){

	// create map
	map = new_map( $(this) );

});
