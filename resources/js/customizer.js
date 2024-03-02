/* global wp, devcon_msummit2024_customizer, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Load default settings upon click
    wp.customize.control('devcon-msummit2024_load_default_settings', function(control) {
       control.container.find('.button').on('click', function() {
         $.ajax({
              url: devcon_msummit2024_customizer.ajax_url + 'devcon-msummit2024/v1/theme/load-default',
              type: 'POST',
              beforeSend(jqXHR, settings) {
                  jqXHR.setRequestHeader('X-WP-Nonce', devcon_msummit2024_customizer.nonce);
              },
             success: function( response ) {
                 if (response.success) {
                     location.reload();
                 }
              }
         })
       });
    });
}( jQuery ) );
