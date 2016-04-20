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
      <link href="Styles/css/bootstrap.css" rel="stylesheet">
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <link href="Styles/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>‌​
      <script>window.jQuery || document.write('<script src="Styles/assets/js/vendor/jquery.min.js"><\/script>');</script>
      <script src="Styles/dist/js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="Styles/assets/js/ie10-viewport-bug-workaround.js"></script>
      <!-- Custom styles for this template -->
      <link href="cover.css" rel="stylesheet">
      <script src="Styles/assets/js/ie-emulation-modes-warning.js"></script>
      <script type="text/javascript">
        function changeimg(IMG) {
            var ChangeIMG1 = document.getElementById('ChangingImage-1');
            var ChangeIMG2 = document.getElementById('ChangingImage-2');
            var ChangeIMG3 = document.getElementById('ChangingImage-3');
            var ChangeIMG4 = document.getElementById('ChangingImage-4');
            var ChangeIMG5 = document.getElementById('ChangingImage-5');

            if (ChangeIMG1.src.match("Dota-Heroes-Large/" + IMG.title + "_full.jpg")) {
                ChangeIMG1.src = "Dota-Heroes-Large/.Dota-Logo.jpg";
            } else if (ChangeIMG2.src.match("Dota-Heroes-Large/" + IMG.title + "_full.jpg")) {
                ChangeIMG2.src = "Dota-Heroes-Large/.Dota-Logo.jpg";
            } else if (ChangeIMG3.src.match("Dota-Heroes-Large/" + IMG.title + "_full.jpg")) {
                ChangeIMG3.src = "Dota-Heroes-Large/.Dota-Logo.jpg";
            } else if (ChangeIMG4.src.match("Dota-Heroes-Large/" + IMG.title + "_full.jpg")) {
                ChangeIMG4.src = "Dota-Heroes-Large/.Dota-Logo.jpg";
            } else if (ChangeIMG5.src.match("Dota-Heroes-Large/" + IMG.title + "_full.jpg")) {
                ChangeIMG5.src = "Dota-Heroes-Large/.Dota-Logo.jpg";
            } else if (ChangeIMG1.src.match("Dota-Heroes-Large/.Dota-Logo.jpg")) {
                ChangeIMG1.src = "Dota-Heroes-Large/" + IMG.title + "_full.jpg";
            } else if (ChangeIMG2.src.match("Dota-Heroes-Large/.Dota-Logo.jpg")) {
                ChangeIMG2.src = "Dota-Heroes-Large/" + IMG.title + "_full.jpg";
            } else if (ChangeIMG3.src.match("Dota-Heroes-Large/.Dota-Logo.jpg")) {
                ChangeIMG3.src = "Dota-Heroes-Large/" + IMG.title + "_full.jpg";
            } else if (ChangeIMG4.src.match("Dota-Heroes-Large/.Dota-Logo.jpg")) {
                ChangeIMG4.src = "Dota-Heroes-Large/" + IMG.title + "_full.jpg";
            } else if (ChangeIMG5.src.match("Dota-Heroes-Large/.Dota-Logo.jpg")) {
                ChangeIMG5.src = "Dota-Heroes-Large/" + IMG.title + "_full.jpg";
            }
        }

        function changeimgOriginal(IMG) {
            if (!IMG.src.match("Dota-Heroes-Large/.Dota-Logo.jpg")) {
                IMG.src = "Dota-Heroes-Large/.Dota-Logo.jpg";
            }
        }

        $(document).ready(function() {
            $("#top-bar_search").keyup(function() {
                // Retrieve the input field text 
                var filter = $(this).val();
                $(".data-hero-name").show();
                // Loop through the captions div 
                $(".tavern-hero").each(function() {
                    // If the div item does not contain the text phrase fade it out
                    if ($(this).attr('data-hero-name').search(new RegExp(filter, "gi")) < 0) {
                        $(this).fadeTo("fast", 0.15);
                        // Show the div item if the phrase matches 
                    } else {
                        $(this).fadeTo("fast", 1);
                    }
                });
            });
        });

        $(document).ready(function() {
            $("#Submit").click(function() {
                $(".tavern-alignment").css("display", "none");
                $("#Submit").css("display", "none");
                $("#Clear").css("visibility", "hidden");
                $(".Buttons-Back").css("display", "block");
                $(".ScreenChange").fadeIn(1000, "linear");
            });
        });

        $(document).ready(function() {
            $('.tavern-hero').hover(function() {
                var x = $(this).attr('data-hero-name');
                $(".Name").each(function() {
                    $(this).text(x);
                });
            });
        });
      </script> 
   </head>
   <body>
      <div class="site-wrapper">
         <div class="site-wrapper-inner">
            <div class="cover-container">
               <div class="inner">
                   <div class="masthead-brand"><img src="Buttons/Logo.gif"></div>
                  <nav>
                     <ul class="nav masthead-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Build a Team</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                     </ul>
                  </nav>
               </div>
               <div class="inner cover">
                  <div class="clearfix"></div>
               </div>
               <br><br><br>
               <div class="Name">Hero Name</div>
               <div class="form-group">
                  <input type="text" class="form-control" placeholder="Enter hero name here" id="top-bar_search">
               </div>
               <br><br><br><br><br>      
               <div class="buttonMargin">
                  <a id="Submit" href="#" class="Buttons">
                  <img src="Buttons/Submit.png">
                  </a>
                  <a id="Back" href="#" class="Buttons-Back">
                  <img src="Buttons/Clear.png">
                  </a>
                  <a id="Clear" href="#" class="Buttons">
                  <img src="Buttons/Clear.png">
                  </a>
               </div>
               <img id="ChangingImage-1" class="ChangingImage" src="Dota-Heroes-Large/.Dota-Logo.jpg" onclick="changeimgOriginal(this);">
               <img id="ChangingImage-2" class="ChangingImage" src="Dota-Heroes-Large/.Dota-Logo.jpg" onclick="changeimgOriginal(this);">
               <img id="ChangingImage-3" class="ChangingImage" src="Dota-Heroes-Large/.Dota-Logo.jpg" onclick="changeimgOriginal(this);">
               <img id="ChangingImage-4" class="ChangingImage" src="Dota-Heroes-Large/.Dota-Logo.jpg" onclick="changeimgOriginal(this);">
               <img id="ChangingImage-5" class="ChangingImage" src="Dota-Heroes-Large/.Dota-Logo.jpg" onclick="changeimgOriginal(this);">
               <br><br><br><br>
               <div class="ScreenChange">
                  <p> padspasl </p>
                  <p> padspasl </p>
                  <p> padspasl </p>
                  <p> padspasl </p>
                  <p> padspasl </p>
                  <p> padspasl </p>
               </div>
               <div class="tavern-alignment">
                  <div class="tavern">                     
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
                                echo "<div class=Attribute style=color:#cc0000><b>STRENGTH</b></div> <br>";
                            }
                            elseif ($Counter == 21) {
                                echo "</div>";
                                echo "<div class=tavern-column tavern-col-middle>";
                                echo "<div class=Attribute style=color:#00cc00><b>AGILITY</b></div> <br>";
                            }
                            elseif ($Counter == 40) {
                                echo "</div>";                         
                                echo "<div class=tavern-column tavern-col-right>";
                                echo "<div class=Attribute style=color:#3399ff><b>INTELLIGENCE</b></div> <br>";
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
                                echo "<div class=tavern-column tavern-col-left>"; 
                            }                      
                           echo "<a id=tavern_hero_".$hero['heroId']." class=tavern-hero data-hero-id=".$hero['heroId']." href=".$Hashtag." title=".$hero['heroURI']." data-hero-name=".$hero['heroName']." onClick=changeimg(this);>";
                               echo "<img id=image_hero_".$hero['heroId']."class=tavern-hero-img-small src=Dota-Heroes-Small/".$hero['heroPicSmall'].">";
                               echo "<div class=tavern-hero-action>";
                                   echo "<img class=tavern-hero-img-large true-highligh src=Dota-Heroes-Hover/".$hero['heroPicHover'].">";
                               echo "</div>";
                           echo "</a>";                     
                                    $Counter++;               
                            }
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
      </div>
   </body>
</html>