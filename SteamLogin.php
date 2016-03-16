<!DOCTYPE html>
<html>
<head>
        <title>Steam</title>
</head>
<body>
<?php
        require 'lightopenid/openid.php'; //Makes sure the openid.php file exists. It's an API that is used to run Steam's API
        include_once("db.php"); //Include the database
 
        $_STEAMAPI = "FC4CFDCEDA4CF85F89381E2EDDB36BF7"; //Setting a variable for the Steam API key
        try {
            /*Create a new object of LighOpenId, which is made within the openid.php file and redirects the user to the URL in the brackets
            after they have logged in succesfully*/
            $openid = new LightOpenID('index.html'); 
            if(!$openid->mode) //If mode is not set for the openID object
                {
                if(isset($_GET['login'])) //This if statement checks if the login is sent from the URL bar
                    {
                    /*Whatever is done in this if statement will be returned back to the URL*/
                    $openid->identity = 'http://steamcommunity.com/openid/?l=english';
                    header('Location: ' . $openid->authUrl());
                } else {
                echo "<h2>Connect to Steam</h2>";
                                echo "<form action='?login' method='post'>";
                                echo "<input type='image' src='http://cdn.steamcommunity.com/public/images/signinthroughsteam/sits_small.png'>";
                                echo "</form>";
                }
            } elseif($openid->mode == 'cancel') {
                /*If the mode equals to "cancel", that means the user has canceled the authentication*/
                echo 'User has canceled authentication!';
            } else {
                /*If the user has logged in succesfully, the following code is executed. The mode is validate*/
                if($openid->validate()) {
                $id = $openid->identity;
                $ptn = "/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/"; //Checks through the strings that everything works
                preg_match($ptn, $id, $matches); //Used to get the user's matches and set the URL
                
                /*Fetches the user's summary, such as their nickname and avatar. Passwords are not fetched, since the API is public not for private data.
                 To the URL is passed the Steam API key which is stored in the variable $_STEAMAPI, and will check for the first match
                after the user has logged in with steam*/
                $url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$_STEAMAPI&steamids=$matches[1]"; 
                $json_object= file_get_contents($url); //Fethces the contents that are stored in the URL ($url)
                $json_decoded = json_decode($json_object); /*Decodes the contents of the URL, because if we are to access that URL directly
                we would receive a Json file, which is unreadable text laid out in a table to represent all the data for the user account*/
                
                /*The foreach loop goes through the data stored in the json file and stores it in the database*/
                foreach ($json_decoded->response->players as $player)
                {
                        $sql_fetch_id = "SELECT * FROM users_steam WHERE steamid = '$player->steamid'";
                                        $query_id = mysqli_query($db, $sql_fetch_id);
 
                                        $_SESSION['name'] = $player->personaname;
                                        $_SESSION['steamid'] = $player->steamid;
                        $_SESSION['avatar'] = $player->avatar;
 
                                        if (mysqli_num_rows($query_id) == 0) {
                                                $sql_steam = "INSERT INTO users_steam (name, steamid, avatar) VALUES  ('$player->personaname', '$player->steamid', '$player->avatar')";
                                                mysqli_query($db, $sql_steam);
                                        }
                }
                } else {
                                echo "User is not logged in.\n";
                }
            }
        } catch(ErrorException $e) {
            echo $e->getMessage();
        } //catches any error ($e) that occur when the try section is attempted
        ?>
</body>
</html>