<?php

if (
    empty($_POST["name"]) ||
    empty($_POST["email"]) ||
    empty($_POST["password"])
) {
    echo json_encode([
        "message" => "Preencha todos os campos",
        "success" => true,
    ]);
} 

