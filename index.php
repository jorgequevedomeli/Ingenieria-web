<!DOCTYPE html>
<html>
	<head>
		<title>Gibson</title>
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
			        	<a class = "dropdown-button grey-text" href = "tienda/carrito.php" data-activates = "dropdown4">CART</a>
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
		<br>
	<section>
		<div class="row">
			<div class="col s3">
				<a href="#">
					<div class="grilla"> <img src="./imagenes/gibson-1.jpg" width="95%"> </div>
				</a>
			</div>
			<div class="col s3">
				<a href="#">
					<div class="grilla"> <img src="./imagenes/gibson-2.jpg" width="95%"> </div>
				</a>
			</div>
			<div class="col s3">
				<a href="#">
					<div class="grilla"> <img src="./imagenes/gibson-3.jpg" width="95%"> </div>
				</a>
			</div>
			<div class="col s3">
				<a href="#">
					<div class="grilla"> <img src="./imagenes/gibson-4.jpg" width="95%""> </div></a>
			</div>
		</div>
	</section>
	<br>
	<br>
	<br>
	<br>
	<br>
	<section>
		<div class=" fuente">
						Featured News
					</div>
					<div class="row">
						<div class="col s6">
							<a href="#">
								<div class="imagen"><img src="./imagenes/news.jpg"></div>
							</a>
						</div>
						<div class="col s6">
							<a href="#">
								<div class="imagen"><img src="./imagenes/slash.jpg"></div>
							</a>
						</div>
					</div>
	</section>

	<section>
		<div class="row">
			<div class="col s6">
				<div class="#1a237e-text darken-4">
					<h5><a href="new-1.php">Gibson: Launches New Product, Showcases Marquee Artists and New Talent Worldwide at NAMM 2019</a> </h5>
					<h5><a href="new-2.php">Gibson Reveals Exciting New Product Line-Up & Artist Collaborations Ahead of Winter NAMM</a> </h5>
					<h5><a href="new-3.php">Gibson: Announces Limited-Edition Chris Cornell Tribute Guitar</a> </h5>
				</div>
				<div class="fuente2">
					<a href="#"><b>View all news</b></a>
				</div>
			</div>
		</div>
	</section>
	<footer class="container foot">
		<div class="row">
			<div class="col s1">
				
			</div>
			<div class="col s2">
				<img src="./imagenes/Gibson-Brands.png" class="img-fluid">
			</div>
			<div class="col s3">

			</div>
			<div class="col s3">
				
			</div>
			<div class="col s3">
			
			</div>
		</div>
	</footer>
</body>

</html>