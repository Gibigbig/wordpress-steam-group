#Wordpress-steam-group
A widget that shows important information of a community's steam group for wordpress automatically. Simple and efficient making full use of native steam API.

# Demo

<img src="http://www.otakuni.com/imgcdn/images/screenshot_from_2016-11-26_16:47:43-1480196895.png" />

# Instructions

1) Ensure that you have jQuery running.

2) Upload the file <b>steam.php</b> to top directory.

3) Upload <b>style.css</b> and <b>script.js</b> and integrate them in your current code which ever method you like. You can link to them directly by editing your themes html or add them to the bottom of your current CSS and JS files to make things a bit tidier and faster.

4) Create a new widget in any place you like and add the following code:

<pre>&lt;div id="steam_group_gib"&gt;&lt;/div&gt;</pre>

5) Edit the following variables in the steam.php file:

<pre>$_STEAMAPI = ""; // apikey
$_STEAMGROUP = ""; // steam group url
$_MEMBERCOUNT = 23; //numbers of member avatars to show in the widget
</pre>

6) You're done :)

#Performance

This widget uses two requests on the PHP side and one request on the clientside.
The user will call the file <b>steam.php</b> using <b>script.js</b> which will make two calls to steam, one getting all the group data, and another <b><font color="red">single</font></b> request getting <b><font color="red">all</font></b> user data for the amount of members specificed. This data would be avatar link, steam name and profile link, though other information is available through the steam API.
