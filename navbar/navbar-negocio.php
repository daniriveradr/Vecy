<body> 
    <div>
        <nav class="gris-oscuro-3">
          <div class="nav-wrapper container ">
                <a href="index" class="brand-logo"><img src="img/logo.png" alt="Logo vecy" class=" btn-large black"></a>      
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a class='dropdown-button btn-large orange' href='#' data-activates='boton-mas'><i class="material-icons">arrow_drop_down_circle</i></a></li>
                </ul>
          </div>
        </nav>

    <!-- Dropdown Structure -->
    <ul id='boton-mas' class='dropdown-content'>
      <!-- Modal Trigger -->
      <li><a href="#ingresar1" class="orange-text modal-trigger"><i class="fas fa-sign-in-alt"></i> Ingresar</a></li>
      <li><a href="#ingresar2" class="orange-text modal-trigger"><i class="fas fa-user"></i > Perfil</a></li>
      <li><a href="panel-admin" class="orange-text"><i class="fas fa-user-lock"></i> Admin</a></li>
      <!-- <li><a href="login-admin" class="orange-text"><i class="fas fa-user-lock"></i> Admin</a></li> -->
      <li><a href="#!" class="orange-text"><i class="fas fa-door-open"></i> Cerrar sesión</a></li>
    </ul> 

  <!-- Modal Structure -->
  <div id="ingresar1" class="modal -text">
    <div class="modal-content">
        <div class="row">
          <div class="col s6 m6 l6 xl6">
            <div class="card-panel z-depth-3">
              <div class="center-align">
                <h4>Inicia sesión</h4>
              </div>

              <form class="" method="post">
                <div class="row">
                  <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email" data-error="wrong" data-success="right">Email</label>
                  </div>
                  <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                  </div>
                  <div class="input-field col s12">
                    <!-- <input type="submit" value="" type="submit" class="btn red accent-4">  -->
                    <div class="col s12 m12 l12 xl12 center-align ">
                      <a href="" type="submit" value="" type="submit" class="btn z-depth-2">Iniciar sesión</a>
                    </div>
                    <!-- <button id="input_9" type="submit" class="btn red accent-4" data-component="button">
                      Enviar Correo
                    </button> -->
                  </div>
                </div>              
              </form>

            </div>            
          </div>

          <div class="col s6">
            <div class="col s6">
              <!-- <img class="responsive-img" src="img/maps.jpg" alt="imagen de referencia"> -->
            </div>
            <h5>No estas registrado?</h5>            
            <p>Conoce todos los negocios de tu barrio sin tener que desplazarte</p>
            
            <div class="center-align">
              <a href="registro" class="btn white orange-text"><strong>Registrarse</strong></a>
            </div>            

            <br>
            <br>
            <br>
         
            <h5>Quiero hacer parte de Vecy</h5>
            <p>Texto convencedor</p>
            <!-- <img class="responsive-img" src="https://cdn.pixabay.com/photo/2018/05/08/08/42/handshake-3382503__340.jpg" alt="imagen de referencia"> -->
            <div class="center-align">
              <a href="negocios" class="btn orange">Ser un "Vecy"</a>
            </div>            
          </div>
        </div>
    </div>
    <!-- <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat red white-text">Cerrar</a>
    </div> -->
  </div>

  <!-- Modal Structure -->
  <div id="ingresar2" class="modal">
    <div class="modal-content">
      <div class="row">
        <div class="col s6 orange">
          <h3>Hola daniel</h3>
          
        </div>
        <div class="col blue">
          <h3>Hola daniel</h3>
          <div class="col s6 white-text">
            <h5>No estas registrado?</h5>
            <p>Conoce todos los negocios de tu barrio sin tener que desplazarte</p>
            <img src="" alt="imagen de referencia">
            <div class="center-align">
              <a href="" class="white-text">Registrarse</a>
            </div>            
          </div>
          <div class="col s6 white-text">
            <h5>Quiero hacer parte de Vecy</h5>
            <p>Texto convencedor</p>
            <img class="responsive-img col s4" src="https://image.freepik.com/vector-gratis/hombre-negocios-agitando-manos-sobre-contrato-firmado_3446-646.jpg" alt="imagen de referencia">
            <div class="center-align">
              <a href="" class="btn">Ser un "Vecy"</a>
            </div>            
          </div>
        </div>
      </div>
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