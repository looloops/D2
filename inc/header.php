<?php
include_once __DIR__ . '\constants.php';
include_once __DIR__ . '\translations.php';
include_once __DIR__ . '\db.php';


// $cookie_expiration = time() + 60 * 60 * 24 * 365 * 10; // 10 anni
// determinare la lingua scelta nel cookie
if (!isset($_COOKIE['language'])) {
    setcookie('language', 'it');
    $language = 'it';
} else {
    $language = $_COOKIE['language'];
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<header>
    <form class="w-50" action="<?= SITE_URL . '/inc/change-language.php' ?>" method="get">
        <<select name="language" class="form-select " aria-label="Default select example">
            <option value="it" <?= $language === 'it' ? ' selected' : '' ?>>IT</option>
            <option value="en" <?= $language === 'en' ? ' selected' : '' ?>>EN</option>
            </select>
            <button class="btn btn-primary"><?= $labels[$language]['save_btn'] ?></button>
    </form>
</header>