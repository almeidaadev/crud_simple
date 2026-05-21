
<?php

header("Content-Type: application/json");
if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"])) {
    echo json_encode("Campos vazios");
    exit();
}

$action = $_POST["action"] ?? null;

if (!$action) {
    echo json_encode("Não existe ação");
    exit();
}

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

switch ($action) {
    case "create":
        echo json_encode("Creating");
        break;

    default:
        echo json_encode([
            "status" => false,
            "message" => "Ação inválida"
        ]);
        break;
}
