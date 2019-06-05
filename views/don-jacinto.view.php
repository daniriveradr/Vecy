<?php require ('headers/header.php'); ?>
<br>
<div class="container">
    <div class="row card-panel">
        <a class="" href="http://localhost/Vecy/"><i class="material-icons left orange-text">arrow_back</i></a>
            <!-- Información negocio -->
            <div class="col s12 l12 m12 xl12 center-align">
                <h3 class="hide-on-small-only">Willy's Pizzaria</h3>
                <h4 class="hide-on-med-and-up">Willy's Pizzaria</h4>
                <h5>Comida rápida</h5>
                <p>Dirección <a href=""><u>Calle 183#9a-04</u></a></p>
                <p>Horario de atención todos los días 24 horas</p>
                <p>Domicilios 3155245707</p>
            </div>                            
    </div>
</div>

<div class="container">
    <div class="row card-panel">
        <a class="orange waves-effect waves-light btn" href="productos"><i class="material-icons left">cloud</i>Nuestro menu</a>
            <!-- <p>Sliders supermercados</p> -->
            <p></p>
            <div class="">                
                <div class="col s12 m4 l3 xl3">
                    <a href="productos">
                        <img class="responsive-img"src="<?php echo RUTA; ?>/imagenes_productos/carne.jpg" alt="">
                    </a>
                </div>       
              
                <div class="col s12 m4 l3 xl3">
                    <a href="productos">
                        <img class="responsive-img "src="<?php echo RUTA; ?>/imagenes_productos/descarga.jpg" alt="">
                    </a>                
                </div>

                <div class="col s12 m4 l3 xl3">
                    <a href="productos">
                        <img class="responsive-img "src="<?php echo RUTA; ?>/imagenes_productos/mango.png" alt="">
                    </a>                
                </div>

                <div class="col s12 m4 l3 xl3">
                    <a href="productos">
                        <img class="responsive-img "src="<?php echo RUTA; ?>/imagenes_productos/mazorca.jpg" alt="">
                    </a>                
                </div>                   
            </div>

        </div>                  
    </div>
</div>

<?php require ('footers/footer.php'); ?>