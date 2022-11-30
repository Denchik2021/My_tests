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

require_once("recordClass.php");

print_r("<h1 class='text-center text-2xl font-bold'>Деньги в универ с 01.10.2022</h1>");

print <<<EOT
<form class="row g-3" action="add.php">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-primary me-md-2" type="submit">Добавить запись</button>
</div>
</form>
    <table class="table table-bordered table-responsive-md table-hover ">
        <thead class="table-info">
             <tr>
EOT;

foreach (record_Class::returnNamefields() as $key => $value) {
    print_r("<th>". $value . "</th>");
}
print_r("</thead>");

    $strSql = "SELECT * FROM money";

$obj = new record_Class(localhost,root,root, univer);
$strSql = "SELECT * FROM `money`";
$newSql=$obj->createResult($strSql,univer,$obj);
print_r("<form action=del.php method='get'>");
    while ($row = $obj->getRow()) {
        print_r ('<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td>');
        print_r ('<td>'.$row[3].'</td><td>'.$obj->changeDateFormat($row[4],'d-m-Y').'</td>');
        print_r ('<td><a href="del.php?id='.$row[0].'" type="submit" name="href" id="href" 
                class="btn btn-outline-danger bi bi-clipboard-x">Убрать</a></td>');

    }

    $strSql = "SELECT SUM(`summ`) FROM `money`";
    $newSql=$obj->createResult($strSql,univer,$obj);
        print_r("</tr><tr>");
        print_r('<td colspan="2"></td>');
        print_r('<td>ИТОГО:</td>');

        if ($row = $obj->getRow()) {
            print_r('<td class="fw-bold">'. $row[0].'</td>');
        }

        print_r('<td colspan="2"></td>');

print_r('</tr>');
print_r("</form>");
print_r("</tbody>");
print_r("</table></div>");

?>
</body>
</html>