<!DOCTYPE html>
<html>
	<head>
		<title>Products</title>
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
									<option value="" disabled selected>Selecciona idioma </option>
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
			        	<a class = "dropdown-button grey-text" href = "#" data-activates = "dropdown4">24/7 SUPPORT</a>
						<ul id = "dropdown4" class = "grey-text dropdown-content">
						<li><a class="grey-text" href = "#">Dealers</a></li>
						<li><a class="grey-text" href = "#">Acoustic Five-Star Dealers</a></li>
						<li><a class="grey-text" href = "#">Online-Dealers</a></li>
						<li><a class="grey-text" href = "#">International Distributors</a></li>
						</ul>
			        </li>
			      </ul>
			    </div>
			  </nav>
		</section>
		<section>
			<div class="col s12">
				<a href="#"><img src="./productos/imagenes/portada.jpg" width="85%"></a>
			</div>
		</section>
		<section class="fondo">
			<div class="productos"> <b>Acoustic Guitars</b> </div>
			<br><br>
			<div class="row">
				<div class="col s3">
					<div class="card-panel #eceff1 blue-grey lighten-5">
						<a href="#"><div class="grilla2"> <img src="./productos/imagenes/gibson-5.jpg"> </div></a>
						<span class="texto-grilla"> Gibson Acoustic </span>
						<br>
						<span class="texto-grilla2"> <b>Kazuyoshi Saito J-35<br><br></b></span>
				</div>
				</div>
				<div class="col s3">
					<div class="card-panel #eceff1 blue-grey lighten-5">
						<a href="#"><div class="grilla2"> <img src="./productos/imagenes/gibson-6.jpg"> </div></a>
						<span class="texto-grilla"> Gibson Acoustic  </span>
						<br>
						<span class="texto-grilla2"> <b>Songwriter Studio<br><br></b></span>
					</div>
				</div>
				<div class="col s3">
					<div class="card-panel #eceff1 blue-grey lighten-5">
						<a href="#"><div class="grilla2"> <img src="./productos/imagenes/gibson-7.jpg"> </div></a>
						<span class="texto-grilla"> Gibson Acoustic  </span>
						<br>
						<span class="texto-grilla2"> <b>Songwriter 12-String<br><br></b></span>
					</div>
				</div>
				<div class="col s3">
					<div class="card-panel #eceff1 blue-grey lighten-5">
						<a href="#"><div class="grilla2"> <img src="./productos/imagenes/gibson-8.jpg"> </div></a>
						<span class="texto-grilla"> Gibson Acoustic  </span>
						<br>
						<span class="texto-grilla2"> <b>Super 200 Birdseye<br><br></b></span>
					</div>
				</div>
			</div>
			<br>
			<br>
		</section>

</body>
</html>