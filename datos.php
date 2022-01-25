<?php
	include 'global/factu.php';

	if(empty($_SESSION['carrito'])) {
		echo"<script> window.location='cart'; </script>";
	}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Facturación - PipeGrow</title>
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

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="cart">Carrito</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Facturación</strong></div>
        </div>
      </div>
    </div>
	
	<form action="" method="post">
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border p-4 rounded" role="alert">
			  <a class="d-block" data-toggle="collapse" href="#usuario" role="button" aria-expanded="false" aria-controls="usuario">¿Eres Cliente? Haga clic aquí para iniciar sesión</a> 
					<?php echo ($use);?>
					<?php echo ($pss);?>
					<?php echo ($fatal);?>
				
				<div class="collapse" id="usuario">
					<div class="py-2">
						<div class="form-group row">
							<div class="col-md-6">
								<label for="c_state_country" class="text-black">Nombre de usuario o correo electrónico <span class="text-danger">*</span></label>
								<input type="email" class="form-control" id="c_state_country" name="user" value required>
							</div>
							<div class="col-md-6">
								<label for="c_postal_zip" class="text-black">Contraseña <span class="text-danger">*</span></label>
								<input type="password" class="form-control" id="c_postal_zip" name="contra" value required>
							</div>
						</div>
						<button class="buy-now btn btn-sm btn-primary" name="final" value="ingresar" type="submit">Entrar</button>
					</div>
				</div>
            </div>
          </div>
        </div>
	</form>
	
	<form action="" method="post">
			<div class="row">
			  <div class="col-md-6 mb-5 mb-md-0">
				<h2 class="h3 mb-3 text-black">Detalles De La Factura</h2>
				<div class="p-3 p-lg-5 border">
				  <div class="form-group row">
					<div class="col-md-12">
					  <label for="c_fname" class="text-black">Nombre Completo <span class="text-danger">*</span></label>

					  <input type="text" class="form-control" id="c_fname" name="nombres" value="<?php echo $dat['nom_cli'];?>" value required>
					</div>
				  </div>

				  <div class="form-group row">
					<div class="col-md-12">
					  <label for="c_address" class="text-black">Dirección <span class="text-danger">*</span></label>

					  <input type="text" class="form-control" id="c_address" name="direccion" placeholder="Dirección" value="<?php echo $dat['dira_cli'];?>" value required>
					</div>
				  </div>

				  <div class="form-group">
					<input type="text" class="form-control"  name="direccion2" placeholder="Apartamento, suite, unit etc. (optional)" value="<?php echo $dat['dirb_cli'];?>" value required>
				  </div>

				  <div class="form-group row">
					<div class="col-md-6">
					  <label for="c_state_country" class="text-black">Ciudad <span class="text-danger">*</span></label>

					  <input type="text" class="form-control" id="c_state_country" name="ciudad" value="<?php echo $dat['ciud_cli'];?>" value required>
					</div>
					<div class="col-md-6">
					  <label for="c_postal_zip" class="text-black">Codigo Postal <span class="text-danger">*</span></label>
					  <input type="text" class="form-control" id="c_postal_zip" name="postal" placeholder="Opcional" value="<?php echo $dat['codp_cli'];?>">
					</div>
				  </div>

				  <div class="form-group row mb-5">
					<div class="col-md-6">
					  <label for="c_email_address" class="text-black">Correo Electrónico <span class="text-danger">*</span></label>

					  <input type="email" class="form-control" id="c_email_address" name="correo" value="<?php echo $dat['email_cli'];?>" value required>
					</div>
					<div class="col-md-6">
					  <label for="c_phone" class="text-black">Telefono <span class="text-danger">*</span></label>

					  <input type="number" class="form-control" id="c_phone" name="telefono" placeholder="Numero de celular" value="<?php echo $dat['tel_cli'];?>" value required>
					</div>
					<div class="col-md-12">
					  <label for="c_address" class="text-black">Documento de Identidad <span class="text-danger">*</span></label>

					  <input type="number" class="form-control" id="documento" name="documento" placeholder="Cédula de ciudadanía o Extrajería" value="<?php echo $dat['ced_cli'];?>" value required>
					</div>
				  </div>

				  <div class="form-group">
					<label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" name="crear" id="c_create_account"> ¿Quieres crear una cuenta?</label>
					<div class="collapse" id="create_an_account">
					  <div class="py-2">
						<p class="mb-3">Cree una cuenta ingresando la información a continuación. Si es un cliente recurrente, inicie sesión en la parte superior de la página.</p>
						<div class="form-group">
						  <label for="c_account_password" class="text-black">Crea Una Contraseña</label>
						  <input type="password" class="form-control" id="c_account_password" name="contraseña" placeholder="">
						</div>
					  </div>
					</div>
				  </div>


				  <div class="form-group">
					<label for="c_order_notes" class="text-black">Datos Adicionales:</label>
						
					<textarea name="adicionales" id="c_order_notes" cols="30" rows="5" class="form-control" tabindex="16" value required><?php echo $dat['adi_cli'];?></textarea>
				  </div>

				</div>
			  </div>
			  <div class="col-md-6">

				<div class="row mb-5">
				  <div class="col-md-12">
					<h2 class="h3 mb-3 text-black">Tu Orden</h2>
					<div class="p-3 p-lg-5 border">
					  <table class="table site-block-order-table mb-5">
						<thead>
						  <th>Producto</th>
						  <th>Total</th>
						</thead>
						<tbody>
					
								
								<?php $total=0;?>
								
								<?php foreach($_SESSION['carrito'] as $indice=>$producto){?>
								   <?php $total=$total + ( $producto['precio'] * $producto['cantidad']);?>
									  <tr>
										<td><?php echo $producto['nombre'];?> <strong class="mx-2">x</strong> <?php echo $producto['cantidad'];?></td>
										<td>$<?php echo number_format( $producto['precio'] * $producto['cantidad'],3);?></td>
									  </tr>
									
								<?php } ?>
									
							
						  <tr>
							<td class="text-black font-weight-bold"><strong>Subtotal</strong></td>
							<td class="text-black">$<?php echo number_format($total,3);?></td>
						  </tr>
						  <tr>
							<td class="text-black font-weight-bold"><strong>Total</strong></td>
							<td class="text-black font-weight-bold"><strong>$<?php echo number_format($total,3);?></strong></td>
							<input type="hidden" name="total" id="total" value="<?php echo number_format($total,3);?>">
						  </tr>
						</tbody>
					  </table>

					  <label for="c_email_address" class="text-black">Medios De Pago</label>
					  <div class="border p-3 mb-3">
						<h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Bancolombia</a></h3>

						<div class="collapse" id="collapsebank">
						  <div class="py-2">
							<p class="mb-0">Puedes pagar el valor de tu pedido en esta cuenta de haorros Bancolombia: 912-075097-40 y apenas consignes nos envias una foto del comprobante al whatsapp (300 2024257) con el codigo de tu pedido</p>
						  </div>
						</div>
					  </div>

					  <div class="border p-3 mb-3">
						<h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Nequi</a></h3>

						<div class="collapse" id="collapsecheque">
						  <div class="py-2">
							<p class="mb-0">Puedes pagar el valor de tu pedido en esta cuenta de Nequy: 300 2024257 y apenas consignes nos envias una foto del comprobante al whatsapp (300 2024257) con el codigo de tu pedido</p>
						  </div>
						</div>
					  </div>

					  <div class="form-group">
						<button class="btn btn-primary btn-lg py-3 btn-block" name="final" value="orden">Finalizar Orden</button>
					  </div>

					</div>
				  </div>
				</div>

			  </div>
			</div>
      </div>
    </div>
	</form>

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