#Wordpress-steam-group
A widget that shows important information of a community's steam group for wordpress.

# Demo

http://www.otakuni.com/imgcdn/images/screenshot_from_2016-11-26_16:47:43-1480196895.png

# Instructions

1) Ensure that you have jQuery running.
2) Upload the file steam.php to top directory.
3) Upload style.css  script.js and integrate them in your current code which ever method you like. You can link to them directly by editing your themes html or add them to the bottom of your current CSS and JS files to make things a bit tidier and faster.
4) Create a new widget in any place you like and add the following code:

<div id="steam_group_gib"></div>

5) Edit the following variables in the steam.php file:

$_STEAMAPI = "";   // You get this from http://steamcommunity.com/dev/apikey
$_STEAMGROUP = ""; // Whats the URL of your steam group? 
$_MEMBERCOUNT = 23; // the amount of use avatars you want to display in your widget (note, this means 

6) You're done :)
