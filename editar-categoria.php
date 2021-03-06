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
                    <div class="col s9">
                            <h5>Tu categoria</h5>
                    </div>                    
                </div>  

                    <!--Card producto-->
                    <p></p>
                    <div class=""> 
                        <div class="col s12 m12 l6 xl6">                
                            <div class="card-panel center-align">
                            <h2 class="hide-on-med hide-on-small-only">Carniceria</h2>
                            <h4 class="hide-on-med-and-up">Carniceria</h4>
                            <p>Carne lista para el consumo, cortes de calidad. Aquí encuentras la mejor selección</p>
                            </div>
                        </div>
                    </div>

                    <!-- Formulario para editar -->
                    <div class="row">
                        <form class="col s12 m12 l6 xl6">
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