<?php
$nome = filter_input(INPUT_POST, 'nome');
$password = filter_input(INPUT_POST, 'password');

require_once 'db.php';
$utente = getUtenteByNome($nome);

if (!$utente) {
    echo "Utente con nome non trovato";

} else if ($utente['password'] != $password) {
    echo "Le password non corrispondono";

} else {
    session_start();
    $_SESSION['utente'] = $utente['id'];

    header('Location: home.php');
}
