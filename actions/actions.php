
<?php
header('Content-Type: application/json');
require __DIR__ . "/../Database/Connection.php";

$action = $_POST["action"] ?? $_GET["action"] ?? null;

if (!$action) {
    echo json_encode([
        "status" => false,
        "message" => "Ação inválida"
    ]);
    exit();
}

switch ($action) {
    case "delete":
        $id = $_GET["id"];

        $stmt = $pdo->prepare("DELETE FROM users WHERE user_id = ?");

        $stmt->execute([$id]);

        echo json_encode(" record(s) deleted.");

        break;
    case "create":
        if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"])) {
            echo json_encode([
                "status" => false,
                "message" => "Todos os campos são obrigatorios"
            ]);
            exit();
        }

        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // 2. Prepare the SQL statement with named placeholders
        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        $stmt = $pdo->prepare($sql);

        $data = [
            ':name' => $name,
            ':email' => $email,
            ':password' => $password
        ];

        if ($stmt->execute($data)) {
            echo json_encode([
                "status" => true,
                "message" => "New record created successfully."
            ]);
        } else {
            echo json_encode([
                "status" => true,
                "message" => "Error inserting data."
            ]);
        }
        break;

    default:
        echo json_encode([
            "status" => false,
            "message" => "Ação inválida"
        ]);
        break;
}
