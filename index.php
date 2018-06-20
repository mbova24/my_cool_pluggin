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
	function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();

echo $user_ip; // Output IP address [Ex: 177.87.193.134];
}
add_shortcode('found','cool_stuff');
