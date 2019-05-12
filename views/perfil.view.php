<?php
    require ('headers/header.php');
?>

<div class="row card-panel">
    <div class="container">
        <div class="col s9 m10 l10 xl0">
            <h3>Hola Daniel</h3>
        </div>
        <div class="col s3 m2 l2 xl2">
            <img src="img/dani.jpg" alt="" class="responsive-img z-depth-3">
        </div>        
        <div class="col s12 m6 l6 xl6">
        </div>    
    </div>    
</div>


<div class="container">
    <div class="row">

        <!-- Sidenav - Menu lateral -->
        <?php require ('sidenav-admin/side-nav-perfil.php');?>   

        

        <div class="col s12 m8 l8 xl8">
            <div class="row card-panel">
                <div class="row">
                    <div class="col s8 m8 l9 xl9">
                        <div class="">
                            <h5>Datos personales</h5>
                        </div>
                    </div>
                </div>  

                <h5>nombre <?php echo $first_name ['first_name']; ?></h5>
                
                <h5>apellido</h5>
                <h5>email</h5>
                <h5>telefono</h5>
                <h5>genero</h5>
                <h5>dirección</h5>


            </div>
        </div>     
    </div>
</div>


<?php

require ('footers/footer.php');

?>