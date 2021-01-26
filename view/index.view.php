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

use Users\Student;
use Users\Show;

$user1 = new Student("Jolita", "jolita@gmail.com", "mokinys", 8);
$user1->addDescription("labai gera");

Show::ShowData($user1->showInfo());
?>

</body>
</html>