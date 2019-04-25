<?php

require ('headers/admin.php');

?>


<div class="row card-panel">
    <div class="container">
        <div class="col s9 m10 l10 xl0">
            <h3>Hola Sr Daniel</h3>
        </div>
        <div class="col s3 m2 l2 xl2">
            <img src="img/dani.jpg" alt="" class="responsive-img z-depth-3">
        </div>        
        <div class="col s12 m6 l6 xl6">
            <h5>Actualmente tienes 2 negocios</h5>
        </div>    
    </div>    
</div>

<div class="container">
    <div class="row">
        <div class="col s3">
            <div class="hide-on-small-only">
                <div class="collection z-depth-1">
                    <a href="admin.php" class="collection-item orange-text">Principal</a>
                    <a href="#!" class="collection-item orange-text">Estadisticas</a>
                    <a href="#!" class="collection-item orange-text">Fotos</a>
                </div>  
            </div>
        </div>   

        <div class="col s12 m9 l9 xl9">
            <div class="row card-panel">
                <div class="row">
                    <div class="col s9 m9 l9 xl9">
                        <h5>Tu negocio</h5>
                    </div>                    
                </div>  

                    <!--Card producto-->
                    <p></p>
                    <div class=""> 
                        <div class="col s12 m8 l8 xl8">                
                            <div class="card-panel center-align">
                                <div class="">
                                    <img class="responsive-img "src="https://image.freepik.com/vector-gratis/fondo-panaderia-estilo-plano_23-2147777200.jpg" alt="">
                                </div>
                                <!-- Nombre negocio -->
                                <h3>Super Mercado Don Jacinto</h3>
                                <!-- Descripción -->
                                <h5>Venta de frutas, verduras y carnes listas para el consumo</h5>
                                <!-- Dirección -->
                                <p>Dirección calle 183 # 9 -  50</p>
                                <!-- Horario -->
                                <p>Horario de atención todos los días 24 horas</p>
                                <!-- Telefono -->
                                <p>Domicilios 3155245707</p>
                                
                                
                            </div>
                        </div>
                    </div>

                    <!-- Formulario para editar -->
                    <div class="row">
                        <form class="col s12 m4 l4 xl4">
                            <div class="row">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>Cambiar foto</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">title</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Editar titulo</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">create</i>
                                    <input id="input_text" type="text" data-length="10">
                                    <label for="input_text">Editar descripción</label>
                                </div>
                                <div class="input-field col s12 ">
                                    <i class="material-icons prefix">attach_money</i>
                                    <input id="input_text" type="text">
                                    <label for="input_text">Cambiar dirección</label>
                                </div>
                                <div class="input-field col s12 ">
                                    <i class="material-icons prefix">attach_money</i>
                                    <input id="input_text" type="text">
                                    <label for="input_text">Editar Horario</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_telephone" type="tel" class="validate">
                                    <label for="icon_telephone">Telefono</label>
                                </div>
                                <div class="col 12">
                                        
                                    </div>
                                <div class="switch">
                                <p>Aplicar oferta o descuento?</p>
                                    <label>
                                    No
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    Si
                                    </label>
                                    
                                </div>                                
                                <br>
                                <div class="col s12 center-align">
                                    <a href="" class="btn">Guardar y enviar</a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col s12">
                    <div class="center-align">
                        <div class="">
                            <a href="" class="btn red"><i class="material-icons"></i>Eliminar</a>
                        </div>
                    </div>
                    </div>
                    
        
                </div>                  
            </div>
        </div>     
    </div>
</div>



<?php

require ('footers/footer.php');

?>