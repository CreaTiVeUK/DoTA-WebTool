<!DOCTYPE html>
<?php
    include("db.php");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Styles/favicon.ico">

    <title>Template for DoTA-WebTool</title>
    
    <link rel="stylesheet" type="text/css" href="style.css" />

    <!-- Bootstrap core CSS -->
    <link href="Styles/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="Styles/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="Styles/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">DoTA</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">Build a Team</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">FAQ</a></li>
                </ul>
              </nav>
            </div>
          </div>
            
<div class="clearfix"></div>
</div>
	<div style="position: absolute;top:0;left: 0;right: 0;"><input class="search-input cap-tavern-search-hero" type="text" value="" name="hero_name" id="hero_name" autocomplete="off" placeholder="Enter hero name here"></div>
	<div class="tavern">        
 <?php
$CLASS = "tavern-hero"; 
$SQL="select heroId, heroName, heroPicSmall, heroPicHover from heroes";
//Create a new variable containing the execution of the SQL query i.e. select the records or get out
$exeSQL=mysql_query($SQL) or die (mysql_error());

while ($arrayhero=mysql_fetch_array($exeSQL))
{
	echo "<br>";
	//make each product a link to the next page and pass the product id to the next page by URL
	//concatenate a string of characters u_prodid which carries the value of the actual id
	echo $arrayhero['heroName'];
	echo "<br>";
	echo "<img src=images/".$arrayhero['heroPicHover'].">";
        echo "<br>";
	echo "<img src=images/".$arrayhero['heroPicSmall'].">";
	echo "<br><br>";
	echo "<hr>";
        echo "<a id=".$arrayhero['heroId']." class=".$CLASS." data-hero-id=".$arrayhero['heroId']." href= ""#"" data-hero-uri="earthshaker" data-hero-name="Earthshaker">;
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/earthshaker_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/earthshaker_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
}
?>


<div class="clearfix"></div>
</div>
	<div style="position: absolute;top:0;left: 0;right: 0;"><input class="search-input cap-tavern-search-hero" type="text" value="" name="hero_name" id="hero_name" autocomplete="off" placeholder="Enter hero name here"></div>
	<div class="tavern">
	<div class="tavern-column tavern-col-left">
			        				<a id="tavern_hero_1" class="tavern-hero" data-hero-id="1" href="#" data-hero-uri="earthshaker" data-hero-name="Earthshaker">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/earthshaker_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/earthshaker_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_2" class="tavern-hero" data-hero-id="2" href="#" data-hero-uri="sven" data-hero-name="Sven">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/sven_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/sven_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_3" class="tavern-hero" data-hero-id="3" href="#" data-hero-uri="tiny" data-hero-name="Tiny">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/tiny_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/tiny_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_4" class="tavern-hero" data-hero-id="4" href="#" data-hero-uri="kunkka" data-hero-name="Kunkka">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/kunkka_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/kunkka_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_5" class="tavern-hero" data-hero-id="5" href="#" data-hero-uri="beastmaster" data-hero-name="Beastmaster">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/beastmaster_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/beastmaster_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_6" class="tavern-hero" data-hero-id="6" href="#" data-hero-uri="dragon_knight" data-hero-name="Dragon Knight">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/dragon_knight_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/dragon_knight_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_7" class="tavern-hero" data-hero-id="7" href="#" data-hero-uri="rattletrap" data-hero-name="Clockwerk">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/rattletrap_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/rattletrap_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_8" class="tavern-hero" data-hero-id="8" href="#" data-hero-uri="omniknight" data-hero-name="Omniknight">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/omniknight_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/omniknight_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_9" class="tavern-hero" data-hero-id="9" href="#" data-hero-uri="huskar" data-hero-name="Huskar">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/huskar_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/huskar_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_10" class="tavern-hero" data-hero-id="10" href="#" data-hero-uri="alchemist" data-hero-name="Alchemist">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/alchemist_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/alchemist_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_11" class="tavern-hero" data-hero-id="11" href="#" data-hero-uri="brewmaster" data-hero-name="Brewmaster">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/brewmaster_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/brewmaster_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_12" class="tavern-hero" data-hero-id="12" href="#" data-hero-uri="treant" data-hero-name="Treant Protector">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/treant_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/treant_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_13" class="tavern-hero" data-hero-id="13" href="#" data-hero-uri="wisp" data-hero-name="Io">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/wisp_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/wisp_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_14" class="tavern-hero" data-hero-id="14" href="#" data-hero-uri="centaur" data-hero-name="Centaur Warrunner">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/centaur_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/centaur_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_15" class="tavern-hero" data-hero-id="15" href="#" data-hero-uri="shredder" data-hero-name="Timbersaw">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/shredder_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/shredder_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_16" class="tavern-hero" data-hero-id="16" href="#" data-hero-uri="bristleback" data-hero-name="Bristleback">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/bristleback_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/bristleback_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_17" class="tavern-hero" data-hero-id="17" href="#" data-hero-uri="tusk" data-hero-name="Tusk">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/tusk_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/tusk_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_18" class="tavern-hero" data-hero-id="18" href="#" data-hero-uri="elder_titan" data-hero-name="Elder Titan">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/elder_titan_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/elder_titan_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_19" class="tavern-hero" data-hero-id="19" href="#" data-hero-uri="legion_commander" data-hero-name="Legion Commander">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/legion_commander_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/legion_commander_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_20" class="tavern-hero" data-hero-id="20" href="#" data-hero-uri="earth_spirit" data-hero-name="Earth Spirit">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/earth_spirit_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/earth_spirit_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_21" class="tavern-hero" data-hero-id="21" href="#" data-hero-uri="phoenix" data-hero-name="Phoenix">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/phoenix_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/phoenix_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
																																																																																																																																																																																																																																																																																		</div>
		<div class="tavern-column tavern-col-middle">
																																																																		        				<a id="tavern_hero_22" class="tavern-hero" data-hero-id="22" href="#" data-hero-uri="antimage" data-hero-name="Anti-Mage">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/antimage_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/antimage_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_23" class="tavern-hero" data-hero-id="23" href="#" data-hero-uri="drow_ranger" data-hero-name="Drow Ranger">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/drow_ranger_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/drow_ranger_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_24" class="tavern-hero" data-hero-id="24" href="#" data-hero-uri="juggernaut" data-hero-name="Juggernaut">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/juggernaut_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/juggernaut_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_25" class="tavern-hero" data-hero-id="25" href="#" data-hero-uri="mirana" data-hero-name="Mirana">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/mirana_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/mirana_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_26" class="tavern-hero" data-hero-id="26" href="#" data-hero-uri="morphling" data-hero-name="Morphling">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/morphling_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/morphling_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_27" class="tavern-hero" data-hero-id="27" href="#" data-hero-uri="phantom_lancer" data-hero-name="Phantom Lancer">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/phantom_lancer_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/phantom_lancer_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_28" class="tavern-hero" data-hero-id="28" href="#" data-hero-uri="vengefulspirit" data-hero-name="Vengeful Spirit">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/vengefulspirit_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/vengefulspirit_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_29" class="tavern-hero" data-hero-id="29" href="#" data-hero-uri="riki" data-hero-name="Riki">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/riki_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/riki_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_30" class="tavern-hero" data-hero-id="30" href="#" data-hero-uri="sniper" data-hero-name="Sniper">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/sniper_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/sniper_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_31" class="tavern-hero" data-hero-id="31" href="#" data-hero-uri="templar_assassin" data-hero-name="Templar Assassin">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/templar_assassin_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/templar_assassin_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_32" class="tavern-hero" data-hero-id="32" href="#" data-hero-uri="luna" data-hero-name="Luna">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/luna_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/luna_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_33" class="tavern-hero" data-hero-id="33" href="#" data-hero-uri="bounty_hunter" data-hero-name="Bounty Hunter">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/bounty_hunter_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/bounty_hunter_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_34" class="tavern-hero" data-hero-id="34" href="#" data-hero-uri="ursa" data-hero-name="Ursa">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/ursa_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/ursa_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_35" class="tavern-hero" data-hero-id="35" href="#" data-hero-uri="gyrocopter" data-hero-name="Gyrocopter">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/gyrocopter_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/gyrocopter_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_36" class="tavern-hero" data-hero-id="36" href="#" data-hero-uri="lone_druid" data-hero-name="Lone Druid">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/lone_druid_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/lone_druid_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_37" class="tavern-hero" data-hero-id="37" href="#" data-hero-uri="naga_siren" data-hero-name="Naga Siren">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/naga_siren_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/naga_siren_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_38" class="tavern-hero" data-hero-id="38" href="#" data-hero-uri="troll_warlord" data-hero-name="Troll Warlord">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/troll_warlord_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/troll_warlord_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_39" class="tavern-hero" data-hero-id="39" href="#" data-hero-uri="ember_spirit" data-hero-name="Ember Spirit">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/ember_spirit_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/ember_spirit_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_113" class="tavern-hero" data-hero-id="113" href="#" data-hero-uri="arc_warden" data-hero-name="Arc Warden">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/arc_warden_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/arc_warden_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
																																																																																																																																																																																																																									</div>
		<div class="tavern-column tavern-col-right">
																																																																																																																											        				<a id="tavern_hero_40" class="tavern-hero" data-hero-id="40" href="#" data-hero-uri="crystal_maiden" data-hero-name="Crystal Maiden">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/crystal_maiden_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/crystal_maiden_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_41" class="tavern-hero" data-hero-id="41" href="#" data-hero-uri="puck" data-hero-name="Puck">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/puck_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/puck_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_42" class="tavern-hero" data-hero-id="42" href="#" data-hero-uri="storm_spirit" data-hero-name="Storm Spirit">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/storm_spirit_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/storm_spirit_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_43" class="tavern-hero" data-hero-id="43" href="#" data-hero-uri="windrunner" data-hero-name="Windranger">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/windrunner_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/windrunner_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_44" class="tavern-hero" data-hero-id="44" href="#" data-hero-uri="zuus" data-hero-name="Zeus">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/zuus_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/zuus_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_45" class="tavern-hero" data-hero-id="45" href="#" data-hero-uri="lina" data-hero-name="Lina">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/lina_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/heroes/lina_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_46" class="tavern-hero" data-hero-id="46" href="#" data-hero-uri="shadow_shaman" data-hero-name="Shadow Shaman">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/shadow_shaman_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/shadow_shaman_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_47" class="tavern-hero" data-hero-id="47" href="#" data-hero-uri="tinker" data-hero-name="Tinker">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/tinker_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/tinker_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_48" class="tavern-hero" data-hero-id="48" href="#" data-hero-uri="furion" data-hero-name="Nature's Prophet">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/furion_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/furion_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_49" class="tavern-hero" data-hero-id="49" href="#" data-hero-uri="enchantress" data-hero-name="Enchantress">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/enchantress_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/enchantress_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_50" class="tavern-hero" data-hero-id="50" href="#" data-hero-uri="jakiro" data-hero-name="Jakiro">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/jakiro_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/jakiro_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_51" class="tavern-hero" data-hero-id="51" href="#" data-hero-uri="chen" data-hero-name="Chen">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/chen_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/chen_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_52" class="tavern-hero" data-hero-id="52" href="#" data-hero-uri="silencer" data-hero-name="Silencer">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/silencer_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/silencer_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_53" class="tavern-hero" data-hero-id="53" href="#" data-hero-uri="ogre_magi" data-hero-name="Ogre Magi">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/ogre_magi_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/ogre_magi_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_54" class="tavern-hero" data-hero-id="54" href="#" data-hero-uri="rubick" data-hero-name="Rubick">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/rubick_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/rubick_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_55" class="tavern-hero" data-hero-id="55" href="#" data-hero-uri="disruptor" data-hero-name="Disruptor">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/disruptor_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/disruptor_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_56" class="tavern-hero" data-hero-id="56" href="#" data-hero-uri="keeper_of_the_light" data-hero-name="Keeper of the Light">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/keeper_of_the_light_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/keeper_of_the_light_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_57" class="tavern-hero" data-hero-id="57" href="#" data-hero-uri="skywrath_mage" data-hero-name="Skywrath Mage">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/skywrath_mage_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/skywrath_mage_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_111" class="tavern-hero" data-hero-id="111" href="#" data-hero-uri="oracle" data-hero-name="Oracle">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/oracle_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/oracle_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_109" class="tavern-hero" data-hero-id="109" href="#" data-hero-uri="techies" data-hero-name="Techies">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/techies_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/techies_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
																																																																																																																																																													</div>
		<div class="clearfix"></div>
		<div class="tavern-column tavern-col-left">
																																																																																																																																																																																							        				<a id="tavern_hero_58" class="tavern-hero" data-hero-id="58" href="#" data-hero-uri="axe" data-hero-name="Axe">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/axe_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/axe_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_59" class="tavern-hero" data-hero-id="59" href="#" data-hero-uri="pudge" data-hero-name="Pudge">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/pudge_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/pudge_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_60" class="tavern-hero" data-hero-id="60" href="#" data-hero-uri="sand_king" data-hero-name="Sand King">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/sand_king_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/sand_king_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_61" class="tavern-hero" data-hero-id="61" href="#" data-hero-uri="slardar" data-hero-name="Slardar">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/slardar_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/slardar_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_62" class="tavern-hero" data-hero-id="62" href="#" data-hero-uri="tidehunter" data-hero-name="Tidehunter">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/tidehunter_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/tidehunter_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_63" class="tavern-hero" data-hero-id="63" href="#" data-hero-uri="skeleton_king" data-hero-name="Wraith King">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/skeleton_king_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/skeleton_king_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_64" class="tavern-hero" data-hero-id="64" href="#" data-hero-uri="life_stealer" data-hero-name="Lifestealer">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/life_stealer_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/life_stealer_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_65" class="tavern-hero" data-hero-id="65" href="#" data-hero-uri="night_stalker" data-hero-name="Night Stalker">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/night_stalker_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/night_stalker_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_66" class="tavern-hero" data-hero-id="66" href="#" data-hero-uri="doom_bringer" data-hero-name="Doom">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/doom_bringer_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/doom_bringer_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_67" class="tavern-hero" data-hero-id="67" href="#" data-hero-uri="spirit_breaker" data-hero-name="Spirit Breaker">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/spirit_breaker_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/spirit_breaker_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_68" class="tavern-hero" data-hero-id="68" href="#" data-hero-uri="lycan" data-hero-name="Lycan">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/lycan_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/lycan_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_69" class="tavern-hero" data-hero-id="69" href="#" data-hero-uri="chaos_knight" data-hero-name="Chaos Knight">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/chaos_knight_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/chaos_knight_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_70" class="tavern-hero" data-hero-id="70" href="#" data-hero-uri="undying" data-hero-name="Undying">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/undying_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/undying_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_71" class="tavern-hero" data-hero-id="71" href="#" data-hero-uri="magnataur" data-hero-name="Magnus">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/magnataur_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/magnataur_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_72" class="tavern-hero" data-hero-id="72" href="#" data-hero-uri="abaddon" data-hero-name="Abaddon">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/abaddon_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/abaddon_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
																																																																																																																</div>
		<div class="tavern-column tavern-col-middle">
																																																																																																																																																																																																																																				        				<a id="tavern_hero_73" class="tavern-hero" data-hero-id="73" href="#" data-hero-uri="bloodseeker" data-hero-name="Bloodseeker">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/bloodseeker_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/bloodseeker_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_74" class="tavern-hero" data-hero-id="74" href="#" data-hero-uri="nevermore" data-hero-name="Shadow Fiend">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/nevermore_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/nevermore_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_75" class="tavern-hero" data-hero-id="75" href="#" data-hero-uri="razor" data-hero-name="Razor">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/razor_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/razor_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_76" class="tavern-hero" data-hero-id="76" href="#" data-hero-uri="venomancer" data-hero-name="Venomancer">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/venomancer_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/venomancer_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_77" class="tavern-hero" data-hero-id="77" href="#" data-hero-uri="faceless_void" data-hero-name="Faceless Void">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/faceless_void_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/faceless_void_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_78" class="tavern-hero" data-hero-id="78" href="#" data-hero-uri="phantom_assassin" data-hero-name="Phantom Assassin">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/phantom_assassin_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/phantom_assassin_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_79" class="tavern-hero" data-hero-id="79" href="#" data-hero-uri="viper" data-hero-name="Viper">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/viper_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/viper_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_80" class="tavern-hero" data-hero-id="80" href="#" data-hero-uri="clinkz" data-hero-name="Clinkz">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/clinkz_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/clinkz_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_81" class="tavern-hero" data-hero-id="81" href="#" data-hero-uri="broodmother" data-hero-name="Broodmother">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/broodmother_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/broodmother_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_82" class="tavern-hero" data-hero-id="82" href="#" data-hero-uri="weaver" data-hero-name="Weaver">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/weaver_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/weaver_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_83" class="tavern-hero" data-hero-id="83" href="#" data-hero-uri="spectre" data-hero-name="Spectre">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/spectre_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/spectre_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_84" class="tavern-hero" data-hero-id="84" href="#" data-hero-uri="meepo" data-hero-name="Meepo">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/meepo_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/meepo_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_85" class="tavern-hero" data-hero-id="85" href="#" data-hero-uri="nyx_assassin" data-hero-name="Nyx Assassin">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/nyx_assassin_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/nyx_assassin_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_86" class="tavern-hero" data-hero-id="86" href="#" data-hero-uri="slark" data-hero-name="Slark">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/slark_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/slark_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_87" class="tavern-hero" data-hero-id="87" href="#" data-hero-uri="medusa" data-hero-name="Medusa">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/medusa_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/medusa_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_88" class="tavern-hero" data-hero-id="88" href="#" data-hero-uri="terrorblade" data-hero-name="Terrorblade">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/terrorblade_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/terrorblade_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
																																																																</div>
		<div class="tavern-column tavern-col-right">
																																																																																																																																																																																																																																																																																				        				<a id="tavern_hero_89" class="tavern-hero" data-hero-id="89" href="#" data-hero-uri="bane" data-hero-name="Bane">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/bane_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/bane_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_90" class="tavern-hero" data-hero-id="90" href="#" data-hero-uri="lich" data-hero-name="Lich">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/lich_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/lich_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_91" class="tavern-hero" data-hero-id="91" href="#" data-hero-uri="lion" data-hero-name="Lion">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/lion_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/lion_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_92" class="tavern-hero" data-hero-id="92" href="#" data-hero-uri="witch_doctor" data-hero-name="Witch Doctor">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/witch_doctor_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/witch_doctor_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_93" class="tavern-hero" data-hero-id="93" href="#" data-hero-uri="enigma" data-hero-name="Enigma">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/enigma_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/enigma_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_94" class="tavern-hero" data-hero-id="94" href="#" data-hero-uri="necrolyte" data-hero-name="Necrophos">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/necrolyte_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/necrolyte_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_95" class="tavern-hero" data-hero-id="95" href="#" data-hero-uri="warlock" data-hero-name="Warlock">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/warlock_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/warlock_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_96" class="tavern-hero" data-hero-id="96" href="#" data-hero-uri="queenofpain" data-hero-name="Queen of Pain">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/queenofpain_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/queenofpain_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_97" class="tavern-hero" data-hero-id="97" href="#" data-hero-uri="death_prophet" data-hero-name="Death Prophet">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/death_prophet_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/death_prophet_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_98" class="tavern-hero" data-hero-id="98" href="#" data-hero-uri="pugna" data-hero-name="Pugna">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/pugna_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/pugna_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_99" class="tavern-hero" data-hero-id="99" href="#" data-hero-uri="dazzle" data-hero-name="Dazzle">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/dazzle_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/dazzle_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_100" class="tavern-hero" data-hero-id="100" href="#" data-hero-uri="leshrac" data-hero-name="Leshrac">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/leshrac_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/leshrac_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_101" class="tavern-hero" data-hero-id="101" href="#" data-hero-uri="dark_seer" data-hero-name="Dark Seer">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/dark_seer_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/dark_seer_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_102" class="tavern-hero" data-hero-id="102" href="#" data-hero-uri="batrider" data-hero-name="Batrider">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/batrider_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/batrider_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_103" class="tavern-hero" data-hero-id="103" href="#" data-hero-uri="ancient_apparition" data-hero-name="Ancient Apparition">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/ancient_apparition_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/ancient_apparition_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_104" class="tavern-hero" data-hero-id="104" href="#" data-hero-uri="invoker" data-hero-name="Invoker">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/invoker_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/invoker_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_105" class="tavern-hero" data-hero-id="105" href="#" data-hero-uri="obsidian_destroyer" data-hero-name="Outworld Devourer">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/obsidian_destroyer_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/obsidian_destroyer_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_106" class="tavern-hero" data-hero-id="106" href="#" data-hero-uri="shadow_demon" data-hero-name="Shadow Demon">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/shadow_demon_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/shadow_demon_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_107" class="tavern-hero" data-hero-id="107" href="#" data-hero-uri="visage" data-hero-name="Visage">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/visage_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/visage_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
					        				<a id="tavern_hero_112" class="tavern-hero" data-hero-id="112" href="#" data-hero-uri="winter_wyvern" data-hero-name="Winter Wyvern">
			<img class="tavern-hero-img-small" src="/public/images/dota2/heroes/winter_wyvern_sb.png">
			<div class="tavern-hero-ban"></div>
			<div class="tavern-hero-action">
				<div class="tavern-hero-ban"></div>
				<img class="tavern-hero-img-large true-highlight" src="Dota-Heroes-Hover/winter_wyvern_hphover.png">
				<div class="tavern-hero-ban-button">Ban</div>
			</div>
		</a>
				</div>
		<div class="clearfix"></div>
	</div>

          <div class="mastfoot">
            <div class="inner">
              <p> Testing the footer </p>
            </div>
          </div>

        </div>

      </div>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="Styles/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Styles/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
