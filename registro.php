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

        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE tel = :tel LIMIT 1');
        $statement->execute(array(':tel' => $telephone));

        $statement->execute(array(':tel' => $telephone));
        
        $resultado = $statement->fetch();

        if ($resultado != false) {
            $errores .= '<li>Este numero de telefono ya esta registrado por favor intenta de nuevo</li>';
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
    
    if (!$errores) {
        $enviar_a = 'vecycolombia@gmail.com';
        $asunto = "$first_name, acaba de registrarse Vecy";

        $mensaje_preparado = "Hola Vecy, $first_name coloco sus datos personales en el formulario de registros para personas";
                              
        $mensaje_preparado .= "Nombre completo: $first_name $last_name,
                               Ciudad de residencia: $ciudad,
                               Localidad: $location,
                               Barrio: $barrio,
                               Dirección: $address_personal,
                               Correo de contacto: $email,
                               Telefono de contacto: $tel
                            ";

        mail($enviar_a, $asunto, $mensaje_preparado);

        $asunto_user = "¡Hola $first_name, Bienvenido a Vecy!";
        $mensaje_user = "Hola $first_name $last_name, nos alegramos mucho de que te hayas unido a esta nueva familia.
                        Si encuentras algún error por favor avisanos.
                        Recuerda seguirnos en redes sociales";
        mail($email, $asunto_user, $mensaje_user);
        
        $enviado = true;
    }
    
}

require ('headers/header-registro.php');

?>

<div class="container">
    <div class="row">
        <div class="col s1 m1 l3 xl3">
            <div class="center-align">
                <!-- Esto sirve para centrar de manera bonita el fomulario, perdón dioses del diseño web -->
            </div>
        </div>
        <div class="col s12 m10 l6 xl6">
            <div class="card-panel center-align">
                <div class="row">
                <h3>Registrate en Vecy</h3>
                    <form class="col s12" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="login">
                        <div class="row">
                            <div class="input-field col s12 m12 l12 xl12">
                                <i class="far fa-id-badge prefix"></i>
                                <input id="first_name" type="text" name="first_name" class="validate">
                                <label for="first_name">Nombre</label>
                            </div>
                            <div class="input-field col s12 m12 l12 xl12">
                                <i class="far fa-id-badge prefix"></i>
                                <input id="last_name" type="text" name="last_name" class="validate">
                                <label for="last_name">Apellido</label>
                            </div>
                            <div class="input-field col s12 m12 l12 xl12">
                                <i class="material-icons prefix">mail</i>
                                <input id="email" type="email" name="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12 m12 l12 xl12">
                                <i class="fas fa-lock prefix"></i>
                                <input id="pass" type="password" name="pass" class="validate">
                                <label for="pass">Password</label>
                            </div>
                            <div class="input-field col s12 m12 l12 xl12">
                                <i class="fas fa-lock prefix"></i>
                                <input id="pass2" type="password" name="pass2" class="validate">
                                <label for="pass2">Repite tu Password</label>
                            </div>
                            <div class="input-field col s12 m6 l6 xl6">
                            <i class="far fa-id-badge prefix"></i>
                                <input id="tel" type="tel" name="tel" class="validate">
                                <label for="tel">Telefono</label>
                            </div>
                            <div class="col s12 m6 l6 xl6">
                                <label for="genre" id="genre" value="genre">Selecciona tu genero</label>
                                <p>                                   
                                    <input name="genre" type="radio" id="men" value="men"/>
                                    <label for="men">Hombre</label>
                                    <i class="fas fa-mars prefix"></i>
                                </p>                                
                                <p>
                                    <input name="genre" type="radio" id="women" value="women"/>
                                    <label for="women">Mujer</label>
                                    <i class="fas fa-venus prefix"></i>
                                </p>                                
                            </div>


                            <div class="input-field col s12">
                                <i class="fas fa-map-marker-alt prefix"></i>
                                <input id="ciudad" type="text" name="ciudad" class="validate">
                                <label for="ciudad">Ciudad</label>
                            </div>

                            <div class="input-field col s12">
                                <i class="fas fa-map-marker-alt prefix"></i>
                                <input id="location" type="text" name="location" class="validate">
                                <label for="location">Localidad</label>
                            </div>

                            <div class="input-field col s12">
                                <i class="fas fa-map-marker-alt prefix"></i>
                                <input id="barrio" type="text" name="barrio" class="validate">
                                <label for="barrio">Barrio</label>
                            </div>                          

                            <div class="input-field col s12 m12 l12 xl12">
                                <i class="fas fa-map-marked prefix"></i>
                                <textarea id="address_personal" type="address_personal" name="address_personal" class="materialize-textarea"></textarea>
                                <label for="address_personal">Dirección</label>
                            </div>

                            <?php if(!empty($errores)): ?>
                            <div class="red-text">
                                <ul>
                                    <?php echo $errores; ?>
                                </ul>
                            </div>
                           <?php endif; ?>

                           <div class="input-field col s12">
                                <p>Al enviar tus datos, aceptas los <a href="terminos">Términos y condiciones generales</a>
                                 y reconoces que leíste la <a href="privacidad">Política de privacidad</a>.</p>
                            </div>

                            <div class="input-field col s12 m12 l12 xl12">
                                <div class="col s12 m12 l12 xl12 center-align ">
                                    <!-- <a type="input" value="" type="submit" class="btn orange z-depth-2">registrarse</a> -->
                                    <input type="submit" value="Resgistrarse" type="submit" class="btn orange whot-text"> 
                                    <!-- <input type="submit" value="subir foto" class="btn deep-purple">  -->
                                    <!-- <a class="btn" onclick="login.submit()">Registrate!</a> -->
                                </div>
                                <!-- <button id="input_9" type="submit" class="btn red accent-4" data-component="button">
                                Enviar Correo
                                </button> -->
                            </div>       

                            

                            <div class="col s12 m12 l12 xl12 ">
                                <p class="center-align">Ya tienes cuenta?</p>
                                <a href="index"><u>Inicia sesion</u></a>
                            </div>                    
                                                    
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col s1 m1 l3 xl3">
            <div class="center-align">
                <!-- Esto sirve para centrar de manera bonita el fomulario, perdón dioses del diseño web -->
            </div>
        </div>
    </div>
</div>


<?php

require ('footers/footer.php');

?>