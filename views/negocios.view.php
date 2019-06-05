<?php 

require ('headers/header-negocio.php'); 

?>

<div class="container white">
    <div class="row">
        <div class="col s12 m6 l7 xl7">
            <div class="container">
                <div class="">
                    <div class="center-align">
                        <h2>Vecy</h2>
                    </div>
                    
                    <h5>Todos los negocios de tu barrio en un solo sitio.</h5>
                    <h5>¿Que esperas para unirte?</h5>
                    <video class="responsive-video" controls>
                        <source src="vid/video_vecy.mp4" type="video/mp4" controls="false" autoplay="true" autoplay>
                    </video>

                    <div class="center-align">
                    <p>“Deja que se sepa en todo el barrio, para que nadie se quede sin conocer tu negocio o probar tus
                        productos y disfrutar de tus servicios, ha llegado un nuevo aliado a tu barrio llamado Vecy, más que esto
                        se convertirá en tu benefactor digital y quien te apoyará en fortalecer tu actividad, formación,
                        tecnificación y modernización comercial. Ahora todos te amaran por tus servicios y más amigos te van a
                        recomendar. “prepárate porque vas a crecer demasiado rápido”
                    </p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col s12 m6 l5 xl5">
            <div class="card-panel center-align">
                <div class="row">
                <h4>¡Unete tu negocio a Vecy!</h4>
                    <form class="col s12" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="login_negocios">
                        <div class="row">
                            <h5>Información de tu negocio</h5>
                            <div class="input-field col s12">
                                <i class="far fa-building prefix"></i>
                                <input id="name_business" type="text" name="name_business" class="validate">
                                <label for="name_business">Nombre de tu negocio</label>
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
                                <textarea id="address_business" type="address_business" name="address_business"  class="materialize-textarea"></textarea>
                                <label for="address_business">Dirección</label>
                            </div>                  
                            
                            <div class="input-field col s12">
                                <p>Por favor selecciona la categoria de tu negocio</p>
                                <div class="input-field col s12">
                                    <select name="category">
                                    <option value="" disabled selected>Categoria</option>
                                        <?php 
                                            foreach ($categorias as $categoria) {
                                                echo "<option value='$categoria'>$categoria</option>";
                                            } 
                                        ?>
                                    </select>
                                    <label>Selecciona la categoria</label>
                                </div>
                                <p>Por favor selecciona la Subcategoria de tu negocio</p>
                                <p>Por ejemplo: Si tú negocio corresponde a Abastos, la subcategoria podría ser Supermercado</p>
                                <div class="input-field col s12">
                                    <i class="fas fa-map-marker-alt prefix"></i>
                                    <input id="subcategory" type="text" name="subcategory" class="validate" placeholder="Ejemplo: Categoria Abastos, subcategoria Supermercado">
                                    <label for="subcategory">Subcategoria</label>
                                </div>
                            </div>

                            <div class="input-field col s12">
                                <p>Numero de locales o sucursales</p>
                                <div class="input-field col s12">
                                    <select name="branch_numbers">
                                        <option value="" disabled selected>Locales</option>
                                            <?php 
                                                foreach ($sucursales as $sucursal) {
                                                    echo "<option value='$sucursal'>$sucursal</option>";
                                                } 
                                            ?>
                                    </select>
                                    <label>Selecciona la cantidad de locales</label>
                                </div>
                            </div>

                            <h5>Información de contacto</h5>
                            

                            <div class="input-field col s12 m12 l6 xl6">
                                <i class="far fa-id-badge prefix"></i>
                                <input id="first_name" type="text" name="first_name" class="validate">
                                <label for="first_name">Nombre</label>
                            </div>
                            <div class="input-field col s12 m12 l12 xl6">
                                <input id="last_name" type="text" name="last_name" class="validate">
                                <label for="last_name">Apellido</label>
                            </div>
                            <div class="input-field col s12 m12 l12 xl12">
                                <i class="material-icons prefix">mail</i>
                                <input id="email" type="email" name="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12 m12 l12 xl12">
                            <i class="fas fa-phone prefix"></i>
                                <input id="tel" type="tel" name="tel" class="validate">
                                <label for="tel">Telefono</label>
                            </div>

                            <div class="input-field col s12">
                                <p>Selecciona tu cargo dentro del negocio</p>
                                <div class="input-field col s12">
                                    <select name="business_role">
                                    <option value="" disabled selected>Cargo</option>
                                        <?php 
                                            foreach ($roles as $role) {
                                                echo "<option value='$role'>$role</option>";
                                            } 
                                        ?>
                                    </select>
                                    <label>Selecciona tu cargo</label>                                    
                                </div>
                            </div>

                            <?php if(!empty($errores)): ?>
                            <div class="red-text col s12 m12 l12 xl12">
                                <ul>
                                    <?php echo $errores; ?>
                                </ul>
                            </div>
                           <?php endif; ?>

                           <div class="input-field col s12">
                                <p>Al enviar tus datos, aceptas los <a href="terminos">Términos y condiciones generales</a>
                                 y reconoces que leíste la <a href="privacidad">Política de privacidad</a>.</p>
                            </div>
                            
                            <div class="input-field col s12">
                                <!-- <input type="submit" value="" type="submit" class="btn red accent-4">  -->
                                <div class="col s12 m12 l12 xl12 center-align ">
                                    <a onclick="login_negocios.submit()" class="btn orange z-depth-2">Enviar</a>
                                </div>
                                <!-- <button id="input_9" type="submit" class="btn red accent-4" data-component="button">
                                Enviar Correo
                                </button> -->
                            </div>
                           
                            
                                                    
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 l6 xl6">
                <div>
                    <img class="responsive-img" src="img/design.jpg">
                </div>
            </div>
            <div class="col s12 m6 l6 xl6 card-panel z-depth-0">
                <h4>Nunca fue tan facíl llegar a más de un barrio</h4>
                <h5>Nuestro objetivo es hacer que cada negocio expanda su comercio a más zonas comerciales</h5>
            </div>
        </div>

        <div class="row">           
            <div class="col s12 m6 l6 xl6 card-panel z-depth-0">
                <h4>Con Vecy participas de la red de comerciantes unidos por un solo objetivo</h4>
                <h5>No nos limitamos a mostrar un solo tipo de negocio, desde servicios hasta productos</h5>
            </div>
            <div class="col s12 m6 l6 xl6">
                <div>
                    <img class="responsive-img" src="img/gym.jpg">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m6 l6 xl6">
                <div>
                    <img class="responsive-img" src="img/panaderia.jpg">
                </div>
            </div>
            <div class="col s12 m6 l6 xl6 card-panel z-depth-0">
                <h4>¡Vamos a generar innovación para el grupo de comerciantes más importante de la comunidad!</h4>
                <h5>Facilitaremos la presencia digital para cada negocio. Así ninguno se quedara opacado por grandes industrias</h5>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m4 l4 xl4">
                <div class="card-panel">
                    <h5 class="center-align">¡No más olvido a las tiendas de barrio!</h5>
                    <p>Con el uso masivo de internet los comercios se estan quedando fuera de las opciones de los clientes</p>
                </div>
                
            </div>
            <div class="col s12 m4 l4 xl4">
                <div class="card-panel">
                    <h5 class="center-align">¡Además tener presencia digital es costoso!</h5>
                    <p>Pocos son los negocios pequeños que hoy en día pueden costearse esta inversión sin saber los resultados de está</p>
                </div>
                
            </div>
            <div class="col s12 m4 l4 xl4">
                <div class="card-panel">
                    <h5 class="center-align">¡Con Vecy no vas a estar solo!</h5>
                    <p>Juntos ofreceremos lo que cada persona necesita de verdad sin tener que recurrir a los grandes comercios y elevados precios</p>
                </div>
                
            </div>
        </div>
    </div>
</div>

<?php require ('footers/footer.php'); ?>