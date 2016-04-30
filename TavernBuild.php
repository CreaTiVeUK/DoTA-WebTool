<?php
/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = '';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=dota", $username, $password);
    
    $Value   = "";
    $SQL     = "SELECT * FROM heroes";
    $Counter = 0;
    foreach ($dbh->query($SQL) as $hero) {
        if ($Counter == 0) {
            echo "<div class=tavern-column tavern-col-left>";
            echo "<div class=Attribute style=color:#cc0000><b>STRENGTH</b></div> <br>";
        } elseif ($Counter == 21) {
            echo "</div>";
            echo "<div class=tavern-column tavern-col-middle>";
            echo "<div class=Attribute style=color:#00cc00><b>AGILITY</b></div> <br>";
        } elseif ($Counter == 40) {
            echo "</div>";
            echo "<div class=tavern-column tavern-col-right>";
            echo "<div class=Attribute style=color:#3399ff><b>INTELLIGENCE</b></div> <br>";
        } elseif ($Counter == 75) {
            echo "</div>";
            echo "<div class=tavern-column tavern-col-middle>";
        } elseif ($Counter == 91) {
            echo "</div>";
            echo "<div class=tavern-column tavern-col-right>";
        } elseif ($Counter == 60) {
            echo "</div>";
            echo "<div class=tavern-column tavern-col-left>";
        }
        echo "<span id=tavern_hero_" . $hero['heroId'] . " class=tavern-hero data-hero-id=" . $hero['heroId'] . " title=" . $hero['heroURI'] . " data-hero-name=" . $hero['heroName'] . " onClick=changeimg(this);>";
        echo "<img id=image_hero_" . $hero['heroId'] . "class=tavern-hero-img-small src=Dota-Heroes-Small/" . $hero['heroPicSmall'] . ">";
        echo "<div class=tavern-hero-action>";
        echo "<img class=tavern-hero-img-large true-highligh src=Dota-Heroes-Hover/" . $hero['heroPicHover'] . ">";
        echo "</div>";
        echo "</span>";
        $Counter++;
    }
    echo "</div>";
    $dbh = null;
}
catch (PDOException $e) {
    echo $e->getMessage();
}
?>