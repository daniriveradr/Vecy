<?php

session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

// Comprobamos si ya han sido enviado los datos
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validamos que los datos hayan sido rellenados
    // strtolower esta funcion va a permitir que que todos los valores sean en minusculas
    // FILTER_SANITIZE_STRING para evitar que inyecten condigo SQL y accedan a las bases de datos
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = $_POST['pass'];
    $password2 = $_POST['pass2'];
    $telephone = $_POST['tel'];
    
    $ciudad = $_POST['ciudad'];
    $location = $_POST['location'];
    $barrio = $_POST['barrio'];
    $address = $_POST['address_personal'];

    $genre = $_POST['genre'];

    // echo "$email . $ciudad . $barrio . $location";

    $errores = '';

    if (empty($email) or empty($password) or empty($password2)) {
        $errores .= '<li>Por favor coloca tus datos correctamente</li>';
    } else {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=vecy', 'root', '');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE email = :email LIMIT 1');
        $statement->execute(array(':email' => $email));
        
        $resultado = $statement->fetch();

        if ($resultado != false) {
            $errores .= '<li>Este correo ya esta registrado por favor intenta de nuevo</li>';
        }

        $password = hash('sha3-512', $password);
        $password2 = hash('sha3-512', $password2);

        // echo "$first_name, $last_name, $email . $password . $password2, $telephone, $genre, $address";

        if ($password != $password2) {
            $errores .= '<li>Las contraseñas no coinciden</li>';
        }

    }

    // Comprobamos si hay errores, sino entonces agregamos el usuario y redirigimos.
	if ($errores == '') {
		$statement = $conexion->prepare(
            'INSERT INTO usuarios (id, first_name, last_name, email, pass, tel, genre, ciudad, location, barrio, address_personal) 
            VALUES (null, :first_name,:last_name, :email, :pass, :tel, :genre, :ciudad, :location, :barrio, :address_personal)
            ');
		$statement->execute(array(
                ':first_name' => $first_name,
                ':last_name' => $last_name,
				':email' => $email,
                ':pass' => $password,
                ':tel' => $telephone,
                ':genre' => $genre,

                ':ciudad' => $ciudad,
                ':location' => $location,
                ':barrio' => $barrio,
                // ':barrio' => $barrio,

                ':address_personal' => $address,
			));

		// Despues de registrar al usuario redirigimos para que inicie sesion.
		header('Location: index.php');
	}
    
}