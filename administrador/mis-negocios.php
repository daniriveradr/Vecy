<?php

require ('headers/admin.php');

?>

<div class="row card-panel">
    <div class="container">
        <div class="col s6 m3 l2 xl2 center-align">
            <img src="https://image.freepik.com/vector-gratis/carrito-supermercado-compras-pictograma-comestibles_1284-11697.jpg" alt="" class="center-align responsive-img z-depth-3">
        </div> 
        <div class="col s12 m9 l10 xl10 center-align">
            <h3 class="hide-on-small-only">Supermercado Don Jacinto</h3>
            <h4 class=" hide-on-med-and-up">Supermercado Don Jacinto</h4>
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
        <div class="col s4 m4 l4 xl4">       

            <!-- modal crear producto -->
            <div class="center-align hide-on-small-only">
                <a href="#crear-producto" class="btn orange modal-trigger"><i class="material-icons">add</i> Crear nuevo producto</a>
            </div>

            <!-- Modal Structure -->
            <div id="crear-producto" class="modal">
                    <div class="modal-content">
                        <h4>Crear nuevo producto</h4>
                        <p>Aquí puedes crear una nueva categoria</p>
                    </div>
                    <div class="container">               

                        <!-- Formulario para editar -->
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>Subir foto</span>
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
                                    <h5>Aplicar oferta o descuento?</h5>
                                        <label>
                                        No
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                        Si
                                        </label>
                                        
                                    </div>   
                                    <br>
                                    <div class="col s12">
                                        <h5 class="">Por favor elige la categoria correspondiente</h5>
                                        <p>
                                            <input type="checkbox" id="test5" />
                                            <label for="test5">Carniceria</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="test5" />
                                            <label for="test5">Frutas</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="test5" />
                                            <label for="test5">Vegetales</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="test5" />
                                            <label for="test5">Lacteos</label>
                                        </p>
                                    </div> 
                                    

                                    
                                    <br>
                                    <div class="col s12 center-align">
                                        <a href="" class="btn">Guardar y enviar</a>
                                    </div>
                                </div>
                            </form>
                        </div>  
                    </div>
                    <!-- <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                    </div> -->
                </div>

            <div class="hide-on-small-only">
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

        

        <div class="col s12 m8 l8 xl8">
            <div class="row card-panel">
                <div class="row">
                    <div class="col s8 m8 l9 xl9">
                        <div class="">
                            <h5>Pasillos/Categorias</h5>
                        </div>
                    </div>
                    <div class="col s4 m4 l3 xl3">
                        <div class="">
                            <!-- modal -->
                            <a href="#crear-categoria" class="btn orange modal-trigger hide-on-small-only"><i class="material-icons">add</i>negocio</a>
                            <a href="#crear-categoria" class="btn orange modal-trigger hide-on-med-and-up"><i class="material-icons">add</i></a>
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

                                        <div class="col s12 m6 l3 xl3">                
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

                                        <div class="col s12 m6 l3 xl3">                
                                            <div class="card-panel center-align">
                                                <img class="responsive-img "src="https://image.freepik.com/vector-gratis/fondo-panaderia-estilo-plano_23-2147777200.jpg" alt="">
                                                <h4>7400</h4>
                                                <p>carne lista para asar</p>
                                                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
                                            </div>
                                        </div>

                                        <div class="col s12 m6 l3 xl3">                
                                            <div class="card-panel center-align">
                                                <img class="responsive-img "src="https://image.freepik.com/vector-gratis/fondo-panaderia-estilo-plano_23-2147777200.jpg" alt="">
                                                <h4>7400</h4>
                                                <p>carne lista para asar</p>
                                                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
                                            </div>
                                        </div>

                                        <div class="col s12 m6 l3 xl3">                
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
                                        <div class="col s12 m6 l3 xl3">                
                                            <div class="card-panel center-align">
                                                <img class="responsive-img "src="https://image.freepik.com/vector-gratis/fondo-panaderia-estilo-plano_23-2147777200.jpg" alt="">
                                                <h4>7400</h4>
                                                <p>carne lista para asar</p>
                                                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
                                            </div>
                                        </div>

                                        <div class="col s12 m6 l3 xl3">                
                                            <div class="card-panel center-align">
                                                <img class="responsive-img "src="https://image.freepik.com/vector-gratis/fondo-panaderia-estilo-plano_23-2147777200.jpg" alt="">
                                                <h4>7400</h4>
                                                <p>carne lista para asar</p>
                                                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
                                            </div>
                                        </div>

                                        <div class="col s12 m6 l3 xl3">                
                                            <div class="card-panel center-align">
                                                <img class="responsive-img "src="https://image.freepik.com/vector-gratis/fondo-panaderia-estilo-plano_23-2147777200.jpg" alt="">
                                                <h4>7400</h4>
                                                <p>carne lista para asar</p>
                                                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
                                            </div>
                                        </div>

                                        <div class="col s12 m6 l3 xl3">                
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