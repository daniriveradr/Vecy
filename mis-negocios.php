<?php

require ('headers/admin.php');

?>

<!-- Cabecera mis negocios -->
<?php require ('cabecera-admin/cabecera-mis-negocios.php');?>   


<div class="container">
    <div class="row">

        <!-- Sidenav - Menu lateral -->
        <?php require ('sidenav-admin/side-nav-mis-negocios.php');?>   

        

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
                            <a href="#crear-categoria" class="btn orange modal-trigger hide-on-small-only"><i class="fas fa-plus"></i> negocio</a>
                            <a href="#crear-categoria" class="btn orange modal-trigger hide-on-med-and-up"><i class="fas fa-plus"></i></a>
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