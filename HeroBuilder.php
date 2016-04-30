<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DoTA-WebTool</title>
    <link rel="icon" href="Styles/Dota-Logo.jpg">
    <link rel="stylesheet" type="text/css" href="Styles/style.css" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="Styles/bootstrap.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="Styles/cover.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>‌​
    <?php include 'SteamLogIn.php'; ?>
    <script src="Scripts.js"></script>
</head>

<body>
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="inner">
                    <div class="masthead-brand"><img src="Styles/Logo.gif">
                        <br>
                        <br>
                    </div>
                </div>
                <div class="inner cover">
                    <div class="clearfix"></div>
                </div>
                <br>
                <br>
                <div class="Name">Hero Name</div>
                <?php if (!(isset($_SESSION[ 'name']) && $_SESSION[ 'name'] !='' )) { echo SteamLogInBtn(); } else { echo SteamLogOffBtn(); } ?>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter hero name" id="top-bar_search">
                </div>
                <div id="myNav" class="overlay">
                    <div class="overlay-content">
                        <div class="Tutorial-Screen1">
                            <img id="Tutorial" src="Styles/Logo.gif">
                            <br>
                            <br>
                            <p style="font-size:30px ; color:#C0C0C0; font-family: Droid Serif;"> ADVANCED IDEOLOGIES AND THEORYCRAFTING
                                <p>
                                    <p style="font-size:50px ; color:#C0C0C0; font-family: Droid Serif;"> TUTORIAL </p>
                                    <div class="overlay-content2">
                                        Dota Web-Tool is a service that allows players to learn overpowered hero
                                        <br> picking strategies and ideas on how to befit their favourite heroes. This tutorial
                                        <br> will show you how to use this site and get the most from the Dota Web-Tool.
                                        <br> If you would like to dive into it immediately, please click 'Exit Tutorial'.
                                    </div>
                                    <br>
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img id="ExitTutorialButton" src="Buttons/ExitTutorial.png">
                                    </a>
                                    <br>
                                    <a class="Nextbtn"><img id="Next" src="Buttons/Next.png">
                                    </a>
                        </div>
                        <div class="Tutorial-Screen2">
                            <p style="font-size:42px; color:#C0C0C0; font-family: Droid Serif;"> SELECT YOUR TEAM </p>
                            <br>
                            <img style="margin-top: -20px;" id="Step2" src="Styles/Step1.png">
                            <div class="overlay-content2-Screen2">
                                Select from the list, the heroes you would like to learn something new about.
                                <br> The more heroes you select the more combinations and knowledge you will receive.
                                <br> You do not need to select all five heroes but you will get the best results
                                <br> if you do. Can't find a specific hero? Use the search feature at the top.
                                <br> Once you are done making your selections, click the submit button.
                            </div>
                            <br>
                            <a href="javascript:void(0)" class="closebtn2" onclick="closeNav()"><img id="ExitTutorialButton" src="Buttons/ExitTutorial.png">
                            </a>
                            <a class="Backbtn"><img id="Back2" src="Buttons/Previous.png">
                            </a>
                            <a class="Nextbtn2"><img id="Next2" src="Buttons/Next.png">
                            </a>
                        </div>
                        <div class="Tutorial-Screen3">
                            <p style="font-size:42px ; color:#C0C0C0; font-family: Droid Serif;"> SUBMIT AND LEARN </p>
                            <br>
                            <img style="margin-top: -20px;" id="Step3" src="Styles/Step2.png">
                            <div class="overlay-content2-Screen3">
                                A list of combinations and descriptions will be returned of the heroes submitted.
                                <br> The combinations will go into detail on how to effectively apply the strength
                                <br> of the combo and the description of the heroes will describe how to play
                                <br> properly each hero in order to achieve maximum results.
                            </div>
                            <br>
                            <a href="javascript:void(0)" class="closebtn3" onclick="closeNav()"><img id="ExitTutorialButton" src="Buttons/ExitTutorial.png">
                            </a>
                            <a class="Backbtn2"><img id="Back3" src="Buttons/Previous.png">
                            </a>
                        </div>
                        <div class="About">
                            <p style="font-size:42px ; color:#C0C0C0; font-family: Droid Serif;"> ABOUT </p>
                            <div class="overlay-content2-Screen4">
                                Dota Web-Tool was designed to give players, both experienced and new, a
                                <br> perspective to hero combinations and hero building. With so many playable
                                <br> characters in the game, the knowledge of their opportunities can be
                                <br> critical but also difficult to understand. In order to use this website,
                                <br> start by choosing any heroes you like. Dota Web-Tool does not require you to
                                <br> fill in all five slots but will show you more information about them, as well
                                <br> as interesting combinations between them.
                                <br>
                                <br> All images not created explicitly for this website are a trademark of valve.
                                <br> Most of the guides are referenced from the TruePicker website.
                                <br>
                                <br> Disclaimer: this website does not guarantee victory, the better players
                                <br> will still overpower lesser players even at disadvantage.
                            </div>
                            <br>
                            <a href="javascript:void(0)" class="closebtn4" onclick="closeNav()"><img id="ExitTutorialButton" src="Buttons/ExitAbout.png">
                            </a>
                        </div>
                    </div>
                </div>
                <span class="ButtonTutorial"><img id="Tutorial" src="Buttons/Tutorial.png" onclick="openNavTutorial();"></span>
                <br>
                <br>
                <div class="buttonMargin">
                    <span id="Submit" class="Buttons">
                  <img src="Buttons/Submit.png">
                  </span>
                    <span id="Submit2" class="DimmedButtons">
                  <img src="Buttons/Submit2.png">
                  </span>
                    <span id="Back" class="Buttons-Back">
                  <img src="Buttons/Back.png">
                  </span>
                    <span id="Clear" class="Buttons">
                  <img src="Buttons/Clear.png" onclick="ClearImages();">
                  </span>
                    <span id="Clear2" class="DimmedButtons">
                  <img src="Buttons/Clear2.png">
                  </span>
                </div>
                <div class="PickImages">
                    <img id="ChangingImage-1" class="ChangingImage" src="Styles/Dota-Logo.jpg" onclick="changeimgOriginal(this);">
                    <img id="ChangingImage-2" class="ChangingImage" src="Styles/Dota-Logo.jpg" onclick="changeimgOriginal(this);">
                    <img id="ChangingImage-3" class="ChangingImage" src="Styles/Dota-Logo.jpg" onclick="changeimgOriginal(this);">
                    <img id="ChangingImage-4" class="ChangingImage" src="Styles/Dota-Logo.jpg" onclick="changeimgOriginal(this);">
                    <img id="ChangingImage-5" class="ChangingImage" src="Styles/Dota-Logo.jpg" onclick="changeimgOriginal(this);">
                </div>
                <br>
                <br>
                <br>
                <span id="HeroInfo" class="ScreenChange"></span>
                <div class="tavern-alignment">
                    <div class="tavern">
                        <?php include 'TavernBuild.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <p>Powered by <a href="http://steampowered.com">Steam</a>&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" id="About" onclick="openNavAbout()">About</a>&nbsp;&nbsp;&nbsp;<a href="mailto:simeon.penev@my.westminster.ac.uk">Contact us</a>
    </p>
</footer>

</html>