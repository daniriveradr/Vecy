<?php

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
                <h3>Ingreso panel administrador</h3>
                    <form class="col s12">
                        <div class="row">
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
                            <div class="input-field col s12">
                                <!-- <input type="submit" value="" type="submit" class="btn red accent-4">  -->
                                <div class="col s12 m12 l12 xl12 center-align ">
                                <a href="" type="submit" value="" type="submit" class="btn orange z-depth-2">Ingresar</a>
                                </div>
                                <!-- <button id="input_9" type="submit" class="btn red accent-4" data-component="button">
                                Enviar Correo
                                </button> -->
                            </div>
                            <div class="col s12 m12 l12 xl12 ">
                                <p class="center-align">No tienes cuenta?</p>
                                <a href="index"><u>Registrate!</u></a>
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