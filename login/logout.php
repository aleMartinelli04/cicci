<?php

session_start();
unset($_SESSION['utente']);

header('Location: index.php');
