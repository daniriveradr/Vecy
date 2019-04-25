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
                    <a href="admin" class="collection-item orange-text">Principal</a>
                    <a href="mi-negocio" class="collection-item orange-text">Editar negocio</a>
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
                        <div class="">
                            <h5>Pasillos/Categorias</h5>
                        </div>
                    </div>
                    <div class="col s3">
                        <div class="">
                            <!-- modal -->
                            <a href="#crear-categoria" class="btn orange modal-trigger"><i class="material-icons">add</i> Crear nuevo negocio</a>
                        </div>
                    </div>
                </div>  

                <!-- Modal Structure -->
                <div id="crear-categoria" class="modal center-align">
                    <div class="modal-content">
                        <h4>Crear nueva categoria/pasillo</h4>
                        <p>Aquí puedes crear una nueva categoria</p>
                    </div>
                    <div class="container center-align">
                        <form class="col s12">
                            <div class="row">
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
                                                               
                                <br>
                                <div class="col s12 center-align">
                                    <a href="" class="btn orange">Crear</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                    </div> -->
                </div>
                                        
                    <ul class="collapsible" data-collapsible="accordion">

                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons">filter_drama</i>Carniceria
                            </div>
                            <div class="collapsible-body">
                                <span>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="card-panel center">
                                                <p>Carne lista para el consumo, cortes de calidad. Aquí encuentras la mejor selección</p>
                                                <div class="center-align">
                                                    <a href="editar-categoria" class="btn">Editar categoria</a>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="col s3">                
                                            <div class="card-panel center-align">
                                                <img class="responsive-img "src="https://image.freepik.com/vector-gratis/fondo-panaderia-estilo-plano_23-2147777200.jpg" alt="">
                                                <h4>7400</h4>
                                                <p>carne lista para asar</p>
                                                <a class='dropdown-button btn' href='#' data-activates='mas'>Más</a>
                                            </div>
                                        </div>

                                        <!-- Dropdown Structure -->
                                        <ul id='mas' class='dropdown-content'>
                                            <li><a href="producto" class="blue-text"><i class="material-icons">create</i> Editar</a></li>
                                            <li><a href="#producto" class="yellow-text"><i class="material-icons">zoom_in</i>Ver</a></li>
                                            <li><a href="#!" class="red-text"><i class="material-icons">delete</i>Eliminar</a></li>
                                            <li><a class="modal-trigger" href="#modal1">Modal</a></li>
                                        </ul>  

                                        <!-- Modal Structure -->
                                        <div id="modal1" class="modal">
                                        <div class="modal-content">
                                            <h4>Modal Header</h4>
                                            <p>A bunch of text</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                                        </div>
                                        </div>

                                        <div class="col s3">                
                                            <div class="card-panel center-align">
                                                <img class="responsive-img "src="https://image.freepik.com/vector-gratis/fondo-panaderia-estilo-plano_23-2147777200.jpg" alt="">
                                                <h4>7400</h4>
                                                <p>carne lista para asar</p>
                                                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
                                            </div>
                                        </div>

                                        <div class="col s3">                
                                            <div class="card-panel center-align">
                                                <img class="responsive-img "src="https://image.freepik.com/vector-gratis/fondo-panaderia-estilo-plano_23-2147777200.jpg" alt="">
                                                <h4>7400</h4>
                                                <p>carne lista para asar</p>
                                                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
                                            </div>
                                        </div>

                                        <div class="col s3">                
                                            <div class="card-panel center-align">
                                                <img class="responsive-img "src="https://image.freepik.com/vector-gratis/fondo-panaderia-estilo-plano_23-2147777200.jpg" alt="">
                                                <h4>7400</h4>
                                                <p>carne lista para asar</p>
                                                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </span>
                            </div>
                        </li>

                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons">filter_drama</i>Vegetales
                            </div>
                            <div class="collapsible-body">
                                <span>
                                    <div class="row">
                                        <div class="col s3">                
                                            <div class="card-panel center-align">
                                                <img class="responsive-img "src="https://image.freepik.com/vector-gratis/fondo-panaderia-estilo-plano_23-2147777200.jpg" alt="">
                                                <h4>7400</h4>
                                                <p>carne lista para asar</p>
                                                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
                                            </div>
                                        </div>

                                        <div class="col s3">                
                                            <div class="card-panel center-align">
                                                <img class="responsive-img "src="https://image.freepik.com/vector-gratis/fondo-panaderia-estilo-plano_23-2147777200.jpg" alt="">
                                                <h4>7400</h4>
                                                <p>carne lista para asar</p>
                                                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
                                            </div>
                                        </div>

                                        <div class="col s3">                
                                            <div class="card-panel center-align">
                                                <img class="responsive-img "src="https://image.freepik.com/vector-gratis/fondo-panaderia-estilo-plano_23-2147777200.jpg" alt="">
                                                <h4>7400</h4>
                                                <p>carne lista para asar</p>
                                                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
                                            </div>
                                        </div>

                                        <div class="col s3">                
                                            <div class="card-panel center-align">
                                                <img class="responsive-img "src="https://image.freepik.com/vector-gratis/fondo-panaderia-estilo-plano_23-2147777200.jpg" alt="">
                                                <h4>7400</h4>
                                                <p>carne lista para asar</p>
                                                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </span>
                            </div>
                        </li>
                        
                    </ul>
                </div>                  
            </div>
        </div>     
    </div>
</div>



<?php

require ('footers/footer.php');

?>