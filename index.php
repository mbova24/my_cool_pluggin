<<?php
/*
Plugin Name: coolpluggin
Plugin URI: http://hotmail.com
Description: This plugin takes the ip address of the enduser and locates it on a map.
Version: 1.0.0
Author: Michael Angelo Bova
Author URI: http://hotmail.com
License: GPL2
*/

//BS Code

function cool_stuff() {
	function getLocation() {
       echo '<script> if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
            x = "Geolocation is not supported by this browser.";
        console.log(x);
        }
    
    function showPosition(position) {
        x = "Latitude: " + position.coords.latitude + 
        "<br>Longitude: " + position.coords.longitude;
    console.log(x);
    }
</script>'
}
add_shortcode('found','cool_stuff');
