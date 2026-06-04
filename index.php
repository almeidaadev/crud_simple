<?php require __DIR__ . "/pages/header.php"; ?>

<?php

$page = $_GET["page"] ?? "home";

$path = __DIR__ . "/pages/" . $page . ".php";

if (!file_exists($path)) return "Page don't exist";

switch ($page) {
    case "delete":
        require $path;
        break;

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

<?php require __DIR__ . "/pages/footer.php"; ?>
