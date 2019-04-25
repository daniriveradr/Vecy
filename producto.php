<?php

require ('headers/admin.php');

?>

<div class="row card-panel">
    <div class="container">
        <div class="col s2">
            <img src="https://image.freepik.com/vector-gratis/carrito-supermercado-compras-pictograma-comestibles_1284-11697.jpg" alt="" class="responsive-img z-depth-3">
        </div> 
        <div class="col s10 center-align">
            <h3>Supermercado Don Jacinto</h3>
            <p>Venta de frutas, verduras y carnes listas para el consumo</p>
            <p>Dirección calle 183 # 9 - 50</p>
            <p>Horario de atención todos los días 24 horas</p>
            <p>Domicilios 3155245707</p>
        </div>
        <!-- <div class="s3">
            <a href="" class="btn">Editar</a>
        </div> -->
    </div>    
</div>


<div class="container">
    <div class="row">
        <div class="col s4">
            <div class="">
                <div class="collection z-depth-1">
                    <a href="#!" class="collection-item orange-text">Principal</a>
                    <a href="#!" class="collection-item orange-text">Editar negocio</a>
                    <a href="#!" class="collection-item orange-text">Estadisticas</a>
                    <a href="#!" class="collection-item orange-text">Fotos</a>
                </div>

                <div class="collection z-depth-1">
                    <a href="#!" class="collection-item orange-text">Crear promociones y ofertas</a>
                </div>
            </div>
        </div>   

        <div class="col s8 m8  l8 xl8">
            <div class="row card-panel">
                <div class="row">
                    <div class="col s9">
                            <h5>Tu producto</h5>
                    </div>                    
                </div>  

                    <!--Card producto-->
                    <p></p>
                    <div class=""> 
                        <div class="col s6">                
                            <div class="card-panel center-align">
                                <img class="responsive-img "src="https://image.freepik.com/vector-gratis/fondo-panaderia-estilo-plano_23-2147777200.jpg" alt="">
                                <h4>7400</h4>
                                <p>carne lista para asar</p>
                                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
                            </div>
                        </div>
                    </div>

                    <!-- Formulario para editar -->
                    <div class="row">
                        <form class="col s6">
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
                                    <label for="input_text">Cambiar precio</label>
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