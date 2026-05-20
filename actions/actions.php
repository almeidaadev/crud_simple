
<?php
if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"])) {
    echo json_encode("Campos vazios");
} else{
    echo json_encode("campos completos");
}
