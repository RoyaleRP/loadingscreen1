<?php
error_reporting(0);
$servername = 'Example Community';

$slots = '32';// Maxplayers on your Server

/* Set Your API KEY here https://steamcommunity.com/dev/apikey */

$apikey = '8E33FA2288B8F2AD1D3EC7FD483D3D66'; // Retrieve a Steam API key at https://steamcommunity.com/dev/apikey

/* Menu Options */

$welcome = 'Welcome,';
$serverinfo = 'Server Info';
$serverteam = 'Server Team';
$serverrules = 'Server Rules';
$maxplayers = 'Server Slots';

/* Set your Server Rules */

$rules = array(

      "No RDM",
      "No Prop Killing,Pushing,Climbing",
      "Do not break NLR(Time = 10mins)",
      "Do not be a minge" // Last one without comma
              
);

/* Choose your own Music */

$youtubeid = '#####';
$ytplayer = 'hide'; // Show the YouTube player, enter hide or show

/* Styles Choose red, blue, green or default */

$style = "default";

/* Please leave this, it shows me who is the Owner */

$scriptowner = '76561198210024908';

/* Enter Below your Admin Team ID's */

$owner = '76561198210024908'; // Enter your ID
$ownertitle = 'Owner'; 

/* Leave Blank to hide them */

$staff = [
  
          '76561198041267314' => 'Owner',
          '76561197960279927' => 'Gmod Creator',
          '76561198041267314' => 'Awesome'

];

/* Choose a Background */

$background = "background.jpg"; // Enter URL Here

/* Do not change anything below if you dont know what you are doing */
include 'webvars.php';
include 'function.php';


?>
  
<DOCTYPE: HTML>
  <html>
<head>
  <script src="https://use.fontawesome.com/874352ba55.js"></script>
  	<?php if (!isset($userid)) {echo'<style>*{display:none}</style>';}?>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js//jquery-min.js">
  </script>
  <link type="text/css" rel="stylesheet" href="css/stylesheet.css"
  
</head> 
  
  
<body style="background-image:url(<?php echo strip_tags($background) ?>);">
  <div id="bg_slider1">
    
  
  
 <?php include "styles.php"; ?>
<div class="left-main">
    <div class="info left-top">
        <div class="bild">
          <img src="<?php echo strip_tags($avatar)?>" class="bildcontent">
        </div>
    <h2>
      
      <?php include 'menu.php'; ?>
    <?php echo strip_tags($welcome) .' '. strip_tags($playername);?></h2>
    </p>
  </div>  
      
    <div class="info left-bottom">
      <div class="infocontent">
        <div class="header">
          <h1>
            <?php echo strip_tags($serverinfo) ?>
          </h1>
        </div>
        <div class="module" id="name">
          <i class="fa fa-server fa-fw" aria-hidden="true"></i><?php echo strip_tags($servername) ?>
        </div>
        
        <div class="module" id="map">
          <i class="fa fa-map fa-fw" aria-hidden="true" style=""></i><?php echo strip_tags($map) ?>
        </div>
        
        <div class="module" id="slots">
          <i class="fa fa-user fa-fw" aria-hidden="true" style=""></i><?php echo strip_tags($slots).' '.strip_tags($maxplayers) ?>
        </div>

      <?php if($ytplayer == 'show') {}
  else {echo'<style> iframe { display:none}; </style>';}?>
      <iframe id="ytplayer" type="text/html" 
  src="http://www.youtube.com/embed/<?php echo strip_tags($youtubeid); ?>?autoplay=1&controls=0&modestbranding=0"
                   frameborder="0" /></iframe>
      
  </div>  
      
</div>

  
<div class="info info-right">
  <div class="rightbox-left">
    <h1 class="header">
    <?php echo strip_tags($serverrules) ?>
    </h1>
    
    <ul>
      <?php
        foreach ($rules as $rule) {
            echo "<li>".strip_tags($rule)."</li>";
        }
      ?>
    </ul>
    
    
  </div>

  <div class="right" >
      <h1 class="header" style="">
        <?php echo strip_tags($serverteam) ?>
      </h1>
    
    
<div class="team">
      <img id="owner" src="<?php echo strip_tags($ownerimage) ?>" />
    <div class="description">
      <ul>
  <li><?php echo strip_tags($ownertitle) ?> | <?php echo strip_tags($ownername) ?></li>
  <li><?php echo strip_tags($owner) ?></li>
      </ul>
     </div> 
</div>
    
    <?php include 'team.php'; ?>
    

</div>

</div>
  
<p style="display:none"> 
<?php echo strip_tags($userid);?></p>
</div>

  </body>

  
  </html>
