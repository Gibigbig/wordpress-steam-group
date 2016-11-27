<?php

//variables

$_STEAMAPI = "";   // You get this from http://steamcommunity.com/dev/apikey
$_STEAMGROUP = ""; // Whats the URL of your steam group? 
$_MEMBERCOUNT = 23; // the amount of use avatars you want to display in your widget (note, this means 

// Do note edit the lines below unless you know what you're doing

//get steam xml
$data = file_get_contents($_STEAMGROUP);

//turn it into array so its easier to work with
$parsed = simplexml_load_string($data);
$players = (array) $parsed->members;

// randomize the group members
shuffle($players['steamID64']);

// limit to set number of group members
for($x = 0; $x <= $_MEMBERCOUNT; $x++){
        $playersStr .= $players['steamID64'][$x].',';
}

// get data on group members
$players = array();          
$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$_STEAMAPI&steamids=$playersStr";
$json_object= file_get_contents($url);
$json_decoded = json_decode($json_object);

// output some group information
echo '<div class="gib_bubble rounded5 purp">'.$parsed->memberCount.' <span class="block centered">Gamers!</span></div>';
echo '<div class="gib_bubble rounded5">'.$parsed->groupDetails->membersOnline.' <span class="block centered">Online Now.</span></div>'; 
echo '<div class="gib_bubble rounded5 greenbg">'.$parsed->groupDetails->membersInGame.' <span class="block centered">In Game.</span></div>'; 

// output group member avatars 
echo '<div class="steam_stuff"> ';
foreach ($json_decoded->response->players as $player)
{
    $players[$player->steamid]['personaname'] = $player->personaname;     // In game name
    $players[$player->steamid]['profileurl'] = $player->profileurl;       // URL to their Steam Community Page
    $players[$player->steamid]['avatar'] = $player->avatar;               // Small Avatar Icon URL
    $players[$player->steamid]['avatarmedium'] = $player->avatarmedium;   // Thumbnail avatar URL
    $players[$player->steamid]['avatarfull'] = $player->avatarfull;       // Full sized Avatar URL

        echo '

        <a href="'.$player->profileurl.'" target="_blank">

                <img   title="'.$player->personaname.'" class="rounded5" width="30" src="'.$player->avatarmedium.'" />

        </a>

        ';
}    

echo '<a href="'.$_STEAMGROUP.'" target="_blank"><div class="wpd-info gib_button rounded5">Join Our Steam Community!</div></a>';

echo '</div>';
