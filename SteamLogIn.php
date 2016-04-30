<?php
require 'lightopenid/openid.php'; //Makes sure the openid.php file exists. It's an API that is used to run Steam's API
/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = '';

try {
    $dbh       = new PDO("mysql:host=$hostname;dbname=dota", $username, $password);
    $_STEAMAPI = "FC4CFDCEDA4CF85F89381E2EDDB36BF7"; //Setting a variable for the Steam API key
    try {
        /*Create a new object of LighOpenId, which is made within the openid.php file and redirects the user to the URL in the brackets
        after they have logged in succesfully*/
        $openid = new LightOpenID('localhost');
        if (!$openid->mode) //If mode is not set for the openID object
            {
            if (isset($_GET['login'])) //This if statement checks if the login is sent from the URL bar
                {
                /*Whatever is done in this if statement will be returned back to the URL*/
                $openid->identity = 'http://steamcommunity.com/openid/?l=english';
                header('Location: ' . $openid->authUrl());
            } else {
                function SteamLogInBtn()
                {
                    echo "<div class=steamButton>";
                    echo "<form action='?login' method='post' class=steamButton>";
                    echo "<input id='steam' type='image' src='http://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_large_border.png'>";
                    echo "</form>";
                    echo "</div>";
                }
            }
        } elseif ($openid->mode == 'cancel') {
            /*If the mode equals to "cancel", that means the user has canceled the authentication*/
            echo 'User has canceled authentication!';
        } else {
            /*If the user has logged in succesfully, the following code is executed. The mode is validate*/
            if ($openid->validate()) {
                $id  = $openid->identity;
                $ptn = "/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/"; //Checks through the strings that everything works
                preg_match($ptn, $id, $matches); //Used to get the user's matches and set the URL
                
                /*Fetches the user's summary, such as their nickname and avatar. Passwords are not fetched, since the API is public not for private data.
                To the URL is passed the Steam API key which is stored in the variable $_STEAMAPI, and will check for the first match
                after the user has logged in with steam*/
                $url          = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$_STEAMAPI&steamids=$matches[1]";
                $json_object  = file_get_contents($url); //Fethces the contents that are stored in the URL ($url)
                $json_decoded = json_decode($json_object);
                /*Decodes the contents of the URL, because if we are to access that URL directly
                we would receive a Json file, which is unreadable text laid out in a table to represent all the data for the user account*/
                
                /*The foreach loop goes through the data stored in the json file and stores it in the database*/
                foreach ($json_decoded->response->players as $player) {
                    
                    $result = $dbh->prepare("SELECT count(*) FROM steam_users WHERE steamid = '$player->steamid'");
                    $result->execute();
                    $row_count           = $result->fetchColumn();
                    $_SESSION['name']    = $player->personaname;
                    $_SESSION['steamid'] = $player->steamid;
                    $_SESSION['avatar']  = $player->avatar;
                    
                    if ($row_count == 0) {
                        $sql_steam = "INSERT INTO steam_users (steamid, name, avatar) VALUES  ('$player->steamid', '$player->personaname', '$player->avatar')";
                        $query_id  = $dbh->query($sql_steam);
                    }
                }
            } else {
                echo "User is not logged in.\n";
            }
            header('Location: HeroBuilder.php');
        }
    }
    catch (ErrorException $e) {
        echo $e->getMessage();
    } //catches any error ($e) that occur when the try section is attempted    
}
catch (PDOException $e) {
    echo $e->getMessage();
}

function SteamLogOffBtn()
{
    echo "<div class=steamButton>";
    echo "<a href='SteamLogOut.php'>";
    echo "<input id='steamLogOff' type='image' src='Buttons/Logout.gif'>";
    echo "</a>";
    echo "</div>";
}
?>