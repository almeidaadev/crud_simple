
<?php

require __DIR__ . "/../Database/Connection.php";

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
        // 2. Prepare the SQL statement with named placeholders
        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        $stmt = $pdo->prepare($sql);

        $data = [
            ':name' => $name,
            ':email' => $email,
            ':password' => $password
        ];

        if ($stmt->execute($data)) {
            echo json_encode("New record created successfully. Last inserted ID: " . $pdo->lastInsertId());
        } else {
            echo json_encode("Error inserting data.");
        }
        echo json_encode("Creating");
        break;

    default:
        echo json_encode([
            "status" => false,
            "message" => "Ação inválida"
        ]);
        break;
}
