<?php
	include '../car.php';

  if($_GET['categorie']){
    $categorie = $_GET['categorie'];
    $sentencia=$pdo -> prepare("select * from `productos` where cate_pro='".$categorie."' and cati_pro>0 ORDER BY RAND()");
    $sentencia -> execute();
    $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

    if(!$listaProductos){
      echo "<script type='text/javascript'> window.location='../store'; </script>";
    }

  }else{
    echo "<script type='text/javascript'> window.location='../store'; </script>";
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo ucwords($categorie); ?> - PipeGrow</title>
	<link rel="icon" href="../logo/fav.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">


    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/img.css">
    
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
                <a href="../index.php" class="js-logo-clone"><img src="../logo/pipegrow.png" width="200" height="200"></a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon-person"></span></a></li>
                  <li><a href="#"><span class="icon-heart-o"></span></a></li>
                  <li>
                    <a href="../carrito.php" class="site-cart">
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
				<li><a href="../index.php">quienes Somos</a></li>
				<li class="active"><a href="../tienda.php">Tienda</a></li>
				<li><a href="../carrito.php">Carrito</a></li>
				<li><a href="../contacto.php">Contactanos</a></li>
			  </ul>
			</div>
		  </nav>
    </header>
 <! -- fin de encabesado-->
 
	<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="../store">Tienda</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?php echo ucwords($categorie); ?></strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5"><?php echo ucwords($categorie); ?></h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="row mb-5">


            <?php foreach($listaProductos as $producto){?>

                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                      <div class="block-4 text-center border">
                        <figure class="block-4-image img-contenedor">
                          <a href="<?php echo $dominio.$producto['dir_pro'];?>"><img src="<?php echo $dominio.$producto['img_pro'];?>" alt="Image placeholder" class="img-fluid"></a>
                        </figure>
                        <div class="block-4-text p-4">
                          <h3><a href="<?php echo $dominio.$producto['dir_pro'];?>"><?php echo $producto['nom_pro'];?></a></h3>
                          <p class="mb-0"></p>
                          <p class="text-primary font-weight-bold">$<?php echo $producto['val_pro'];?></p>
                        </div>
                      </div>
                    </div>
            <?php } ?>

            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categorias</h3>
              <ul class="list-unstyled mb-0">
                <?php foreach ($categoriasSQL as $categoriaca) {?>
                  <li class="mb-1"><a href="<?php echo $dominio.$categoriaca['dir_cate'];?>" class="d-flex"><span><?php echo ucwords($categoriaca['cate_cate']);?></span> <span class="text-black ml-auto">(<?php cantidad($categoriaca['cate_cate'],$pdo) ?>)</span></a></li>
                <?php } ?>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>

<! -- pie de pagina-->
		<?php include('../global/pie.php');?>
	  </div>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>

  <script src="../js/main.js"></script>
    
  </body>
</html>