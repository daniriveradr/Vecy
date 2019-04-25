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