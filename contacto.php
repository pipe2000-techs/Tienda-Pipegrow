<?php
	include 'car.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PipeGrow - Contactanos</title>
	<link rel="icon" href="logo/fav.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
<! -- encabesado-->
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

			<div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
					<div class="site-top-icons">
					<ul>
					  <li><a href="https://www.instagram.com/andresgonzalez_2000/?hl=es-la" target="_blank"><span class="icon-instagram"></span></a></li>
					  <li><a href="https://api.whatsapp.com/send?phone=573124930278&text=%20nesesito%20informacion%20de&source=&data=" target="_blank"><span class="icon-whatsapp"></span></a></li>
					  <li><a href="https://www.facebook.com/andres.pino.79462815"><span class="icon-facebook-square" target="_blank"></span></a></li>
					</ul>
				   </div>
				</div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
				<div class="site-logoi">
					<a href="./" class="js-logo-clone"><img src="logo/pipegrow.png" width="200" height="200"></a>
				</div>
			</div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon-person"></span></a></li>
                  <li><a href="#"><span class="icon-heart-o"></span></a></li>
                  <li>
                    <a href="cart.php" class="site-cart">
                      <span class="icon-shopping_cart"></span>
                      <span class="count"><?php echo (empty($_SESSION['carrito']))?0:count($_SESSION['carrito']);?></span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>
          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
			<div class="container">
			  <ul class="site-menu js-clone-nav d-none d-md-block">
				<li><a href="./">quienes Somos</a></li>
				<li><a href="store">Tienda</a></li>
				<li><a href="cart">Carrito</a></li>
				<li class="active"><a href="contact">Contactanos</a></li>
			  </ul>
			</div>
		  </nav>
    </header>
 <! -- fin de encabesado-->
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Ponte En Contacto</h2>
          </div>
          <div class="col-md-7">

            <form action="#" method="post">
              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Nombres <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Apellidos <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Correo <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Mensaje </label>
                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Enviar Mensaje">
                  </div>
                </div>
              </div>
            </form>
			
          </div>
          <div class="col-md-5 ml-auto">
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">New York</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">London</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Canada</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>

          </div>
        </div>
      </div>
    </div>

    <! -- pie de pagina-->
    <?php include('global/pie.php');?>
	  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>