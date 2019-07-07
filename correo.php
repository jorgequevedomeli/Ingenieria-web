<!DOCTYPE html>
<html>
	<head>
		<title>Confirm mail</title>
		<link rel="stylesheet" href="./materialize/css/materialize.css" />
		<link rel="stylesheet" href="./materialize/css/estilos.css" />
		<link href="./imagenes/favicon.ico" type="image/x-icon" rel="shortcut icon"/> 
		<link href="./imagenes/favicon.ico" type="image/x-icon" rel="icon"/> 

		<link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
		<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
		<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
	</head>
	<body class="container">
		<header>
				<div class="row">
						<div class="col s2 center" > 
							<img src="./imagenes/gibson-portada.jpg" alt="Logo de Gibson">
						</div>
						<div class="col s1">  </div>
						<div class="col s1">  </div>
						<div class="col s1">  </div>
						<div class="col s1">  </div>
						<div class="col s1">  </div>
						<div class="col s1">  </div>
						<div class="col s1">  </div>
						<div class="col s1">  </div>
						<div class="col s2">
							<div id="select">
								<select class="browser-default">
									<option value="" disabled selected>Select language </option>
									<option value="1"> English </option>
									<option value="2"> Español </option>
								</select>
							</div>
						</div>
					</div>
		</header>

		<section>
			  <nav>
			    <div class="nav-wrapper white">
			      <ul id="nav-mobile" class="left hide-on-med-and-down black white lightten-2">
			      	<li><a href="index.php"><div class="black-text"><img src="./imagenes/Nav-GibsonCom.png" width="5%"><b></b></div></a></li>
			      	<!-- Menu PRODUCTS hacia abajo -->
			      	<li> 
						<a class = "dropdown-button grey-text" href = "#" data-activates = "dropdown1">PRODUCTS</a>
						<ul id = "dropdown1" class = "grey-text dropdown-content">
						<li><a class="grey-text" href = "electric-guitars.php">Electric Guitars</a></li>
						<li><a class="grey-text" href = "acoustic-guitars.php">Acoustic Instruments</a></li>
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
			        <li><a href="store.php"><div class="grey-text">STORE</div></a></li>
			        <li>
			        	<a class = "dropdown-button grey-text" href = "tienda/carrito.php" data-activates = "dropdown4">CART</a>
			        </li>
			      </ul>
			    </div>
			  </nav>
        </section>
        <section>
            <?php
                $mail = $_POST['mail'];
                
                $asunto = "Subscribe Gibson";
                $mensaje = "You have subscribed to Gibson's newsletter. You will recieve the latest news of our brand, deals and more!";

                if(mail($mail, $asunto, $mensaje)){
                    ?>
                    <h2> You have subscribed successfully! </h2>
                    <?php
                } else {
                    echo "Error mandando mail";
                }
            ?>
        </section>
</body>

</html>