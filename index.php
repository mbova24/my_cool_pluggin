<?php
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
       echo '<div id="map"></div>
       <script>
         // Note: This example requires that you consent to location sharing when
         // prompted by your browser. If you see the error "The Geolocation service
         // failed.", it means you probably did not give permission for the browser to
         // locate you.
         var map, infoWindow;
         function initMap() {
           map = new google.maps.Map(document.getElementById(\'map\'), {
             center: {lat: -34.397, lng: 150.644},
             zoom: 6
           });
           infoWindow = new google.maps.InfoWindow;
   
           // Try HTML5 geolocation.
           if (navigator.geolocation) {
             navigator.geolocation.getCurrentPosition(function(position) {
               var pos = {
                 lat: position.coords.latitude,
                 lng: position.coords.longitude
               };
   
               infoWindow.setPosition(pos);
               infoWindow.setContent(\'Location found.\');
               infoWindow.open(map);
               map.setCenter(pos);
             }, function() {
               handleLocationError(true, infoWindow, map.getCenter());
             });
           } else {
             // Browser doesn\'t support Geolocation
             handleLocationError(false, infoWindow, map.getCenter());
           }
         }
   
         function handleLocationError(browserHasGeolocation, infoWindow, pos) {
           infoWindow.setPosition(pos);
           infoWindow.setContent(browserHasGeolocation ?
                                 "Error: The Geolocation service failed." :
                                 "Error: Your browser doesn\'t support geolocation.");
           infoWindow.open(map);
         }
       </script>
       <script async defer
       src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
       </script><style>#map {
        height: 500px;
     }</style>';
}
add_shortcode('found','cool_stuff');
