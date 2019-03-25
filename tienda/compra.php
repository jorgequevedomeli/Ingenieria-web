<!DOCTYPE html>
<html>
    <head>
        <title>Buy Product</title>
        <link rel="stylesheet" href="../materialize/css/materialize.css" />
        <link rel="stylesheet" href="../materialize/css/estilos.css" />
        <link href="../imagenes/favicon.ico" type="image/x-icon" rel="shortcut icon" />
        <link href="../imagenes/favicon.ico" type="image/x-icon" rel="icon" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
    </head>
    <body class="container">
        <!--Encabezado dividido en 12 columnas, el select idioma ocupa dos columnas -->
	    <header>
            <div class="row">
                <div class="col s2 center">
                    <img src="../imagenes/gibson-portada.jpg" alt="Logo de Gibson">
                </div>
                <div class="col s1"> </div>
                <div class="col s1"> </div>
                <div class="col s1"> </div>
                <div class="col s1"> </div>
                <div class="col s1"> </div>
                <div class="col s1"> </div>
                <div class="col s1"> </div>
                <div class="col s1"> </div>
                <div class="col s2">
                    <div id="select">
                        <select class="browser-default">
                            <option value="" disabled selected>Selecciona idioma </option>
                            <option value="1"> English </option>
                            <option value="2"> Español </option>
                        </select>
                    </div>
                </div>
            </div>
        </header>

        <!--Barra de navegacion-->
        <section>
            <nav>
			    <div class="nav-wrapper white">
			      <ul id="nav-mobile" class="left hide-on-med-and-down black white lightten-2">
			      	<li><a href="../index.php"><div class="black-text"><img src="../imagenes/Nav-GibsonCom.png" width="5%"><b></b></div></a></li>
			      	<!-- Menu PRODUCTS hacia abajo -->
			      	<li> 
						<a class = "dropdown-button grey-text" href = "#" data-activates = "dropdown1">PRODUCTS</a>
						<ul id = "dropdown1" class = "grey-text dropdown-content">
						<li><a class="grey-text" href = "../electric-guitars.php">Electric Guitars</a></li>
						<li><a class="grey-text" href = "../acoustic-guitars.php">Acoustic Instruments</a></li>
						<li><a class="grey-text" href = "#">Gear & Accessories</a></li>
						<li><a class="grey-text" href = "#">Pro Audio</a></li>
						</ul>
					</li>
			        <li>
						<a class = "dropdown-button grey-text" href = "#" data-activates = "dropdown2">NEWS-LIFESTYLE</a>
						<ul id = "dropdown2" class = "grey-text dropdown-content">
						<li><a class="grey-text" href = "#">Features</a></li>
						<li><a class="grey-text" href = "#">News</a></li>
						<li><a class="grey-text" href = "#">Gear & Tech</a></li>
						<li><a class="grey-text" href = "#">Contests</a></li>
						</ul>
			        </li>
			        <li>
			        	<a class = "dropdown-button grey-text" href = "#" data-activates = "dropdown3">COMMUNITY</a>
						<ul id = "dropdown3" class = "grey-text dropdown-content">
						<li><a class="grey-text" href = "#">Forums</a></li>
						<li><a class="grey-text" href = "#">Facebook</a></li>
						<li><a class="grey-text" href = "#">Twitter</a></li>
						<li><a class="grey-text" href = "#">Youtube</a></li>
						</ul>
			        </li>
			        <li><a href="../store.php"><div class="grey-text">STORE</div></a></li>
			        <li>
			        	<a class = "dropdown-button grey-text" href = "carrito.php" data-activates = "dropdown4">CART</a>
			        </li>
			      </ul>
			    </div>
			  </nav>
        </section>
        
        <section>
            <br>
            <br>
            <form action="./confirm-compra.php" method="post">
                <div class="row">
                <!--Formulario de confirmacion de compra-->
                <div class="col s6">
                    <label> Name: </label>
                    <input type="text" name="nombre" maxlength=25 required><br>

                    <label> Last Name: </label>
                    <input type="text" name="apellido" maxlength=25 required><br>

                    <label> Country: </label>
                    <div id="pais">
                            <select class="browser-default">
                                <option value="" disabled selected>Select country </option>
                                <option value="arg"> Argentina </option>
                                <option value="bra"> Brasil </option>
                                <option value="col"> Colombia </option>
                                <option value="can"> Canada </option>
                                <option value="chi"> China </option>
                                <option value="den"> Denmark </option>
                                <option value="eng"> England </option>
                                <option value="fra"> France </option>
                                <option value="ger"> Germany </option>
                                <option value="jap"> Japan </option>
                                <option value="net"> Netherlands </option>
                                <option value="usa"> Unitad States </option>
                            </select>
                    </div>

                    <label> Phone: </label>
                    <input type="number" minlength=16 maxlength=16 name="telefono" required><br>

                    <label> Email: </label>
                    <input type="email" name="mail" maxlength=25 required><br>
                    <div class="row">
                        <div class="col s6">
                            <label> Adress </label>
                            <input type="text" name="direccion" maxlength=25 required>
                        </div>
                        <div class="col s6">
                            <label> Number: </label>
                            <input type="number" name="apellido" maxlength=20 required>
                        </div> 
                    </div>
                    <label> Card type: </label>
                    <div id="card">
                            <select class="browser-default">
                                <option value="" disabled selected>Select card type </option>
                                <option value="vis"> Visa </option>
                                <option value="mas"> MasterCard </option>
                                <option value="exp"> American Express </option>
                                <option value="pay"> Paypal </option>
                            </select>
                    </div>
                    <div class="row">
                        <div class="col s6">
                            <label> Number card </label>
                            <input type="text" name="tarjetanumero" maxlength=16 minlength=16 required>
                        </div>
                        <div class="col s2">
                            <label> CVC </label>
                            <input type="number" name="cvc" maxlength=3 required>
                        </div> 
                        <label> Expiration Date </label>
                        <div class="col s2">
                            <input type="number" name="anioexp" maxlength=2 required>
                        </div> 
                        <div class="col s2">
                            <input type="number" name="mesexp" maxlength=2 required>
                        </div> 
                    </div>
                    <br>
                </div>
                <!--Informacion del producto a comprar-->
                <div class="col s6">
                    <?php
                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                            $price = $_POST["price"];
                            $product = $_POST["product"];
                            $image = $_POST["image"];
                            $orientation = $_POST["guitar-orientation"];
                    ?>
                    <div class="fuente"><b><div class="text-center"><?php echo $product;?></div></b></div>
                    <br>
                    <?php
                        echo '<img src='.'"'.$image.'">';
                    ?>
                    <h6>Left/Right Handed:<b><?php echo "       ".$orientation; ?></b></h6>
                    <h6 class="text-left">Price: <b><?php echo '$'.$price; ?></b></h6>
                    <h6 class="text-left">Sell Cost: <b>$50</b></h5>
                    <?php 
                        $total_amount = $price + 50;
                    ?>
                    <h6 class="text-left">Total Amount: <b><?php echo '$'.$total_amount;?></b></h6>
                    <?php
                        }
                    ?>
                    <br>
                    <div class="row">
                        <div class="col s6">
                            <button id="confirm" type="submit" class = "waves-effect waves-marron btn-large btn-group boton" name="action">
                                    <span class="text-center">
                                        <div class="blue-text text-darken-2">Confirm</div>
                                    </span>
                            </button>
                        </div>
                        <div class="col s6">
                                <button id="carry" type="button" class = "waves-effect waves-marron btn-large btn-group boton">
                                        <span class="text-center">
                                                <div class="blue-text text-darken-2">Cancel</div>
                                            </span>
                                </button>
                        </div>
                    </div>
                </div>
                </div>
            </form>
        </section>
    </body>
</html>
