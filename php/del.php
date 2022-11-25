<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Деньги в универ</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>


<?php

require_once ("recordClass.php");

if (isset($_GET)) {
        foreach ($_GET as $item) {
            $id = htmlentities($item);
        }
    }

    $obj = new record_Class(localhost,root,root, univer);
    $strSql = ("DELETE FROM `money` WHERE `id` = $id");
    $newSql=$obj->createResult($strSql,univer,$obj);

?>

<a href="index.php"  class="btn btn-outline-danger bi bi-clipboard-x">Назад</a>
</body>
</html>