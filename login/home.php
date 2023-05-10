<?php
session_start();

if (!isset($_SESSION['utente'])) {
    header('Location: index.php');
}

require_once 'db.php';
$utente = getUtente($_SESSION['utente']);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="d-flex min-vh-100 align-items-center">
    <div class="container-fluid text-center">
        <div>
            <b>Ciao, <?= $utente['nome'] ?></b>
        </div>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</div>
</body>
</html>