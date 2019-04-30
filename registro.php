<?php

require ('headers/header-registro.php');

?>

<div class="container">
    <div class="row">
        <div class="col s3 m3 l3 xl3">
            <div class="center-align">
                <!-- Esto sirve para centrar de manera bonita el fomulario, perdón dioses del diseño web -->
            </div>
        </div>
        <div class="col s6 m6 l6 xl6">
            <div class="card-panel center-align">
                <div class="row">
                <h3>Registrate en Vecy</h3>
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="far fa-id-badge prefix"></i>
                                <input id="name" type="text" class="validate">
                                <label for="name">Nombre</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="far fa-id-badge prefix"></i>
                                <input id="last_name" type="text" class="validate">
                                <label for="last_name">Apellido</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mail</i>
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="fas fa-lock prefix"></i>
                                <input id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field col s6">
                            <i class="far fa-id-badge prefix"></i>
                                <input id="icon_telephone" type="tel" class="validate">
                                <label for="icon_telephone">Telefono</label>
                            </div>
                            <div class="col s6">
                                <label for="genre">Selecciona tu genero</label>
                                <p> 
                                    
                                    <input name="men" type="radio" id="men" />
                                    <label for="men">Hombre</label>
                                    <i class="fas fa-mars prefix"></i>
                                </p>
                                <p>
                                    <input name="women" type="radio" id="women" />
                                    <label for="women">Mujer</label>
                                    <i class="fas fa-venus prefix"></i>
                                </p>                                
                            </div>

                            <div class="input-field col s12">
                                <i class="fas fa-map-marked prefix"></i>
                                <textarea id="address" class="materialize-textarea"></textarea>
                                <label for="address">Dirección</label>
                            </div>
                            <div class="input-field col s12">
                                <!-- <input type="submit" value="" type="submit" class="btn red accent-4">  -->
                                <div class="col s12 m12 l12 xl12 center-align ">
                                <a href="" type="submit" value="" type="submit" class="btn orange z-depth-2">registrarse</a>
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
        <div class="col s3 m3 l3 xl3">
            <div class="center-align">
                <!-- Esto sirve para centrar de manera bonita el fomulario, perdón dioses del diseño web -->
            </div>
        </div>
    </div>
</div>


<?php

require ('footers/footer.php');

?>