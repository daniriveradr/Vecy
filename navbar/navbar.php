<body> 
    <div>
        <nav class="gris-oscuro-3">
          <div class="nav-wrapper container ">
                <a href="index" class="brand-logo"><img src="img/logo.png" alt="Logo vecy" class="logo btn black"></a>      
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a class='dropdown-button btn-large orange' href='#' data-activates='boton-mas'><i class="material-icons">arrow_drop_down_circle</i></a></li>
                </ul>
          </div>
        </nav>

    <!-- Dropdown Structure -->
    <ul id='dropdown1' class='dropdown-content'>
      <li><a href="#!">one</a></li>
      <li><a href="#!">two</a></li>
      <li class="divider" tabindex="-1"></li>
      <li><a href="#!">three</a></li>
      <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
      <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
    </ul>

    <!-- Dropdown Structure -->
    <ul id='boton-mas' class='dropdown-content'>
      <li><a href="#!">one</a></li>
      <li><a href="#!" >two</a></li>
      <li class="divider" tabindex="-1"></li>
      <li><a href="#!" class="orange-text">three</a></li>
      <li><a href="admin.php" class="orange-text" ><i class="material-icons">view_module</i>Admin</a></li>
      <li><a href="#!" class="orange-text" ><i class="material-icons">cloud</i>five</a></li>
    </ul> 

    <div class="gris-oscuro-3">
      <div class="container nav-wrapper">         
        <form>                            
          <div class="input-fiel col s4 center-align" >              
            <input type="search" placeholder="Buscar" class="white">
            <label class="label-icon" for="search"></label>          
          </div>
        </form>
      </div>          
    </div> 

    <ul class="side-nav" id="mobile-demo">
      <li>
        <p class="center-align">Categorias</p>
      </li>
      <li>
        <a class='dropdown-button btn orange' href='#' data-activates='abastos'>Abastos y viveres</a>
      </li>
      <li>
        <a class='dropdown-button btn orange' href='#' data-activates='panaderias'>Panaderias y pastelerias</a>
      </li>
      <li>
        <a class='dropdown-button btn orange' href='#' data-activates='restaurantes'>Restaurantes</a>
      </li>
      <li>
        <a class='dropdown-button btn orange' href='#' data-activates='salud'>Salud y bienestar</a>
      </li>
      <li>
        <a class='dropdown-button btn orange' href='#' data-activates='tecnologia'>Tecnología</a>
      </li>
      <li>
        <a class='dropdown-button btn orange' href='#' data-activates='ropa'>Ropa y accesorios</a>
      </li>
      <li>
        <div class="divider"></div>
      </li>
      <li>
        <a class="subheader">Subheader</a>
      </li>
      <li>
        <a class="waves-effect btn orange" href="#!">Contacto</a>
      </li>
    </ul>  
    

  </div>          
</body>