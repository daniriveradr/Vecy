<?php

session_start();


if (isset($_SESSION['email'])) {
    require 'views/perfil.view.php';
} else {
    header('Location: registro');
}
    // require ('views/perfil.view.php');

    // Comprobamos si ya han sido enviado los datos

?>