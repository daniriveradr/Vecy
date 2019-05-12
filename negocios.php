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


$subcategorias = array('Carnicerias',
                    'Supermercados',
                    'A granel', 'Ropa y accesorios',
                    'Salsamentarias', 'Celulares y accesorios',
                    'Zapatos y tenis', 'Ropa deportiva', 'Ropa interior',
                    'Ropa hombre y mujer', 'Dizfraces', 
                    'Relojeria', 'Productos de belleza',
                    'Drogueria', 'Odontología',
                    'Centro optico', 'Tienda naturista',
                    'Casino', 'Cerveceria', 'Bar',
                    'Asadero', 'Restaurante',
                    'Pizzeria', 'Comida rápida',
                    'Ferreteria', 'Taller mecanico', 'Costurera',
                    'Fruterias', 'Foto estudios', 'Compra venta',
                    'Papeleria', 'Cacharreria', 'Lavanderia',
                    'Cigarreria', 'Desechables', 'Remontadora',
                    'Tienda deportiva', 'Panaderia', 'Peluqueria - Barberia',
                    'Veterinaria'
            );

$sucursales = array('1 sucursal',
                    '2 sucursales',
                    '3 a 5 sucursales', 
                    '6 a 9 sucursales',
                    '10 a 20 sucursales'
            );       
            
$roles = array('Propietario',
                'Gerente',
                'Administrador', 
                'Subgerente',
                'Coordinador',
                'Empleado',
                'Encargado',
                'Auxiliar',
                'Aseador',
                'Vigilante',
                'Cocinero',
                'Mesero',
                'Asistente',
                'Conductor',                        
            );             
            

if (isset($_SESSION['negocio'])) {
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name_business = $_POST['name_business'];

    $ciudad = strtolower($_POST['ciudad']);
    $location = strtolower($_POST['location']);
    $barrio = strtolower($_POST['barrio']);

    $address_business = strtolower($_POST['address_business']);

    $category = $_POST['category'];
    $subcategory = $_POST['subcategory'];
    $branch_numbers = $_POST['branch_numbers'];

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_EMAIL);
    $tel = strtolower($_POST['tel']);
   
    $business_role = $_POST['business_role'];

    // echo "$name_business . $email . $category";

    $errores = '';
    $enviado = '';

    if (empty($name_business) or empty($email)) {
        $errores .= '<li>Por favor coloca todos tus datos</li>';
    } else {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=vecy', 'root', '');
            // Conexion a web host
            // $conexion = new PDO('mysql:host=localhost;dbname=id9399363_vecy', 'id9399363_daniriveradr', 'daniel1998');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare('SELECT * FROM negocios WHERE name_business = :name_business LIMIT 1');
        // Conexion a web host
        // $statement = $conexion->prepare('SELECT * FROM negocios WHERE name_business = :name_business LIMIT 1');
        $statement->execute(array(':name_business' => $name_business));
        $resultado = $statement->fetch();

        // var_dump($resultado);

        if ($resultado != false) {
            $errores .= '<li>Este negocio ya esta registrado</li>';
        }

        // echo "$name_business . $address_business . $category . $subcategory . $branch_numbers . $first_name . $last_name . $email . $tel . $business_role";
        // echo "<h1>$name_business, quiere pertenecer a Vecy</h1>";
        // echo "<h4>Hola Vecy, $first_name coloco los datos de $name_business. Su negocio esta en $address_business</h4>";
        // echo "<h4>El telefono de contacto de $first_name es <strong>$tel</strong>. Recuerda no hacerlo esperar mucho tiempo.</h4>";
        // echo "<h4>Aquí te dejo la lista de todos sus datos</h4>";

        // echo "<h4>$name_business</h4> <br/>";
        // echo "<h4>$category</h4> <br/>";
        // echo "<h4>$subcategory</h4> <br/>";
        // echo "<h4>$branch_numbers</h4> <br/>";
        // echo "<h4>$first_name</h4> <br/>";
        // echo "<h4>$last_name</h4> <br/>";
        // echo "<h4>$email</h4> <br/>";
        // echo "<h4>$tel</h4> <br/>";
        // echo "<h4>$business_role</h4> <br/>";
        

        
    }

    if ($errores == "") {
        $statement = $conexion->prepare(
            'INSERT INTO negocios (id, name_business, ciudad, location, barrio, address_business, category, subcategory, branch_numbers, first_name, last_name, email, tel, business_role) 
            VALUES (null, :name_business, :ciudad, :location, :barrio, :address_business, :category, :subcategory, :branch_numbers, :first_name, :last_name, :email, :tel, :business_role)
            ');
        $statement->execute(array(
            ':name_business' => $name_business,
            ':ciudad' => $ciudad,
            ':location' => $location,
            ':barrio' => $barrio,
            ':address_business' => $address_business,
            ':category' => $category,
            ':subcategory' => $subcategory,
            ':branch_numbers' => $branch_numbers,
            ':first_name' => $first_name,
            ':last_name' => $last_name,
            ':email' => $email,
            ':tel' => $tel,
            ':business_role' => $business_role
            ));

        // echo 'Hola mundo';
        // Crear pagina de agradecimiento
        // Hacer que los datos se envien al cliente y al admin

         header('Location: negocios');

        }

        if (!$errores) {
            $enviar_a = 'quieroserunvecy@gmail.com';
            $asunto = "$name_business, quiere asociarse a Vecy";
    
            $mensaje_preparado = "Hola Vecy, $first_name coloco los datos de $name_business. Su negocio esta en $address_business.
                                  El telefono de contacto de $first_name es $tel. 
                                  Recuerda no hacerlo esperar mucho tiempo.
                                  Aquí te dejo la lista de todos sus datos.";
                                  
            $mensaje_preparado .= "Nombre negocio: $name_business,
                                   Ciudad del negocio: $ciudad,
                                   Localidad del negocio: $location,
                                   Barrio del negocio: $barrio,
                                   Dirección del negocio: $address_negocio,
                                   Categoria negocio: $category,
                                   Subcategoria negocio: $subcategory,
                                   Numero de locales: $branch_numbers,
                                   Datos de contacto de la persona: $first_name $last_name,
                                   Correo de contacto: $email,
                                   Telefono de contacto: $tel,
                                   Cargo de la persona: $business_role,                                           
                                ";
    
            mail($enviar_a, $asunto, $mensaje_preparado);

            $asunto_user = "Hola $first_name, pronto te vamos a contactar. Vecy";
            $mensaje_user = "Hola $first_name, hemos recibido los datos de tú negocio $name_business con exito, pronto nos comunicaremos contigo. \n
                            Atentamente, equipo de Vecy.";
            mail($email, $asunto_user, $mensaje_user);
            
            $enviado = true;
        }                   
}


require ('views/negocios.view.php'); 
?>