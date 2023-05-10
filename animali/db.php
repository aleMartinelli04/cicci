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

function getAnimali()
{
    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT * FROM animale");
    $stmt->execute();

    return $stmt->fetchAll();
}

function getGabbie()
{
    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT * FROM gabbia");
    $stmt->execute();

    return $stmt->fetchAll();
}

function inserisciAnimale($nome, $gabbia)
{
    $pdo = getPDO();

    $stmt = $pdo->prepare("INSERT INTO animale(id, nome, gabbia) VALUES (DEFAULT, ?, ?)");
    $stmt->execute([$nome, $gabbia]);

    return $pdo->lastInsertId();
}