<?php
use Pet\ErListen\ErListen;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error <?= $code = ErListen::code(); ?></title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
    }

    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #d5d5f3;
        color: #3b3b76;
    }

    span {
        width: 50%;
        height: 1px;
        margin: 10px 0px;
        background: #3b3b76;
    }

</style>

<body>
    <?php if (!isset($dump)) : ?>
        <h1><?= $code;  ?></h1>
        <span></span>
        <h2><?= ErListen::text($code); ?></h2>
    <?php else : ?>
     <pre>
        <?=print_r($dump); ?>
    </pre>
    <?php endif ?>
</body>

</html>