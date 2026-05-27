<h1>Delete page</h1>
<?php
require "./Database/Connection.php";

$stmt = $pdo->query("SELECT * FROM users");

?>

<ol>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
        <li>
            <a class="deleting" data-id="id=<?= $row["user_id"]; ?>"><?= $row["name"] . "<br>"; ?></a>
        </li>
    <?php endwhile; ?>

</ol>