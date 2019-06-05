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
                        <a href="willys-pizzeria" class="black-text"><u><h5>Willy´s Pizza</h5></u></a>
                        <h6>Pizzas y comida rápida</h6>
                        <p>Dirección <a href="https://www.google.com/maps/place/Cl.+183+%239a-4,+Bogot%C3%A1/@4.7603493,-74.0345048,17z/data=!3m1!4b1!4m5!3m4!1s0x8e3f8589865969db:0x98aa42999f0f4ea7!8m2!3d4.7603493!4d-74.0323161" target="_blank"><u><i class="fas fa-map-marker-alt"></i> Calle 183 # 9a - 04</u></a></p>
                        <p>Horario de atención</p>
                        <p>Domingo a Domingo 12:00 pm - 12:00 pm</p>
                        <p>Domicilios <a href="tel:+3102015108"><u><i class="fas fa-phone-volume"></i> 3102015108</u></a></p>
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
            <h5 class="red lighten-4">
                <p>¡Llevate un combo por un adicional de <i class="fas fa-dollar-sign"></i>3000!</p>
                <p>Una porción de papas a francesa más una gaseosa personal 250ml</p>
            </h5>
          </div>  
          
          <div class="card-panel center-align">
          <div class="">
          
        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header">Menu <i class="fas fa-utensils"></i></div>
                    <div class="collapsible-body">          
                        <div class="row">    
                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\pizza-hawaiana.jpg" alt="">
                                    <h4></h4>
                                    <p>Pizza Hawaiana</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#pizza-hawaiana">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="pizza-hawaiana" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\pizza-hawaiana.jpg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Pizza hawaina</h5>
                                                <p>Piña y jamon</p>
                                                    <table class="responsive-table centered">
                                                        <thead>
                                                        <tr>
                                                            <th>Porción</th>
                                                            <th>Personal</th>
                                                            <th>Mediana</th>
                                                            <th>Familiar</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        <tr>
                                                            <td><i class="fas fa-dollar-sign"></i> 3800</td>
                                                            <td><i class="fas fa-dollar-sign"></i> 8000</td>
                                                            <td><i class="fas fa-dollar-sign"></i> 20000</td>
                                                            <td><i class="fas fa-dollar-sign"></i> 31000</td>
                                                        </tr>
                                                        <tr>
                                                            
                                                        </tr>
                                                        <tr>
                                                            
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                <!-- <h4>7500</h4> -->
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>
                            
                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\pizza-pollo.jpg" alt="">
                                    <h4></h4>
                                    <p>Pizza Champiñones</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#pizza-pollo">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="pizza-pollo" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\pizza-pollo.jpg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Pizza de Pollo con champiñones</h5>
                                                <p>Pollo, champiñones y queso</p>
                                                    <table class="responsive-table centered">
                                                        <thead>
                                                        <tr>
                                                            <th>Porción</th>
                                                            <th>Personal</th>
                                                            <th>Mediana</th>
                                                            <th>Familiar</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        <tr>
                                                            <td><i class="fas fa-dollar-sign"></i> 3800</td>
                                                            <td><i class="fas fa-dollar-sign"></i> 8000</td>
                                                            <td><i class="fas fa-dollar-sign"></i> 20000</td>
                                                            <td><i class="fas fa-dollar-sign"></i> 31000</td>
                                                        </tr>
                                                        <tr>
                                                            
                                                        </tr>
                                                        <tr>
                                                            
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                <!-- <h4>7500</h4> -->
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>

                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\pizza-mexicana.jpg" alt="">
                                    <h4></h4>
                                    <p>Pizza Mexicana</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#pizza-mexicana">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="pizza-mexicana" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\pizza-mexicana.jpg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Pizza Mexicana</h5>
                                                <p>Salsa bolognesa, queso, Carne molida, Verduras y doritos.</p>
                                                    <table class="responsive-table centered">
                                                        <thead>
                                                        <tr>
                                                            <th>Porción</th>
                                                            <th>Personal</th>
                                                            <th>Mediana</th>
                                                            <th>Familiar</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        <tr>
                                                            <td><i class="fas fa-dollar-sign"></i> 3800</td>
                                                            <td><i class="fas fa-dollar-sign"></i> 8000</td>
                                                            <td><i class="fas fa-dollar-sign"></i> 20000</td>
                                                            <td><i class="fas fa-dollar-sign"></i> 31000</td>
                                                        </tr>
                                                        <tr>
                                                            
                                                        </tr>
                                                        <tr>
                                                            
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                <!-- <h4>7500</h4> -->
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>


                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\pizza-criolla.jpg" alt="">
                                    <h4></h4>
                                    <p>Pizza Criolla</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#pizza-criolla">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="pizza-criolla" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\pizza-criolla.jpg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Pizza Criolla</h5>
                                                <p>Salsa bolognesa, queso, maiz tierno, carne desmechada, pollo.</p>
                                                    <table class="responsive-table centered">
                                                        <thead>
                                                            <tr>
                                                                <th>Porción</th>
                                                                <th>Personal</th>
                                                                <th>Mediana</th>
                                                                <th>Familiar</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td><i class="fas fa-dollar-sign"></i> 3800</td>
                                                                <td><i class="fas fa-dollar-sign"></i> 8000</td>
                                                                <td><i class="fas fa-dollar-sign"></i> 20000</td>
                                                                <td><i class="fas fa-dollar-sign"></i> 31000</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                <!-- <h4>7500</h4> -->
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>


                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\pizza-carnes.jpg" alt="">
                                    <h4></h4>
                                    <p>Pizza Carnes</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#pizza-carnes">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="pizza-carnes" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\pizza-carnes.jpg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Pizza Carnes</h5>
                                                <p>Queso, pepperoni y salami.</p>
                                                <p>Piña y jamon</p>
                                                    <table class="responsive-table centered">
                                                        <thead>
                                                        <tr>
                                                            <th>Porción</th>
                                                            <th>Personal</th>
                                                            <th>Mediana</th>
                                                            <th>Familiar</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        <tr>
                                                            <td><i class="fas fa-dollar-sign"></i> 3800</td>
                                                            <td><i class="fas fa-dollar-sign"></i> 8000</td>
                                                            <td><i class="fas fa-dollar-sign"></i> 20000</td>
                                                            <td><i class="fas fa-dollar-sign"></i> 31000</td>
                                                        </tr>
                                                        <tr>
                                                            
                                                        </tr>
                                                        <tr>
                                                            
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                <!-- <h4>7500</h4> -->
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>

                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\hamburguesa-sencilla.jpg" alt="">
                                    <h4></h4>
                                    <p>hamburguesa Sencilla</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#hamburguesa-sencilla">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="hamburguesa-sencilla" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\hamburguesa-sencilla.jpg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>hamburguesa Sencilla</h5>
                                                <p>Carne, Verduras, jamon, Queso, Huevo de codorniz, Salsa al gusto, Rit de papa</p>
                                                <h4><i class="fas fa-dollar-sign"></i> 6000</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>


                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\hamburguesa-especial.jpeg" alt="">
                                    <h4></h4>
                                    <p>hamburguesa Especial</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#hamburguesa-especial">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="hamburguesa-especial" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\hamburguesa-especial.jpeg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>hamburguesa Especial</h5>
                                                <p>Pollo desmechado. Salsa de champiñon, Verduras, jamon, queso, Huevo de codorniz, Rit de papa y salsas al gusto.</p>
                                                <h4><i class="fas fa-dollar-sign"></i> 7000</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>


                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\perro-sencillo.jpg" alt="">
                                    <h4></h4>
                                    <p>Perro Sencillo</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#perro-sencillo">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="perro-sencillo" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\perro-sencillo.jpg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Perro Sencillo</h5>
                                                <p>Salchicha, Rit de papa, salsas, huevos de codorniz, queso</p>
                                                <h4><i class="fas fa-dollar-sign"></i> 4000</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>


                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\perro-especial.jpg" alt="">
                                    <h4></h4>
                                    <p>Perro Especial</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#perro-especial">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="perro-especial" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\perro-especial.jpg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Perro Especial</h5>
                                                <p>Salchicha americana, Rit de papa.
                                                Salsa de  champiñon, huevo de codorniz y queso.</p>
                                                <h4><i class="fas fa-dollar-sign"></i> 5000</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>

                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\panzerotti.jpg" alt="">
                                    <h4></h4>
                                    <p>Panzerotti</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#panzerotti">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="panzerotti" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\panzerotti.jpg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Panzerotti</h5>
                                                <p></p>
                                                <h4><i class="fas fa-dollar-sign"></i> 7000</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>

                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\mazorcada.jpeg" alt="">
                                    <h4></h4>
                                    <p>Mazorcada</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#mazorcada">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="mazorcada" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\mazorcada.jpeg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Mazorcada</h5>
                                                <p>Mixta.
                                                Carne pollo, queso Rit de papa, champiñon y huevo de codorniz</p>
                                                <h4><i class="fas fa-dollar-sign"></i> 10000</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>

                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\lasagna.jpg" alt="">
                                    <h4></h4>
                                    <p>Lasagna</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#lasagna">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="lasagna" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\lasagna.jpg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Lasagna</h5>
                                                <p>Mixta.
                                                Carne Bolognesa.
                                                Pollo, queso y champiñon</p>
                                                <h4><i class="fas fa-dollar-sign"></i> 8000</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>

                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\salchipapa.jpg" alt="">
                                    <h4></h4>
                                    <p>Salchipapa</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#salchipapa">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="salchipapa" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\salchipapa.jpg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Salchipapa</h5>
                                                <p>Salchicha, papa a la francesa, queso y huevo de codorniz.</p>
                                                <h4><i class="fas fa-dollar-sign"></i> 5000</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>

                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\patacon.jpg" alt="">
                                    <h4></h4>
                                    <p>Patacon</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#patacon">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="patacon" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\patacon.jpg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Patacon</h5>
                                                <p>Mixta
                                                Carne Pollo Queso, Rit de papa, champiñones, huevo de codorniz.</p>
                                                <h4><i class="fas fa-dollar-sign"></i> 7000</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>

                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\churrasco.jpg" alt="">
                                    <h4></h4>
                                    <p>Churrasco</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#churrasco">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="churrasco" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\churrasco.jpg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Churrasco</h5>
                                                <p>Ensalada, papas a la francesa o yuca frita.</p>
                                                <h4><i class="fas fa-dollar-sign"></i> 12000</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>

                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\costillas-cerdo.jpg" alt="">
                                    <h4></h4>
                                    <p>Costillas de cerdo</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#costillas-cerdo">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="costillas-cerdo" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\costillas-cerdo.jpg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Costillas de cerdo</h5>
                                                <p>Ensalada, papas a la francesa o yuca frita.</p>
                                                <h4><i class="fas fa-dollar-sign"></i> 12000</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>


                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\pechuga-plancha.jpg" alt="">
                                    <h4></h4>
                                    <p>Pechuga a la plancha</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#pechuga-plancha">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="pechuga-plancha" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\pechuga-plancha.jpg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Pechuga a la plancha</h5>
                                                <p>Arroz blanco, ensalada, papas a la francesa o yuca frita.</p>
                                                <h4><i class="fas fa-dollar-sign"></i> 12000</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </li>              
    
            <li>
                <div class="collapsible-header">Bebidas <i class="fas fa-wine-bottle"></i></div>
                    <div class="collapsible-body">          
                        <div class="row">    
                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\gaseosa-250.webp" alt="">
                                    <h4></h4>
                                    <p>Gaseosa 250ml</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#gaseosa-250">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="gaseosa-250" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\gaseosa-250.webp" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Gaseosa 250ml</h5>
                                                <p>Botella de gaseosa personal 250ml</p>
                                                <h4><i class="fas fa-dollar-sign"></i> 1300</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>
                            
                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\gaseosa-1,5.webp" alt="">
                                    <h4></h4>
                                    <p>Gaseosa 1.5 lt</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#gaseosa-1-5">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="gaseosa-1-5" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\gaseosa-1,5.webp" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Botella de gaseosa familiar 1.5lt</h5>
                                                <p>Carne lista para el consumo, cortes de calidad.</p>
                                                <h4><i class="fas fa-dollar-sign"></i> 3300</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>

                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\jugo-250.webp" alt="">
                                    <h4></h4>
                                    <p>Jugo 250ml</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#jugo-250">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="jugo-250" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\jugo-250.webp" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Jugo 250ml</h5>
                                                <p>Botella de jugo personal</p>
                                                <h4><i class="fas fa-dollar-sign"></i> 1300</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>
                     </div>
                </div>
            </li>

            <li>
                <div class="collapsible-header">Adicionales <i class="fas fa-cart-plus"></i></div>
                    <div class="collapsible-body">          
                        <div class="row">    
                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\papas-francesas.jpg" alt="">
                                    <h4></h4>
                                    <p>Papas francesas</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#papas-francesas">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="papas-francesas" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\papas-francesas.jpg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Papas a la francesa</h5>
                                                <p>Porción de unas deliciosas papas a la francesa </p>
                                                <h4><i class="fas fa-dollar-sign"></i> 3000</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>
                            
                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\yuca-frita.jpg" alt="">
                                    <h4></h4>
                                    <p>Yuca</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#yuca-frita">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="yuca-frita" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\yuca-frita.jpg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Yuca</h5>
                                                <p>Rica yuca colombiana frita</p>
                                                <h4><i class="fas fa-dollar-sign"></i> 2500</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>

                            <!-- Carta de cada producto -->
                            <div class="col s12 m6 l4 xl4">                
                                <div class="card-panel center-align">
                                    <img class="responsive-img "src="imagenes-willys-pizzeria\patacones.jpg" alt="">
                                    <h4></h4>
                                    <p>Patacones</p>
                                    <a class="waves-effect waves-light btn modal-trigger" href="#patacones">Ver más</a>
                                </div>
                            </div>               

                            <!-- Modal Structure -->
                            <div id="patacones" class="modal">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 m6 l6 xl6">
                                                <img class="responsive-img "src="imagenes-willys-pizzeria\patacones.jpg" alt="">
                                            </div>
                                            <div class="col s12 m6 l6 xl6">
                                                <h5>Patacones</h5>
                                                <p>La mejor porción de patacones!</p>
                                                <h4><i class="fas fa-dollar-sign"></i> 3000</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
                                </div>
                            </div>
                     </div>
                </div>
            </li>
        </ul>



            </div>
          </div>
        </div>



        
        <!-- <div class="col s8">
          <div class="card-panel center align">
            <h4>Los aliados directos de Safe + Tech Colombia </h4>
            <p>Para que así tengas la mejor calidad en los productos</p>
          </div>
        </div>
        <div class="col s4">
          <div class="card-panel center align">
            <h4>Nuestros equipos son fabricados con los mejores productos e insumos de la industria</h4>
            <p>Aplicamos las normas sanitarias, regulación de transito y seguridad de los equipos</p>
          </div> -->
        </div>
      </div>
    </div>

    <?php 
        require ('footers/footer.php');
      ?>