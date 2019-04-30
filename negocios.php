<?php require ('headers/header-negocio.php'); ?>


<div class="container">
    <div class="row">
    <div class="col s12 m6 l7 xl7">
            <div class="center-align">
                <h2>Landing page para convencer</h2>
                <p>Ver pagina de ubereats</p>
            </div>
        </div>
        <div class="col s12 m6 l5 xl5">
            <div class="card-panel center-align">
                <div class="row">
                <h4>Registra tu negocio en Vecy</h4>
                    <form class="col s12">
                        <div class="row">
                            <h5>Información de tu negocio</h5>
                            <div class="input-field col s12">
                                <i class="far fa-building prefix"></i>
                                <input id="name_business" type="text" class="validate">
                                <label for="name_business">Nombre de tu negocio</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="fas fa-map-marked prefix"></i>
                                <textarea id="address" class="materialize-textarea"></textarea>
                                <label for="address">Dirección</label>
                            </div>                   
                            
                            <div class="input-field col s12">
                                <p>Por favor selecciona la categoria de tu negocio</p>
                                <div class="input-field col s12">
                                    <select>
                                    <option value="" disabled selected>Categoria</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    </select>
                                    <label>Selecciona la categoria</label>
                                </div>

                                <div class="input-field col s12">
                                    <select>
                                    <option value="" disabled selected>SubCategoria</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    </select>
                                    <label>Subcategoria</label>
                                </div>
                            </div>

                            <div class="input-field col s12">
                                <p>Numero de locales o sucursales</p>
                                <div class="input-field col s12">
                                    <select>
                                    <option value="" disabled selected>Categoria</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    </select>
                                    <label>Selecciona la categoria</label>
                                </div>
                            </div>

                            <h5>Información de contacto</h5>
                            

                            <div class="input-field col s6">
                                <i class="far fa-id-badge prefix"></i>
                                <input id="name" type="text" class="validate">
                                <label for="name">Nombre</label>
                            </div>
                            <div class="input-field col s6">
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
                            <i class="far fa-id-badge prefix"></i>
                                <input id="icon_telephone" type="tel" class="validate">
                                <label for="icon_telephone">Telefono</label>
                            </div>

                            <div class="input-field col s12">
                                <p>Selecciona tu funcion dentro del negocio</p>
                                <div class="input-field col s12">
                                    <select>
                                    <option value="" disabled selected>Categoria</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    </select>
                                    <label>Selecciona la categoria</label>
                                </div>
                            </div>

                            
                            <div class="input-field col s12">
                                <!-- <input type="submit" value="" type="submit" class="btn red accent-4">  -->
                                <div class="col s12 m12 l12 xl12 center-align ">
                                <a href="" type="submit" value="" type="submit" class="btn orange z-depth-2">Enviar</a>
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
       
    </div>
</div>

<?php require ('footers/footer.php'); ?>