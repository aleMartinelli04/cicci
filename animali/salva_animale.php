<?php
$nome = filter_input(INPUT_POST, 'nome');
$gabbia = filter_input(INPUT_POST, 'gabbia');

if (!$nome || !$gabbia) {
    echo "Inserire tutti i dati";
    die();
}

require_once 'db.php';
$id = inserisciAnimale($nome, $gabbia);

header('Location: animali.php');