<!DOCTYPE html>
<html>

    <head>
        <title>Les Paul Studio Tribute 2019</title>

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
                        <li><a href="../index.php">
                                <div class="black-text"><img src="../imagenes/Nav-GibsonCom.png" width="5%"><b></b></div>
                            </a></li>
                        
                        <li>
                            <a class="dropdown-button grey-text" href="../productos.html" data-activates="dropdown1">
                                <div onmousemove="moveFunction(this)">PRODUCTS</div>
                            </a>
                            <ul id="dropdown1" class="grey-text dropdown-content" onmousemove="moveFunction(this)">
                                <li><a class="grey-text" href = "../electric-guitars.php">Electric Guitars</a></li>
                                <li><a class="grey-text" href = "../acoustic-guitars.php">Acoustic Instruments</a></li>
                                <li><a class="grey-text" href="#">Gear & Accessories</a></li>
                                <li><a class="grey-text" href="#">Pro Audio</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-button grey-text" href="#" data-activates="dropdown2">NEWS-LIFESTYLE</a>
                            <ul id="dropdown2" class="grey-text dropdown-content">
                                <li><a class="grey-text" href="#">Features</a></li>
                                <li><a class="grey-text" href="#">News</a></li>
                                <li><a class="grey-text" href="#">Gear & Tech</a></li>
                                <li><a class="grey-text" href="#">Contests</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-button grey-text" href="#" data-activates="dropdown3">COMMUNITY</a>
                            <ul id="dropdown3" class="grey-text dropdown-content">
                                <li><a class="grey-text" href="#">Forums</a></li>
                                <li><a class="grey-text" href="#">Facebook</a></li>
                                <li><a class="grey-text" href="#">Twitter</a></li>
                                <li><a class="grey-text" href="#">Youtube</a></li>
                            </ul>
                        </li>
                        <li><a href="../store.php">
                                <div class="grey-text">STORE</div>
                            </a></li>
                        <li>
                            <a class="dropdown-button grey-text" href="#" data-activates="dropdown4">24/7 SUPPORT</a>
                            <ul id="dropdown4" class="grey-text dropdown-content">
                                <li><a class="grey-text" href="#">Dealers</a></li>
                                <li><a class="grey-text" href="#">Acoustic Five-Star Dealers</a></li>
                                <li><a class="grey-text" href="#">Online-Dealers</a></li>
                                <li><a class="grey-text" href="#">International Distributors</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <!--Descripcion del producto con price, y buttons para añadir al carrito o comprar-->
        <section>
            <br>
            <div class="row">
                <div class="col s7">
                    <img src="guitar3.png">
                </div>
                <div class="col s5">
                    <div class="fuente"><b><div class="text-center">Les Paul Studio Tribute 2019</div></b></div>
                    <div class="grey-text #e6e6e6"><h5><div class="text-center">A Tribute To The Master</div></h5></div>
                    <p>
                        The Les Paul Studio Tribute captures the vibe, feel and tonality of a traditional Les Paul in two 
                        new finishes for 2019. A slim taper maple neck profile and ultra-modern weight relief make the 2019 
                        Gibson Les Paul Studio Tribute a pleasure to play. A pair of open-coil 490 humbucking pickups with Alnico 
                        II magnets provide classic 50's era tone, power and sustain.
                    </p>
                    <form action="compra.php" method="POST">
                        <h6 class="text-center">Buying Options</h6>
                        <span>Left/Right Handed:</span>
                        <br>
                        <br>
                        <label>
                            <input type="radio" name="guitar-orientation" value="Left-Handed">
                            <span>Lefty</span>
                        </label>
                        <label>
                            <input type="radio" name="guitar-orientation" value="Right-Handed">
                            <span>Righty</span>
                        </label>
                        <h5 class="text-center">
                            <b>
                               <h6>$1,199.00<h6>
                               <input type="hidden" name="price" value="1199.00">
                               <input type="hidden" name="image" value="guitar3.png">
                               <input type="hidden" name="product" value="Les Paul Studio Tribute 2019">
                               <br>
                            </b>
                        </h5>
                        <div class="col s6">
                            <button id="buy" type="submit" class = "waves-effect waves-marron btn-large btn-group boton" name="action">
                                    <span class="text-center">
                                        <div class="blue-text text-darken-2">Buy</div>
                                    </span>
                            </button>
                        </div>
                        <div class="col s6">
                                <button id="carry" type="button" class = "waves-effect waves-marron btn-large btn-group boton">
                                        <span class="text-center">
                                                <div class="blue-text text-darken-2">Add to Cart</div>
                                            </span>
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <br>
        <br>
        <!--Especificaciones tecnicas de la guitarra-->
        <section class="texto-especif">
            <h4>
                Les Paul Studio Tribute 2019 Specifications
            </h4>
            <h5>
                <span class="brown-text text-lighten-2">Body</span>
            </h5>
                <div class="row">

                    <div class="col s3 text-left">
                        <b>Body Material</b>
                    </div>

                    <div class="col s3">
                    </div>
                    <div class="col s3">
                    </div>

                    <div class="col s3 text-right">
                        Mahogany
                    </div>
                </div>

                <div class="row">

                        <div class="col s3 text-left">
                            <b>Finish</b>
                        </div>
    
                        <div class="col s3">
                        </div>
                        <div class="col s3">
                        </div>
    
                        <div class="col s3 text-right">
                            Satin Nitrocellulose Lacquer
                        </div>
                </div>

                <h5>
                    <span class="brown-text text-lighten-2">Neck</span>
                </h5>

                <div class="row">

                        <div class="col s3 text-left">
                            <b>Neck Material</b>
                        </div>
    
                        <div class="col s3">
                        </div>
                        <div class="col s3">
                        </div>
    
                        <div class="col s3 text-right">
                            Mapple
                        </div>
                </div>
                <div class="row">

                        <div class="col s3 text-left">
                            <b>Neck Profile</b>
                        </div>
    
                        <div class="col s3">
                        </div>
                        <div class="col s3">
                        </div>
    
                        <div class="col s3 text-right">
                            Slim Taper
                        </div>
                </div>
                <div class="row">

                        <div class="col s3 text-left">
                            <b>Fingerboard Material</b>
                        </div>
    
                        <div class="col s3">
                        </div>
                        <div class="col s3">
                        </div>
    
                        <div class="col s3 text-right">
                            Rosewood
                        </div>
                </div>
                <div class="row">

                        <div class="col s3 text-left">
                            <b>Fingerboard Radius</b>
                        </div>
    
                        <div class="col s3">
                        </div>
                        <div class="col s3">
                        </div>
    
                        <div class="col s3 text-right">
                            12" / 304.8mm
                        </div>
                </div>
                <div class="row">

                        <div class="col s3 text-left">
                            <b>Number of Frets</b>
                        </div>
    
                        <div class="col s3">
                        </div>
                        <div class="col s3">
                        </div>
    
                        <div class="col s3 text-right">
                            22
                        </div>
                </div>
                <div class="row">

                        <div class="col s3 text-left">
                            <b>Frets</b>
                        </div>
    
                        <div class="col s3">
                        </div>
                        <div class="col s3">
                        </div>
    
                        <div class="col s3 text-right">
                            Low - Cryogenically Treated
                        </div>
                </div>
                <div class="row">

                        <div class="col s3 text-left">
                            <b>Nut Material</b>
                        </div>
    
                        <div class="col s3">
                        </div>
                        <div class="col s3">
                        </div>
    
                        <div class="col s3 text-right">
                                Tektoid
                        </div>
                </div>
                <div class="row">

                        <div class="col s3 text-left">
                            <b>>Nut Width</b>
                        </div>
    
                        <div class="col s3">
                        </div>
                        <div class="col s3">
                        </div>
    
                        <div class="col s3 text-right">
                            1.69" / 43.05mm
                        </div>
                </div>
                <div class="row">

                        <div class="col s3 text-left">
                            <b>End-of-Board Width</b>
                        </div>
    
                        <div class="col s3">
                        </div>
                        <div class="col s3">
                        </div>
    
                        <div class="col s3 text-right">
                                2.26" / 57.4mm
                        </div>
                </div>
                <div class="row">

                        <div class="col s3 text-left">
                                <b>Inlays</b>
                        </div>
    
                        <div class="col s3">
                        </div>
                        <div class="col s3">
                        </div>
    
                        <div class="col s3 text-right">
                            Acrylic Dots
                        </div>
                </div>
                <h5>
                        <span class="brown-text text-lighten-2">Hardware</span>
                </h5>
                <div class="row">

                        <div class="col s3 text-left">
                            <b>Finish</b>
                        </div>
    
                        <div class="col s3">
                        </div>
                        <div class="col s3">
                        </div>
    
                        <div class="col s3 text-right">
                            Chrome
                        </div>
                </div>
                <div class="row">

                        <div class="col s3 text-left">
                            <b>Bridge</b>
                        </div>
    
                        <div class="col s3">
                        </div>
                        <div class="col s3">
                        </div>
    
                        <div class="col s3 text-right">
                            Compensated Wraparound
                        </div>
                </div>
                <div class="row">

                        <div class="col s3 text-left">
                            <b>Tuners</b>
                        </div>
    
                        <div class="col s3">
                        </div>
                        <div class="col s3">
                        </div>
    
                        <div class="col s3 text-right">
                            AVintage Deluxe w/ White Buttons
                        </div>
                </div>
                <div class="row">

                        <div class="col s3 text-left">
                            <b>Pick Guard</b>
                        </div>
    
                        <div class="col s3">
                        </div>
                        <div class="col s3">
                        </div>
    
                        <div class="col s3 text-right">
                            Black 5-ply
                        </div>
                </div>
                <div class="row">

                        <div class="col s3 text-left">
                            <b>Control Knobs</b>
                        </div>
    
                        <div class="col s3">
                        </div>
                        <div class="col s3">
                        </div>
    
                        <div class="col s3 text-right">
                            Black Top Hats
                        </div>
                </div>
        </section>
    </body>
</html>