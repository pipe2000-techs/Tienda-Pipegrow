<?php
	include 'global/config.php';
	include 'car.php';
	error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carrito - PipeGrow</title>
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
        <div class="row mb-5">
          <div class="col-md-12" >
            <div class="site-blocks-table">
			
		<?php if(!empty($_SESSION['carrito'])) {?>
		
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Imagen</th>
                    <th class="product-name">Producto</th>
                    <th class="product-price">Precio</th>
                    <th class="product-quantity">Cantidad</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
				
				<?php $total=0;?>
				
				<?php foreach($_SESSION['carrito'] as $indice=>$producto){?>
				
				
                  <tr>
                    <td class="product-thumbnail">
                      <img src="<?php echo $dominio.$producto['imagen'];?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $producto['nombre'];?></h2>
                    </td>
                    <td>$<?php echo $producto['precio'];?></td>
                    <td><?php echo $producto['cantidad'];?></td>
                    <td>$<?php echo number_format( $producto['precio'] * $producto['cantidad'],3);?></td>
					
				<form action="" method="post">	
					<input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'],cod,key);?>">
					
          <td><button class="btn btn-primary btn-sm" type="submit" name="btnAccion" value="eliminar">X</button></td>
				</form>	
				
                  </tr>
				  
				  
				<?php $total=$total + ( $producto['precio'] * $producto['cantidad']);?>
				
				<?php } ?>
				
				
                </tbody>	
              </table>
			  
			  
		<?php }else{?>
			<div class="alert alert-warning">
				<center><h2 class="display-5 text-black">¡No Hay Nada En El Carrito!</h2></center>
			</div>
		<?php }?>
		
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Cupon</label>
                <p>Ingrese El Código Del Cupón Si Tiene Uno.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Codigo Del Cupon">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-sm">Aplicar Cupon</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Totales Del Carrito</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?php echo number_format($total,3);?></strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?php echo number_format($total,3);?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='data'">Finalizar Compra</button>
                  </div>
                </div>
              </div>
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