<?php
require_once 'db.php';
$animali = getAnimali();
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tabella animali</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="d-flex min-vh-100 align-items-center">
    <div class="container-fluid text-center">
        <table class="table">
            <thead>
            <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Gabbia</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($animali as $animale): ?>
                <tr>
                    <td><?= $animale['id'] ?></td>
                    <td><?= $animale['nome'] ?></td>
                    <td><?= $animale['gabbia'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
