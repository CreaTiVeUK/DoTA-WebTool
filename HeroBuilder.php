<!DOCTYPE html>
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
      <script> 
        //$(document).ready(function () {
        //$(".tavern-hero-img-small").hide();
        //$("#top-bar_search").keyup(function(){
						//$("#search-criteria").on("keyup", function() {
        // Retrieve the input field text 
        //var filter = $(this).val();
        //var counter = 0;

        // Loop through the captions div 
        //$(".tavern").each(function(){

    	 // If the div item does not contain the text phrase fade it out
   	 //if ($(this).search(new RegExp(filter)) < 0) {
       	    // $(this).fadeTo("slow", 0.15);
	
    	// Show the div item if the phrase matches 
    	//} else {
        	//$(this).show();
    	//}
	//});
     //});
 //});
//$(document).ready(function () {
//$('#top-bar_search').keyup(function() {
    //var filterValue = $(this).val();

    //search the things that doesn't contains the search value
    //var itemsToHide = $('.tavern-column').not(function(index) {
        //var currentLiCode = $(this).html();       
        //return the result of the pattern matching of our word from the search bar. The gi means global, case insensitive search
        //return currentLiCode.match(new RegExp(filterValue, "gi"));
    //});

    //hide the non-matching items
    //itemsToHide.each3(function(index) {
        //$(this).hide();
    //});
//});
//}); 
      </script> 
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
               <div class=inner cover>
                  <div class=clearfix></div>
               </div>
       
               <!--<input class=search-input cap-tavern-search-hero type='text' value='' name=hero_name id=hero_name autocomplete='off' placeholder='Enter hero name here'>-->
               <input type="search" placeholder="Enter hero name hereeeeeeeeeee" id="top-bar_search">
            <div class=tavern>
               <?php
                  /*** mysql hostname ***/
                  $hostname = 'localhost';
                  
                  /*** mysql username ***/
                  $username = 'root';
                  
                  /*** mysql password ***/
                  $password = '';
                  
                  try {
                  $dbh = new PDO("mysql:host=$hostname;dbname=dota", $username, $password);
                  
                  $Hashtag = "#";
                  $Value = "";
                  $SQL="SELECT * FROM heroes";
                  $Counter = 0;
                  
                  foreach ($dbh->query($SQL) as $hero)
                      {
                      if ($Counter == 0) {                         
                          echo "<div class=tavern-column tavern-col-left>";
                          echo "STRENGTH <br><br>";
                      }
                      elseif ($Counter == 21) {
                          echo "</div>";
                          echo "<div class=tavern-column tavern-col-middle>";
                          echo "AGILITY <br><br>";
                      }
                      elseif ($Counter == 40) {
                          echo "</div>";                         
                          echo "<div class=tavern-column tavern-col-right>";
                          echo "INTELLIGENCE <br><br>";
                      }
                      elseif ($Counter == 75) {
                          echo "</div>";
                          echo "<div class=tavern-column tavern-col-middle>";           
                      }
                      elseif ($Counter == 91) {
                          echo "</div>";
                          echo "<div class=tavern-column tavern-col-right>";
                      }
                      elseif ($Counter == 60) {
                          echo "</div>";
                          echo "<div class=clearfix></div>";
                          echo "<div class=tavern-column tavern-col-left>"; 
                      }
                  //make each product a link to the next page and pass the product id to the next page by URL
                  //concatenate a string of characters u_prodid which carries the value of the actual id   
              
                      echo "<a id=tavern_hero_".$hero['heroId']." class=tavern-hero data-hero-id=".$hero['heroId']." href=".$Hashtag." data-hero-uri=".$hero['heroURI']." data-hero-name=".$hero['heroName'].">";
                                      echo "<img id=image_hero_".$hero['heroId']." class=tavern-hero-img-small src=Dota-Heroes-Small/".$hero['heroPicSmall'].">";
                  echo "<div class=tavern-hero-action>";
                                              echo "<img class=tavern-hero-img-large true-highligh src=Dota-Heroes-Hover/".$hero['heroPicHover'].">";
                                          echo "</div>";
                  echo "</a>";   
                  
                              $Counter++;               
                      }
                              echo "</div>";
                          echo "<div class=clearfix></div>";
                      echo "</div>";
                      $dbh = null;
                      }
                  catch(PDOException $e)
                      {
                      echo $e->getMessage();
                      }
                  ?>
                     </div>
                </div>
         </div>
      </div>           
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="Styles/assets/js/vendor/jquery.min.js"><\/script>');</script>
      <script src="Styles/dist/js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="Styles/assets/js/ie10-viewport-bug-workaround.js"></script>
   </body>
</html>