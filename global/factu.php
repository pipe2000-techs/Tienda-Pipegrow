<?php
	
	//error_reporting(0);
	include 'car.php';

	date_default_timezone_set('America/Bogota');
	
	$fechahora=date('d-m-Y / h:i:s a');
	
	
	if(isset($_POST['final'])){
		
		$nombres=$_POST["nombres"];
		$direccion=$_POST["direccion"];
		$direccion2=$_POST["direccion2"];
		$ciudad=$_POST["ciudad"];
		$postal=$_POST["postal"];
		$correo=$_POST["correo"];
		$telefono=$_POST["telefono"];
		$documento=$_POST["documento"];
		$adicionales=$_POST["adicionales"];
		$contraseña=$_POST["contraseña"];
		$crear=$_POST["crear"];
		$total=$_POST["total"];
		
		$usuario=$_POST["user"];
		$ps=$_POST["contra"];
		
		$contra=openssl_encrypt($contraseña,cod,key);
		$pssw=openssl_encrypt($ps,cod,key);
		
		
		switch($_POST['final']){
			
			case 'orden': 
				if($crear == 1){
						
					//se inseta el cliente en la base
					$clientes=$pdo -> prepare("insert into clientes values('$nombres' '$apellidos','$direccion','$direccion2','$ciudad','$postal','$correo','$telefono','$documento','$adicionales','$contra')");
					$clientes -> execute();
						
					//se insernta la factura en la base
						if($_POST){
							$total=0;
							$sid=session_id();
							foreach($_SESSION['carrito'] as $indice=>$producto){
								
								$total=$total+($producto['precio']*$producto['cantidad']); 
								
							}
							
							$sentencia=$pdo -> prepare("insert into ventas VALUES (null, '$sid', '$fechahora', '$nombres', '$direccion', '$direccion2', '$ciudad', '$postal', '$correo', '$telefono', '$documento', '$adicionales', '$total')");
							$sentencia -> execute();
							$idventa=$pdo->lastInsertId();
							
							foreach($_SESSION['carrito'] as $indice=>$producto){
							
								$sentencia=$pdo -> prepare("INSERT INTO `detalleventa` VALUES (null, :IDVENTA, :IDPRODUCTO, :PRECIOUNITARIO, :CANTIDAD, '0')");
								$sentencia ->bindParam("IDVENTA",$idventa);
								$sentencia ->bindParam("IDPRODUCTO",$producto['id']);
								$sentencia ->bindParam("PRECIOUNITARIO",$producto['precio']);
								$sentencia ->bindParam("CANTIDAD",$producto['cantidad']);
								$sentencia ->execute();
							}
							
						}
						
						//se crea un erchivo pdf con los datos de los productos y el total tambien los datos de la direccion
						include 'facpdf.php';

						//se envia el acorreo al usuario y se destrulle la sesion
						include 'correo.php';
						
				}else{
					
					//se insernta la factura en la base
					
						if($_POST){

							$total=0;
							$sid=session_id();

							foreach($_SESSION['carrito'] as $indice=>$producto){
								
								$total=$total+($producto['precio']*$producto['cantidad']); 
								
							}


							
							$sentencia=$pdo -> prepare("insert into ventas VALUES (null, '$sid', '$fechahora', '$nombres', '$direccion', '$direccion2', '$ciudad', '$postal', '$correo', '$telefono', '$documento', '$adicionales', '$total')");
							$sentencia -> execute();
							$idventa=$pdo->lastInsertId();
							
							foreach($_SESSION['carrito'] as $indice=>$producto){
							
								$sentencia=$pdo -> prepare("INSERT INTO `detalleventa` VALUES (null, :IDVENTA, :IDPRODUCTO, :PRECIOUNITARIO, :CANTIDAD, '0')");
								$sentencia ->bindParam("IDVENTA",$idventa);
								$sentencia ->bindParam("IDPRODUCTO",$producto['id']);
								$sentencia ->bindParam("PRECIOUNITARIO",$producto['precio']);
								$sentencia ->bindParam("CANTIDAD",$producto['cantidad']);
								$sentencia -> execute();
							}
							
						}

						//se crea un erchivo pdf con los datos de los productos y el total tambien los datos de la direccion
						
						include 'facpdf.php';

						//se envia el acorreo al usuario y se destrulle la sesion
						include 'correo.php';
		        }
			break;
			
			
			case 'ingresar':
				if($usuario == null){
					$use="
					<div class='alert alert-danger'>
						<button type='button' class='close' data-dismiss='alert'>&times;</button>
						<strong><center>Ingresa Tu Usuario</center></strong>
					</div>
					";
				}elseif($ps == null){
					$pss="
					<div class='alert alert-danger'>
						<button type='button' class='close' data-dismiss='alert'>&times;</button>
						<strong><center>Ingresa Tu Contraseña</center></strong>
					</div>
					";
				}else{
					$sentencia=$pdo -> prepare("select * from clientes where email_cli='$usuario' and contra_cli='$pssw'");
					$sentencia -> execute();
					$user=$sentencia->fetchAll(PDO::FETCH_ASSOC);
					
					foreach($user as $dat){
						
				    } 
					
					//se balida que el ususrio y la contraseñan conincidan
					if($usuario == $dat['email_cli'] and $pssw == $dat['contra_cli']){
							//no se escribe nada
					}else{
						$fatal="
						<div class='alert alert-danger'>
							<button type='button' class='close' data-dismiss='alert'>&times;</button>
							<strong><center>USUARIO O CONTRASEÑA INCORRECTO</center></strong>
						</div>
						";
					}
				}
			break;
		}
		
	}
?>