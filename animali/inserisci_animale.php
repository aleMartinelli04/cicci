<?php
require_once 'db.php';

$gabbie = getGabbie();
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inserisci Gabbia</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="d-flex min-vh-100 align-items-center">
    <div class="container-fluid text-center">
        <div class="w-75 m-auto">
            <form method="post" action="salva_animale.php">
                <label for="nome">Inserisci nome</label>
                <input type="text" name="nome" id="nome" class="form-control">

                <br>

                <label for="gabbia">Seleziona gabbia</label>
                <select id="gabbia" name="gabbia" class="form-control">
                    <option selected disabled>Seleziona gabbia</option>
                    <?php foreach ($gabbie as $gabbia): ?>
                        <option value="<?= $gabbia['id'] ?>">
                            <?= $gabbia['nome'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <br>

                <button type="submit" class="btn btn-danger">Invia</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
