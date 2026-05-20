<?php require "./pages/header.php";

?>

<?php

$page = $_GET["page"] ?? "home";

$path = "./pages" . DIRECTORY_SEPARATOR . $page . ".php";

if (!file_exists($path)) return "Page don't exist";

switch ($page) {
    case "create":
        require $path;
        break;

    case "home":
        require $path;
        break;

    default:
        require $path;
        break;
}

?>

<?php require "./pages/footer.php"; ?>