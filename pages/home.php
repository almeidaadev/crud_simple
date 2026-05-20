<?php

session_start();
$lang = $_GET["lang"];
$_SESSION["lang"] = $lang;
var_dump($_SESSION);
?>

<h1>Home</h1>
<a href="?lang=pt_br">Português</a>
<a href="?lang=en">English</a>
<a href="pages/create.php">Create</a>