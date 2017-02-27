<?php
$playername  = 'Player';
$map = '';
$ownerimage = $owner;
$teamimage1 = $team1;
$teamimage2 = $team2;
$teamimage3 = $team3;
$teamimage4 = $team4;
$teamimage5 = $team5;


if (isset($_GET['mapname']))
    $map = $_GET['mapname'];
if (isset($_GET['steamid'])) {
    $data = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$apikey.'&steamids='.$_GET['steamid'];
    $f = file_get_contents($data);
    $arr = json_decode($f, true);
    $avatar  = '';
    if (isset($arr['response']['players'][0]['personaname']))
        $playername = $arr['response']['players'][0]['personaname'];
    if (isset($arr['response']['players'][0]['avatarfull']))
        $avatar = $arr['response']['players'][0]['avatarfull'];
}  

if (isset($owner)) {
    $data = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$apikey.'&steamids='.$owner;
    $f = file_get_contents($data);
    $arr = json_decode($f, true);
		$userid = '76561198210024908';
    $ownerimage  = '';
    if (isset($arr['response']['players'][0]['personaname']))
        $ownername = $arr['response']['players'][0]['personaname'];
    if (isset($arr['response']['players'][0]['avatarfull']))
        $ownerimage = $arr['response']['players'][0]['avatarfull'];
}  
		

?>