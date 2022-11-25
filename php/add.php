<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавление</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<?php

print <<<EOT

<form class="row g-3" action="adds.php" method="POST" id="data" name="formsAdd">

    <div class="flex-flow: column wrap">
        <div class="col-auto">
            <input type="text" name="rest2" class="form-control" id="komu" placeholder="Кому или куда">
        </div>
        <div class="col-auto">
            <input type="text" name="predmet" class="form-control" id="lesson" placeholder="Предмет">
        </div>
        <div class="col-auto">
            <input type="text" name="summ_r" class="form-control" id="summ_r" placeholder="Сумма в рублях">
        </div>
        <div class="col-auto">
            <input type="date"  name="date_sbor" class="form-control" id="date_sbor" placeholder="Дата">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3" id="submB">Записать в базу</button>
        </div>
    </div>
</form>
</body>
</html>
EOT;
?>




