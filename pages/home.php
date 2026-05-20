<?php

session_start();
$lang = $_GET["lang"];
$_SESSION["lang"] = $lang;
?>

<h1>Home</h1>
<a href="?lang=pt_br">Português</a>
<a href="?lang=en">English</a>
<a href="?page=create">Create</a>