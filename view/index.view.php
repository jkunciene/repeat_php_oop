<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

use Users\User;

$user1 = new User("Jolita", "jolita@gmail.com", "mokinys");
$user1->addDescription("labai gera")

?>
<ul>
    <?php foreach ($user1->showInfo() as $value): ?>
        <li><?=$value; ?></li>
    <?php endforeach;?>

</ul>
</body>
</html>