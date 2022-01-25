<?php
	include 'car.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PipeGrow - Carrito</title>
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
		<?php include 'global/encabezado.php'; ?>	  		  
		  <nav class="site-navigation text-right text-md-center" role="navigation">
			<div class="container">
			  <ul class="site-menu js-clone-nav d-none d-md-block">
				<li><a href="./">Quienes Somos</a></li>
				<li><a href="store">Tienda</a></li>
				<li class="active"><a href="cart">Carrito</a></li>
				<li><a href="contact">Contactanos</a></li>
			  </ul>
			</div>
		  </nav>
		</header> 

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">¡Gracias Por Tu Compra!</h2>
            <p class="lead mb-5">Su pedido se completó con éxito, revisa tu correo para ver los detalles de tu factura.</p>
            <p><a href="store" class="btn btn-sm btn-primary">Seguir Comprando</a></p>
          </div>
        </div>
      </div>
    </div>

    <! -- el pie de pagina-->
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