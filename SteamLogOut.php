<?php
session_start();
session_destroy();
header('Location: HeroBuilder.php');
exit;
?>