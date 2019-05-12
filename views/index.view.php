<?php
  require ('headers/header.php');
?>   

<div class="container hide-on-med-and-down">
    <div class="row">
        <br>
        <a href="#" data-activates="slide-out" class="btn-large orange waves-effect waves-light button-collapse">
            <h5>Negocios<i class="material-icons">arrow_drop_down</i></h5>
        </a>
    </div>        
</div>

<ul id="slide-out" class="side-nav">
    <li>
      <div class="user-view">
        <a href="index.php"><img class="responsive-img btn black" src="img/logo.png"></a>
      </div>
    </li>
    <hr>
    <li><p class="center-align">Categorias</p></li>
    <li><a class='dropdown-button btn orange' href='#' data-activates='abastos'>Abastos y viveres<i class="material-icons">arrow_drop_down</i></a></li>
    <li><a class='dropdown-button btn orange' href='#' data-activates='panaderias'>Panaderias y pastelerias<i class="material-icons">arrow_drop_down</i></a></li>
    <li><a class='dropdown-button btn orange' href='#' data-activates='restaurantes'>Restaurantes<i class="material-icons">arrow_drop_down</i></a></li>
    <li><a class='dropdown-button btn orange' href='#' data-activates='salud'>Salud y bienestar<i class="material-icons">arrow_drop_down</i></a></li>
    <li><a class='dropdown-button btn orange' href='#' data-activates='tecnologia'>Tecnología<i class="material-icons">arrow_drop_down</i></a></li>
    <li><a class='dropdown-button btn orange' href='#' data-activates='ropa'>Ropa y accesorios<i class="material-icons">arrow_drop_down</i></a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect btn orange" href="#!">Contacto</a></li>
</ul>
  <!-- Dropdown Trigger -->
  

  <!-- Abastos y viveres -->
  <ul id='abastos' class='dropdown-content'>
    <li><a href="#!">Carnicerias</a></li>
    <li><a href="#!">Granel</a></li>
    <li><a href="supermercados.php">Supermercados y lichigos</a></li>
    <li><a href="#!">Pescaderias</a></li>
    <li><a href="#!">Salsamentarias</a></li>
  </ul>

  <!-- Panaderias y pastelerias -->
  <ul id='panaderias' class='dropdown-content'>
    <li><a href="#!">Panaderias</a></li>
    <li><a href="#!">Pastelerias</a></li>
  </ul>

  <!-- Restaurantes -->
  <ul id='restaurantes' class='dropdown-content'>
    <li><a href="#!">Asaderos</a></li>
    <li><a href="#!">Comida rapída</a></li>
    <li><a href="#!">Pizzerias</a></li>    
    <li><a href="#!">Puestos informales </a></li>    
  </ul>

  <!-- Salud y bienestar -->
  <ul id='salud' class='dropdown-content'>
    <li><a href="#!">Drogerias</a></li>
    <li><a href="#!">Tiendas naturistas</a></li>
    <li><a href="#!">Medicina particular</a></li>
    <li><a href="#!">Odontologías</a></li>
    <li><a href="#!">Opticas</a></li>
  </ul>

  <!-- Tecnología -->
  <ul id='tecnologia' class='dropdown-content'>
    <li><a href="#!">Accesorios y celulares</a></li>
    <li><a href="#!">Celulares</a></li>
    <li><a href="#!">Computadores</a></li>
    <li><a href="#!">Servicio tecníco</a></li>
  </ul>

  <!-- Ropa y accesorios -->
  <ul id='ropa' class='dropdown-content'>
    <li><a href="#!">Accesorios</a></li>
    <li><a href="#!">Disfracez</a></li>
    <li><a href="#!">Ropa</a></li>
    <li><a href="#!">Ropa deportiva</a></li>
    <li><a href="#!">Ropa interior</a></li>  
    <li><a href="#!">Zapatos y tenis</a></li>
  </ul>


<?php require ('abastos-pre.php');?>

<?php 
    require ('footers/footer.php');
?>