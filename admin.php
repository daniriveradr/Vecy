<?php

require ('headers/admin.php');

?>


<div class="row card-panel">
    <div class="container">
        <div class="col s10">
            <h3>Hola Sr Daniel</h3>
        </div>
        <div class="col s2">
            <img src="img/dani.jpg" alt="" class="responsive-img z-depth-3">
        </div>        
        <div class="col s6">
            <h5>Actualmente tienes 2 negocios</h5>
        </div>    
    </div>    
</div>


<div>
    <div class="container">
        <div class="row card-panel">
            
            <div class="row">
                <div class="col s9">
                    <div class="">
                        <h5>Mis negocios</h5>
                    </div>
                </div>
                <div class="col s3">
                    <div class="">
                        <a href="" class="btn orange"><i class="material-icons">add</i> Crear nuevo negocio</a>
                    </div>
                </div>
            </div>  

            <a href="mis-negocios.php" class="black-text">
                <div class="row card-panel">
                    <div class="col s1">
                        <img src="https://image.freepik.com/vector-gratis/carrito-supermercado-compras-pictograma-comestibles_1284-11697.jpg" alt="" class="responsive-img circle">
                    </div>
                    <div class="col s11">
                        <h5>Supermercado Don jacinto</h5>
                        <p>Venta de frutas, verduras y carnes listas para el consumo                         
                        </p>
                        <p>Dirección calle 183 # 9 - 50</p>
                    </div>
                    <div class="col s12 right-align">
                            <!-- Dropdown Trigger -->
                        <a class='dropdown-button btn green' href='#' data-activates='dropdown-negocios'>Más</a>
                    </div>
                </div>
            </a>
            

            <div class="row card-panel">
                <div class="col s1">
                    <img src="img/dani.jpg" alt="" class="responsive-img circle">
                </div>
                <div class="col s11">
                    <h5>Salsamentaria Doña leche</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit fugit tempore, 
                        at quibusdam, sapiente officiis in porro saepe assumenda suscipit, harum ipsum 
                        sint distinctio eum inventore laboriosam? Qui, sit adipisci.
                    </p>
                </div>
                <div class="col s12 right-align">
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