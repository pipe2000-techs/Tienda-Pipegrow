<?php
	include '../../car.php';

  //se llama a los datos de la tabla fertilizantes.
  if($_GET['product']){
    $product = $_GET['product'];
    $sentencia=$pdo -> prepare("select * from `productos` where nom_pro='".$product."'");
    $sentencia -> execute();
    $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

    if(!$listaProductos){
      echo "<script type='text/javascript'> window.location='../baseCategorie.php?categorie=".$listaProductos[0]['cate_pro']."'; </script>";
    }

  }else{
    echo "<script type='text/javascript'> window.location='../baseCategorie.php?categorie=".$listaProductos[0]['cate_pro']."'; </script>";
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $listaProductos[0]['nom_pro'];?> - PipeGrow</title>
	<link rel="icon" href="../../logo/fav.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="../../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">
    <link rel="stylesheet" href="../../css/jquery-ui.css">
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">


    <link rel="stylesheet" href="../../css/aos.css">

    <link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/img.css">
    
  </head>
  <body>
<! -- encabesado-->
  <div class="site-wrap">
    <?php include '../../global/encabezado.php'; ?>
      <nav class="site-navigation text-right text-md-center" role="navigation">
			<div class="container">
			  <ul class="site-menu js-clone-nav d-none d-md-block">
				<li><a href="../../index.php">quienes Somos</a></li>
				<li class="active"><a href="../../tienda.php">Tienda</a></li>
				<li><a href="../../carrito.php">Carrito</a></li>
				<li><a href="../../contacto.php">Contactanos</a></li>
			  </ul>
			</div>
		  </nav>
    </header>
 <! -- fin de encabesado-->
 
	<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="javascript:void(0)">Tienda</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><a href="../baseCategorie.php?categorie=<?php echo $listaProductos[0]['cate_pro'];?>"><?php echo ucwords($listaProductos[0]['cate_pro']);?></a></strong> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?php echo $listaProductos[0]['nom_pro'];?></strong></div>
        </div>
      </div>
    </div>

	<?php 
        echo ($mensaje);
	?>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo $dominio.$listaProductos[0]['img_pro'];?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $listaProductos[0]['nom_pro'];?></h2>
            <?php echo $listaProductos[0]['desc_pro'];?>
			        <p class="text-blackg"><b>Disponibilidad: <?php echo $listaProductos[0]['cati_pro'];?> en stock</b></p>
			
              <p><strong class="text-primary h4">$<?php echo $listaProductos[0]['val_pro'];?></strong></p>
				
              <form action="" method="post">
                <?php if($listaProductos[0]['cati_pro']>0){?>
                
                  <div class="mb-5">
                    <div class="input-group mb-3" style="max-width: 120px;">
                    <div class="input-group-prepend">
                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                    </div>
                    <input type="text" class="form-control text-center" id="cantidad" name="cantidad" value="1" placeholder="" max="1" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    <div class="input-group-append">
                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                    </div>
                    </div>
                  </div>
                  
                  
                  <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($listaProductos[0]['cod_pro'],cod,key);?>">
                  <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($listaProductos[0]['nom_pro'],cod,key);?>">
                  <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($listaProductos[0]['val_pro'],cod,key);?>">
                  <input type="hidden" name="imagen" id="imagen" value="<?php echo openssl_encrypt($listaProductos[0]['img_pro'],cod,key);?>">

                
                  <button class="buy-now btn btn-sm btn-primary" name="btnAccion" value="agregar" type="submit">Añadir Al Carrito</button>
                <?php }else{echo '<h4 class="text-danger">"AGOTADO"</h4>';}?>
                
              </form>

          </div>
        </div>

	  
      </div>
    </div>

    <?php
	//se llama a los datos de la tabla geaseedsauto.
		$sentencia=$pdo -> prepare("SELECT * FROM productos where cate_pro='".$listaProductos[0]['cate_pro']."' ORDER BY RAND()");
		$sentencia -> execute();
		$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
		//print_r($listaProductos);
	  ?>


    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Mas Productos</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
			
            <?php foreach($listaProductos as $producto){?>
                    <div class="item">
                      <div class="block-4 text-center">
                        <figure class="block-4-image">
                          <a href="<?php echo $dominio.$producto['dir_pro'];?>"><img src="<?php echo $dominio.$producto['img_pro'];?>" alt="Image placeholder" class="img-fluid"></a>
                        </figure>
                        <div class="block-4-text p-4">
                          <h3><a href="<?php echo $dominio.$producto['dir_pro'];?>"><?php echo $producto['nom_pro'];?></a></h3>
                          <p class="text-primary font-weight-bold">$<?php echo $producto['val_pro'];?></p>
                        </div>
                      </div>
                    </div>
            <?php } ?>  
				  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<! -- el puto pie de pagina-->
		<?php include('../../global/pie.php');?>
	  </div>
	  
  <script src="../../js/jquery-3.3.1.min.js"></script>
  <script src="../../js/jquery-ui.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="../../js/owl.carousel.min.js"></script>
  <script src="../../js/jquery.magnific-popup.min.js"></script>
  <script src="../../js/aos.js"></script>

  <script src="../../js/main.js"></script>
    
  </body>
</html>