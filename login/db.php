<?php
function getPDO()
{
    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ];

    $dns = "mysql:host=localhost;dbname=cicci;charset=utf8mb4;";

    return new PDO($dns, 'root', '', $options);
}

function getUtenteByNome($nome)
{
    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT * FROM utente WHERE nome=?");
    $stmt->execute([$nome]);

    return $stmt->fetch();
}

function getUtente($id)
{
    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT * FROM utente WHERE id=?");
    $stmt->execute([$id]);

    return $stmt->fetch();
}