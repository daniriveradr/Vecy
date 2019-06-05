<?php require ('headers/header.php'); ?>
<br>
<!-- <div class="container">
    <div class="row card-panel">
        <a class="" href="http://localhost/Vecy/"><i class="material-icons left orange-text">arrow_back</i></a>
            Información negocio
            <div class="col s12 l12 m12 xl12 center-align">
                <h3 class="hide-on-small-only">Willy's Pizzeria</h3>
                <h4 class="hide-on-med-and-up">Willy's Pizzeria</h4>
                <h5>Pizzeria</h5>
                <p>Dirección <a href=""><u>Calle 183 # 9a - 04</u></a></p>
                <p>Horario de atención todos los días 24 horas</p>
                <p>Domicilios 3155245707</p>
            </div>                            
    </div>
</div> -->

<div class="container">
    <div class="row">
        <div class="col s12 m4 l4 xl4">
            <div class="">
                <div class="card-panel center-align ">
                    <div class="center-align">
                    
                        <a href="<?php echo "$datosNegocios[link]"; ?>" class="black-text"><u><h5><?php echo "$datosNegocios[Nombre]"; ?></h5></u></a>
                        <h6><?php echo "$datosNegocios[Descripcion]"; ?></h6>
                        <p>Dirección <a href="<?php echo "$datosNegocios[Direccionlink]"; ?>" target="_blank">
                            <u><i class="fas fa-map-marker-alt"></i><?php echo "$datosNegocios[Direccion]"; ?></u></a>
                        </p>
                        <p>Horario de atención</p>
                        <p><?php echo "$datosNegocios[Horario]"; ?></p>
                        <p>Domicilios <a href="tel:+57<?php echo "$datosNegocios[Domicilios]"; ?>"><u><i class="fas fa-phone-volume"></i> <?php echo "$datosNegocios[Domicilios]"; ?></u></a></p>
                    </div>    
                </div>
                <div class="hide-on-small-only">
                    <div class="card-panel center-align">
                    <!-- Lista de los pasillos (categorias) -->
                        <!-- <ul>
                            <li>
                                <div class="card-panel">
                                    <a href="" class="btn">Carnes </a>
                                </div>
                            </li>
                            <li>
                                <div class="card-panel">
                                    <a href="" class="btn">Carnes</a>
                                </div>
                            </li>
                            <li>
                                <div class="card-panel">
                                    <a href="" class="btn">Carnes</a>
                                </div>
                            </li>
                            <li>
                                <div class="card-panel">
                                    <a href="" class="btn">Carnes</a>
                                </div>
                            </li>
                            <li>
                                <div class="card-panel">
                                    <a href="" class="btn">Carnes</a>
                                </div>
                            </li>
                        </ul> -->
                    </div>
                </div>
                
            </div>          
        </div>


        <div class="col s12 m8 l8 xl8">
          <div class="card-panel center-align">
            <h2 class="hide-on-med-and-down">Nuestros Productos</h2>
            <h5></h5>
            <p>Observa cada uno de nuestros productos</p>
            <img src="imagenes-brasero-dorado/<?php echo $combos[1]['rutaImagen']; ?>" alt="">
            
          </div>  
          
          <div class="card-panel center-align">
            <div class="">          
                <ul class="collapsible" data-collapsible="accordion">
                    <li>

      
                        <div class="collapsible-header">Combos Familiares <i class="fas fa-percent"></i></div>
                            <div class="collapsible-body">          
                                <div class="row">    
                                <!-- Carta de cada producto -->

                                    <?php
                                        $idx = 0;
                                        do {                                            
                                            echo '<div class="col s12 m6 l4 xl4">';
                                                echo '<div class="card-panel center-align"> ';
                                                    echo '<img class="responsive-img "src="imagenes-brasero-dorado/'.$combos[$idx]['rutaImagen'] . '>';
                                                    echo '<h4>'.'</h4>';
                                                    echo '<p>'. $combos[$idx]['nombre'].'</p>';
                                                    echo '<a class="waves-effect waves-light btn modal-trigger" href="#' .   $combos[$idx]['id'] . ' ">Ver más</a>';
                                                echo '</div>';
                                            echo '</div>';

                                            
                                            $idx = $idx + 1;
                                        } while ($idx < 3);
                                    ?>


<!-- <div id="<?php echo $combos[0]['id']; ?>" class="modal">
                                                <div class="modal-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col s12 m6 l6 xl6">
                                                            <img class="responsive-img "src="imagenes-brasero-dorado\<?php echo $combos[0]['rutaImagen']; ?>" alt="<?php echo "$combos[rutaImagen]"; ?>">
                                                            </div>
                                                            <div class="col s12 m6 l6 xl6">
                                                                <h5><?php echo $combos[0]['nombre']; ?></h5>
                                                                <p><?php echo $combos[0]['descripcion']; ?></p>
                                                                <h4><i class="fas fa-dollar-sign"></i> <?php echo $combos[0]['precio']; ?></h4>                                                        
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                                </div>
                                            </div>     -->
                                    
                                    

                                    


                                    <!-- Carta de cada producto -->
                                    <!-- <div class="col s12 m6 l4 xl4">                
                                        <div class="card-panel center-align">
                                            <img class="responsive-img "src="imagenes-brasero-dorado\<?php echo $combos[1]['rutaImagen']; ?>" alt="">
                                            <h4></h4>
                                            <p><?php echo $combos[1]['nombre']; ?></p>
                                            <a class="waves-effect waves-light btn modal-trigger" href="#<?php echo $combos[1]['id']; ?>">Ver más</a>
                                        </div>
                                    </div>  

                                      


                                    <div id="<?php echo $combos[1]['id']; ?>" class="modal">
                                        <div class="modal-content">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col s12 m6 l6 xl6">
                                                    <img class="responsive-img "src="imagenes-brasero-dorado\<?php echo $combos[1]['rutaImagen']; ?>" alt="<?php echo "$combos[rutaImagen]"; ?>">
                                                    </div>
                                                    <div class="col s12 m6 l6 xl6">
                                                        <h5><?php echo $combos[1]['nombre']; ?></h5>
                                                        <p><?php echo $combos[1]['descripcion']; ?></p>
                                                        <h4><i class="fas fa-dollar-sign"></i> <?php echo $combos[1]['precio']; ?></h4>                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                        </div>
                                    </div>                     -->
                                
                            </div>
                        </div>
                    </li>
                </ul>



            </div>
          </div>
        </div>



        </div>
      </div>
    </div>

    <?php 
        require 'footers/footer.php';
    ?>