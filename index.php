<?php

session_start();

$categorias = array('Abastos y viveres',
                    'Panaderias y pastelerias',
                    'Tecnología', 'Ropa y accesorios',
                    'Salud y Bienestar', 'Entretenimiento y ocío',
                    'Restaurante', 'Ferreterias', 'Automotriz',
                    'Corte y confección', 'Academias', 
                    'Postres y fruterias', 'Fotos estudios',
                    'Casas comerciales (Compra y venta)', 'Papelerias',
                    'variedades y regalos (Cacharrerias)', 'Lavanderias',
                    'Cigarrerias', 'Utensilios desechableas', 'Remontadoras y zapaterias',
                    'Deportes y tiempo libre', 'Belleza', 'Mascotas'
            );

// $ingresar = 'ingresar';
// $perfil = 'perfil';
// $cerrar = 'cerrar';
// $nombre = 'Carlos';

// if (isset($_SESSION['usuario'])) {
//   header('Location: index.php');
//   echo $perfil . $cerrar;
// } 

// if (!isset($_SESSION['usuario'])) {
//   echo 'No has iniciado sesion';
// } else {
//   echo $perfil;
// }

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = $_POST['pass'];
    $password = hash('sha3-512', $password);

    try {
      $conexion = new PDO('mysql:host=localhost;dbname=vecy', 'root', '');
    } catch (PDOexception $e) {
      echo "Error: ". $e->getMessage();
    }

    $statement = $conexion->prepare(
      'SELECT * FROM usuarios WHERE email = :email AND pass = :pass');
      $statement->execute(array(
        ':email' => $email,
        ':pass' => $password
      ));

      $resultado = $statement->fetch();
      // print_r($resultado);
      // echo "$email - $password";

      if ($resultado != false) {
          $_SESSION['email'] = $email;
          header('Location:  index.php');
          // echo "Datos correctos";
        } else {
          $errores .= '<li>Tus datos son incorrectos</li>';
        }
}

  require ('views/index.view.php');
?>           

