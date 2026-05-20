<?php
require __DIR__ . "/../helpers/functions.php";
session_start();
?>

<h1><?= __("h1_create") ?></h1>


<form method="POST">
    <label for="name"><?= __("label_name") ?></label>
    <input type="text" name="name" id="name" placeholder="<?= __("name_placeholder") ?>">

    <label for="email"><?= __("label_email") ?></label>
    <input type="text" id="email" name="email" placeholder="<?= __("email_placeholder") ?>">

    <label for="password"><?= __("label_password") ?></label>
    <input type="text" id="password" name="password" placeholder="<?= __("password_placeholder") ?>">

    <button type="submit"><?= __("button_form") ?></button>
</form>