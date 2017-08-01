/*  =========================
	ACF API
    ========================= */


(function(factory) {
    'use strict';
    if (typeof define === 'function' && define.amd) {
        define(['jquery'], factory);
    } else if (typeof exports !== 'undefined') {
        module.exports = factory(require('jquery'));
    } else {
        factory(jQuery);
    }

}(function($) {

    /**
     * ACF Google maps
     * new_map
     */

    function new_map( $el ) {
        
        // var
        var $markers = $el.find('.marker');
        
        
        // vars
        var args = {
            zoom        : 16,
            center      : new google.maps.LatLng(0, 0),
            mapTypeId   : google.maps.MapTypeId.ROADMAP
        };
        
        
        // create map               
        var map = new google.maps.Map( $el[0], args);
        
        
        // add a markers reference
        map.markers = [];
        
        
        // add markers
        $markers.each(function(){
            
            add_marker( $(this), map );
            
        });
        
        
        // center map
        center_map( map );
        
        
        // return
        return map;
        
    }

    /*
    *  add_marker
    */

    function add_marker( $marker, map ) {

        // var
        var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

        // create marker
        var marker = new google.maps.Marker({
            position    : latlng,
            map         : map
        });

        // add to array
        map.markers.push( marker );

        // if marker contains HTML, add it to an infoWindow
        if( $marker.html() )
        {
            // create info window
            var infowindow = new google.maps.InfoWindow({
                content     : $marker.html()
            });

            // show info window when marker is clicked
            google.maps.event.addListener(marker, 'click', function() {

                infowindow.open( map, marker );

            });
        }

    }

    /*
    *  center_map
    *  This function will center the map, showing all markers attached to this map
    */

    function center_map( map ) {

        // vars
        var bounds = new google.maps.LatLngBounds();

        // loop through all markers and create bounds
        $.each( map.markers, function( i, marker ){

            var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

            bounds.extend( latlng );

        });

        // only 1 marker?
        if( map.markers.length == 1 )
        {
            // set center of map
            map.setCenter( bounds.getCenter() );
            map.setZoom( 16 );
        }
        else
        {
            // fit to bounds
            map.fitBounds( bounds );
        }

    }


    /**
     * Metods will be used in acfApi method
     */
	var methods = {

		init: function () {

            /**
             * Init ACF Google maps
             */
            if (global_var.dev != true) {
                var map = null;
                $('.acf-map').each(function(){
                    try {
                        map = new_map( $(this) );
                    } catch (e) {
                        console.error('Can\'t call Google Maps function. Error message: ' + e); 
                    }
                });
            }

		},

        loadAjax: function() {

            // Too important variables
            var $field      = $(this);                     // Wrapper inside which will be loaded new items
            var id          = $field.attr('id');           // Wrapper's id
            var fieldStatus = +$field.attr('data-status'); // Status of count printed items inside the wrapper
            var fieldName   = $field.attr('data-field');   // ACF Field name
            var fieldOffset = +$field.attr('data-offset'); // How many fields to print
            var fieldLack   = +$field.attr('data-lack');   // Count of lack fields
            var fieldMethod = $field.attr('data-method');
            var fieldParent = +$field.attr('data-parent-id');

            if ( fieldLack > 0 && $field.length === 1 ) {

                $.post(
                    global_var.ajax, {
                      'action': fieldMethod,
                      'post_id': global_var.post_id,
                      'offset': fieldOffset,
                      'nonce': global_var.ajaxnonce,
                      'field': fieldName,
                      'status': fieldStatus,
                      'section_id': fieldParent
                    },
                    function (json) {
                        $field.append(json['content']);

                        // Update data attrs
                        fieldStatus = json['status'];
                        $field.attr('data-status', fieldStatus);
                        fieldLack -= 1;
                        $field.attr('data-lack', fieldLack);

                        /**
                         * Re-init core scripts
                         */
                        try {
                            $(document).controller();
                        } catch (e) {
                            console.error('During ajax the load controler returned error. Message: ' + e); // pass exception object to error handler
                        }

                        /**
                         * Load more sections.
                         * Re-call current function
                         */
                        if (json['more']) {
                            try {
                                $('#'+id).acfApi('loadAjax');
                            } catch (e) {
                                console.error('Load ajax error.'); // pass exception object to error handler
                            }
                        } else {
                            console.log('loadAjax method has loaded all fields successfull!');
                        }
                    },
                    'json'
                );

            } else {
                return false;
            } 

        }

	};

	/** 
	 * Include javascript files
	 * which requery DOM reload
	 */
	$.fn.acfApi = function( method ) {

        if ( methods[method] ) {
          return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
          return methods.init.apply( this, arguments );
        } else {
          $.error( 'Method named ' +  method + ' isn\'t exist within jQuery.acfApi' );
        } 

    };

}));


