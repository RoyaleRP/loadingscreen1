<?php 
foreach ($staff as $teamsteamid => $title) {
  
    $data = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$apikey.'&steamids='.$teamsteamid;
    $f = file_get_contents($data);
    $arr = json_decode($f, true);
    $avatar  = '';
    if (isset($arr['response']['players'][0]['personaname']))
        $username = $arr['response']['players'][0]['personaname'];
    if (isset($arr['response']['players'][0]['avatarfull']))
        $avatar = $arr['response']['players'][0]['avatarfull'];

  if (isset($_GET['teamsteamid']))
    $teamsteamid = $_GET['teamsteamid'];
  if (isset($_GET['title']))
    $title = $_GET['title'];
  
  
echo '  <div class="team">
      <img id="admin" src="'.$avatar.'" />
    <div class="description">
      <ul>
  <li>'.strip_tags($title).' | '.strip_tags($username).'</li>
  <li>'.strip_tags($teamsteamid).'</li>
      </ul>
     </div> 
</div> ';
  
  
}

?>