<?php

function __(mixed $key) {
    $lang = $_SESSION["lang"] ?? "pt_br";

    $path = __DIR__ . "/../langs/" . $lang . ".php";

    if (!file_exists($path)) return $key;

    $arrLang = require $path;

    return $arrLang[$key];
}