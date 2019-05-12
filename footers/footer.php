<footer class="page-footer orange">
          <div class="container">
            <div class="row">
              <div class="col s12 m2 l2 xl2 center-align">
                <a href="index" class="brand-logo"><img src="img/logo.png" alt="Logo vecy" class=" btn-large black"></a> 
                <p class="grey-text text-lighten-4">"Slogan muy bonito"</p>
              </div>

              <div class="col s12 m3 l3 xl3">
                <h5 class="white-text">Legal</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="terminos">Terminos</a></li>
                  <li><a class="grey-text text-lighten-3" href="privacidad">Privacidad</a></li>
                </ul>
              </div>

              <div class="col s12 m5 l5 xl5">
                <h5 class="white-text">Conoce más</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Qué es Vecy?</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Cómo funciona?</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Quiero hacer que mi negocio aparezca acá!</a></li>
                </ul>
              </div> 

              <div class="col s12 m2 l2 xl2 center-align">
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/Vecy-Oficial"><i class="fab fa-facebook fa-2x"></i></a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/vecyoficial"><i class="fab fa-instagram fa-2x"></i></a></li>
                  <li><a class="grey-text text-lighten-3" href="https://twitter.com/OficialVecy"><i class="fab fa-twitter fa-2x"></i></a></li>
                </ul>               
              </div>

              <div class="col l4 offset-l2 s12">
                
              </div>
            </div>
          </div>
          <div class="footer-copyright orange">
            <div class="container center-align">
              2019 Vecy            
            </div>
          </div>
        </footer>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        $(document).ready(function(){
        $('.carousel').carousel();
        });    
        $('.carousel.carousel-slider').carousel({fullWidth: true});
        $('#textarea1').val('New Text');
        $('#textarea1').trigger('autoresize')
        // Initialize collapse button
        $(".button-collapse").sideNav();
        // Initialize collapsible (uncomment the line below if you use the dropdown variation)
        //$('.collapsible').collapsible();
        $(document).ready(function(){
          // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
          $('.modal').modal();
        });
        $(document).ready(function(){
          $('.scrollspy').scrollSpy();
        });
        $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrainWidth: false, // Does not change width of dropdown to that of the activator
            hover: false, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: false, // Displays dropdown below the button
            alignment: 'left', // Displays dropdown with edge aligned to the left of button
            stopPropagation: false // Stops event propagation
          }
        );
        $(document).ready(function(){
          $('.collapsible').collapsible();
        });
        $(document).ready(function() {
          $('select').material_select();
        });

       
              
    </script>
    </body>
  </html>