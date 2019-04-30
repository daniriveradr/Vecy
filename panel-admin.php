<?php

require ('headers/admin.php');

?>

<!-- Cabecera mis negocios -->
<?php require ('cabecera-admin/cabecera-mi-perfil.php');?>   


<div>
    <div class="container">
        <div class="row card-panel">
            
            <div class="row">
                <div class="col s7 m9 l9 xl9">
                    <div class="">
                        <h5>Mis negocios</h5>
                    </div>
                </div>
                <div class="col s5 m3 l3 xl3">
                    <div class="">
                        <!-- <a href="" class="btn orange"><i class="material-icons">add</i> Crear nuevo negocio</a> -->
                        <a href="#crear-negocio" class="btn orange modal-trigger"><i class="fas fa-plus"></i> Negocio</a>
                    </div>
                </div>
            </div>  


            <!-- Modal Structure -->
            <div id="crear-negocio" class="modal">
                    <div class="modal-content">
                        <h4>Crear nuevo producto</h4>
                        <p>Aquí puedes crear una nueva categoria</p>
                    </div>
                    <div class="container">               

                        <!-- Formulario para editar -->
                        <div class="row">
                            <form class="col s12 m12 l12 xl12">
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
                                    <div class="input-field col s12 m12 l12 xl12">
                                        <i class="material-icons prefix">title</i>
                                        <input id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">Editar titulo</label>
                                    </div>
                                    <div class="input-field col s12 m12 l12 xl12">
                                        <i class="material-icons prefix">create</i>
                                        <input id="input_text" type="text" data-length="10">
                                        <label for="input_text">Editar descripción</label>
                                    </div>
                                    <div class="input-field col s12 m12 l12 xl12 ">
                                        <i class="material-icons prefix">attach_money</i>
                                        <input id="input_text" type="text">
                                        <label for="input_text">Cambiar dirección</label>
                                    </div>
                                    <div class="input-field col s12 m12 l12 xl12 ">
                                        <i class="material-icons prefix">attach_money</i>
                                        <input id="input_text" type="text">
                                        <label for="input_text">Editar Horario</label>
                                    </div>
                                    <div class="input-field col s12 m12 l12 xl12">
                                        <i class="material-icons prefix">phone</i>
                                        <input id="icon_telephone" type="tel" class="validate">
                                        <label for="icon_telephone">Telefono</label>
                                    </div>
                                    
                                    </div>   
                                    <br>
                                    <div class="col s12 m12 l12 xl12">
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
                                    <div class="col s12 m12 l12 xl12 center-align">
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

            <a href="mis-negocios.php" class="black-text">
                <div class="row card-panel">
                    <div class="col s3 m2 l1 xl1">
                        <img src="https://image.freepik.com/vector-gratis/carrito-supermercado-compras-pictograma-comestibles_1284-11697.jpg" alt="" class="responsive-img circle">
                    </div>
                    <div class="col s9 m10 l11 xl11">
                        <h5>Supermercado Don jacinto</h5>
                        <p>Venta de frutas, verduras y carnes listas para el consumo                         
                        </p>
                        <p>Dirección calle 183 # 9 - 50</p>
                    </div>
                    <div class="col s12 m12 l12 xl12 right-align">
                            <!-- Dropdown Trigger -->
                        <a class='dropdown-button btn green' href='#' data-activates='dropdown-negocios'>Más</a>
                    </div>
                </div>
            </a>
            

            <div class="row card-panel">
                <div class="col s3 m2 l1 xl1">
                    <img src="img/dani.jpg" alt="" class="responsive-img circle">
                </div>
                <div class="col s9 m10 l11 xl11">
                    <h5>Salsamentaria Doña leche</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit fugit tempore, 
                        at quibusdam, sapiente officiis in porro saepe assumenda suscipit, harum ipsum 
                        sint distinctio eum inventore laboriosam? Qui, sit adipisci.
                    </p>
                </div>
                <div class="col s12 m12 l12 xl12 right-align">
                     <!-- Dropdown Trigger -->
                    <a class='dropdown-button btn green' href='#' data-activates='dropdown-negocios'>Más</a>
                </div>
            </div>

        </div>
    </div>
</div>




<!-- Dropdown Structure -->
<ul id='dropdown-negocios' class='dropdown-content'>
  <li><a href="#!" class="blue-text"><i class="material-icons">create</i> Editar</a></li>
  <li><a href="#!" class="yellow-text"><i class="material-icons">zoom_in</i>Ver</a></li>
  <li><a href="#!" class="red-text"><i class="material-icons">delete</i>Eliminar</a></li>
</ul>






<?php

require('footers/footer.php');

?>