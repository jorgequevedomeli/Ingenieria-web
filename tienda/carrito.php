<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
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
		<h4>
			List of products in cart:
		</h4>
		<br>
		<br>
			<?php
				include "conexion.php";
				// Hago el insert del producto que me envian por formulario si es que me envian los datos
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					//$id = rand();
					$borrar_carrito = $_POST["tuvieja"];
					//echo "borra carrito es: ".$borrar_carrito;
					if($borrar_carrito == 1){
						$sql = "DELETE FROM carritogibson";
						pg_query($dbconn4,$sql);
						/*
						if($conn->query($sql) === FALSE){
							die("error delete : ".$sql."<br>".$conn->error);
						}*/
						$borrar_carrito = 0;
					} else {
						$price = $_POST["price"];
						$name = $_POST["product"];
						$image = $_POST["image"];
						$orientation = $_POST["guitar-orientation"];
						
						$sql = "INSERT INTO carritogibson(orientation,nombre,imagen,precio) VALUES ('".$orientation."','".$name."','".$image."',".$price.")";
						pg_query($dbconn4,$sql);
						// Selecciono productos
						$sql = "SELECT * FROM carritogibson";
						$re = pg_query($dbconn4,$sql);
						$precio_acumulado = 0;
						if(pg_num_rows($re) > 0){
							while($row = pg_fetch_assoc($re)) {
								// Muestro lista de productos
								$precio_acumulado = $precio_acumulado + $row['precio'];   
								?>
								<div class="row">
									<div class="col s6">
										<img src="<?php echo $row['imagen'];?>" >
									</div>
									<div class="col s6">
										<h5> <?php echo $row['nombre'];?> </h5>
										<h6> <b>Price:</b> $<?php echo $row['precio']; ?> </h6>
										<h6> <b>Guitar-Orientation:</b> <?php echo $row['orientation']; ?> </h6>
										<h6> <b> Product ID:</b> #<?php echo $row['id']; ?> </h6>
									</div>
								</div>
								<?php
							}
							?>
							<h6><b> Total Amount: <?php echo '$'.$precio_acumulado; ?></b></h6>
							<div class="row">
							<form action="compra.php" method="POST" name="formulariocompra" id="formulariocompra">
								<input type="hidden" name="price" value="<?php echo $precio_acumulado;?>">
								<input type="hidden" name="image" value="carrito.png">
								<input type="hidden" name="product" value="Cart Buy">
								<input type="hidden" name="tuvieja" value=0>
								<div class="col s6">
									<span class="text-center">
											<div class="blue-text text-darken-2">
												<input type="submit" name="buycart" value="buy cart" class = "blue-text text-darken-2 waves-effect waves-marron btn-large btn-group boton">
											</div>
									</span>
								</div>
							</form>
							<form action="carrito.php" method="POST" name="formularioborrar" id="formularioborrar">
								<input type="hidden" name="tuvieja" value=1>
								<div class="col s6">
										<span class="text-center">
												<div class="blue-text text-darken-2">
													<input type="submit" name="deletecart" value="clean cart" class = "blue-text text-darken-2 waves-effect waves-marron btn-large btn-group boton">
												</div>
										</span>
								</div>
							</form>
							</div>
							<?php
						} else{
							echo "Nothing to show";
						}
					}
					//$borrar_carrito = FALSE;
					
				} else{
					// Selecciono productos
					$sql = "SELECT * FROM carritogibson";
					$re = pg_query($dbconn4,$sql);
					$precio_acumulado = 0;
					if(pg_num_rows($re) > 0){
						while($row = pg_fetch_row($re)) {
							// Muestro lista de productos
							$precio_acumulado = $precio_acumulado + $row['precio'];   
							?>
							<div class="row">
								<div class="col s6">
									<img src="<?php echo $row['imagen'];?>" >
								</div>
								<div class="col s6">
									<h5> <?php echo $row['nombre'];?> </h5>
									<h6> <b>Price:</b> $<?php echo $row['precio']; ?> </h6>
									<h6> <b>Guitar-Orientation:</b> <?php echo $row['orientation']; ?> </h6>
									<h6> <b> Product ID:</b> #<?php echo $row['id']; ?> </h6>
								</div>
							</div>
							<?php
						}
						?>
						<h6><b> Total Amount: <?php echo '$'.$precio_acumulado; ?></b></h6>
						<div class="row">
						<form action="compra.php" method="POST" name="formulariocompra" id="formulariocompra">
							<input type="hidden" name="price" value="<?php echo $precio_acumulado;?>">
							<input type="hidden" name="image" value="carrito.png">
							<input type="hidden" name="product" value="Cart Buy">
							<input type="hidden" name="tuvieja" value=0>
							<div class="col s6">
								<span class="text-center">
										<div class="blue-text text-darken-2">
											<input type="submit" name="buycart" value="buy cart" class = "blue-text text-darken-2 waves-effect waves-marron btn-large btn-group boton">
										</div>
								</span>
							</div>
						</form>
						<form action="carrito.php" method="POST" name="formularioborrar" id="formularioborrar">
							<input type="hidden" name="tuvieja" value=1>
							<div class="col s6">
									<span class="text-center">
											<div class="blue-text text-darken-2">
												<input type="submit" name="deletecart" value="clean cart" class = "blue-text text-darken-2 waves-effect waves-marron btn-large btn-group boton">
											</div>
									</span>
							</div>
						</form>
						</div>
						<?php
					} else{
						echo "Nothing to show";
					}
				}

			?>
		</section>
    </body>
</html>
