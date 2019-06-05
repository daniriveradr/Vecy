<<<<<<< HEAD
<?php

session_start();

// require 'administrador/config.php';

//   require 'functions.php';

// if (isset($_SESSION['usuario'])) {
//     header('Location: index.php');
// }

// $errores = '';


// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_EMAIL);
//     $password = $_POST['pass'];
//     $password = hash('sha3-512', $password);

//     try {
//       // $conexion = new PDO('mysql:host=localhost;dbname=vecy', 'root', '');
//       // Conexion a web host
//       $conexion = new PDO('mysql:host=localhost;dbname=id9399363_vecy', 'id9399363_daniriveradr', 'daniel1998');
//     } catch (PDOexception $e) {
//       echo "Error: ". $e->getMessage();
//     }

//     $statement = $conexion->prepare(
//       'SELECT * FROM usuarios WHERE email = :email AND pass = :pass');
//       $statement->execute(array(
//         ':email' => $email,
//         ':pass' => $password
//       ));

//       $resultado = $statement->fetch();
//       // print_r($resultado);
//       // echo "$email - $password";

//       if ($resultado != false) {
//           $_SESSION['email'] = $email;
//           header('Location:  index.php');
//           // echo "Datos correctos";
//         } else {
//           $errores .= '<li>Tus datos son incorrectos</li>';
//         }
// }

  

  require 'views/index.view.php';  
  
?>           

=======
<?php

session_start();

// require 'administrador/config.php';

//   require 'functions.php';

// if (isset($_SESSION['usuario'])) {
//     header('Location: index.php');
// }

// $errores = '';


// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_EMAIL);
//     $password = $_POST['pass'];
//     $password = hash('sha3-512', $password);

//     try {
//       // $conexion = new PDO('mysql:host=localhost;dbname=vecy', 'root', '');
//       // Conexion a web host
//       $conexion = new PDO('mysql:host=localhost;dbname=id9399363_vecy', 'id9399363_daniriveradr', 'daniel1998');
//     } catch (PDOexception $e) {
//       echo "Error: ". $e->getMessage();
//     }

//     $statement = $conexion->prepare(
//       'SELECT * FROM usuarios WHERE email = :email AND pass = :pass');
//       $statement->execute(array(
//         ':email' => $email,
//         ':pass' => $password
//       ));

//       $resultado = $statement->fetch();
//       // print_r($resultado);
//       // echo "$email - $password";

//       if ($resultado != false) {
//           $_SESSION['email'] = $email;
//           header('Location:  index.php');
//           // echo "Datos correctos";
//         } else {
//           $errores .= '<li>Tus datos son incorrectos</li>';
//         }
// }

  

  require 'views/index.view.php';  
  
?>           

>>>>>>> 56e3f51a5ab765163440b6f48f31e4ccd65c35f8
