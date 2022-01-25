<?php
	//error_reporting(0);
	include 'car.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda - PipeGrow</title>
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
  <div class="site-wrap">
	 <! -- encabesado-->
	 <?php include 'global/encabezado.php'; ?>
		  <nav class="site-navigation text-right text-md-center" role="navigation">
			<div class="container">
			  <ul class="site-menu js-clone-nav d-none d-md-block">
				<li><a href="./">Quienes Somos</a></li>
				<li class="active"><a href="store">Tienda</a></li>
				<li><a href="cart">Carrito</a></li>
				<li><a href="contact">Contactanos</a></li>
			  </ul>
			</div>
		  </nav>
		</header>
<! -- fin de encabesado-->
		
<! -- categorias-->
		<div class="site-section site-blocks-2 ">
		  <div class="container">
			<div class="row justify-content-center text-center mb-5">
		
			  <?php foreach($categoriasSQL as $categoriasT){?>
				<div class="col-sm-5 col-md-5 col-lg-3 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
					<a class="block-2-item" href="<?php echo $dominio.$categoriasT['dir_cate'];?>">
					<figure class="image">
						<img src="<?php echo $dominio.$categoriasT['img_cate'];?>" width="360" height="360" alt="" class="img-fluid">
					</figure>
					<div class="text">
						<h3><?php echo ucwords($categoriasT['cate_cate']);?></h3>
					</div>
					</a>
				</div>
			  <?php } ?>	
			  
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