<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавление</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<?php
require_once ("recordClass.php");

if (isset($_POST)) {
    foreach ($_POST as $item) {
        $array[] = htmlentities($item);
    }


$obj = new record_Class(localhost,root,root, univer);
    $strSql = "INSERT INTO `money` (`surname_teacher`, `subject`, `summ`, `date`) VALUES ";
    $strSql .= "('$array[0]','$array[1]','$array[2]','$array[3]')";

    $newSql=$obj->createResult($strSql,univer,$obj);


}
?>

<a href="index.php"  class="btn btn-outline-danger bi bi-clipboard-x">Назад</a>
</body>
</html>
