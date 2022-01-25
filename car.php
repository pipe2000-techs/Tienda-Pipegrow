<?php
	session_start();
	
	//se inclulle el archivo donde esta el dominio 
	include 'global/dominio.php';

	//se inclulle la conexion a la BD
	include 'global/config.php';
	include 'global/conexion.php';
	
	//error_reporting(0);
	$mensaje ="";
	
	if(isset($_POST['btnAccion'])){
		
		switch($_POST['btnAccion']){
			case 'agregar': 
				
				if(is_numeric(openssl_decrypt($_POST['id'],cod,key))){
					$id=openssl_decrypt($_POST['id'],cod,key);
					//$mensaje.="OK id ".$id. "<br>";
					
				}else{
					$mensaje.="OK in CORRECTO  ".$id;

				}
				
				if(is_string(openssl_decrypt($_POST['nombre'],cod,key))){
					$nombre=openssl_decrypt($_POST['nombre'],cod,key);	
					//$mensaje.="OK nombre ".$nombre. "<br>";
				}else{
					$mensaje.="OK in CORRECTO  ";
					break;
				}
				
				if(is_string(openssl_decrypt($_POST['imagen'],cod,key))){
					$imagen=openssl_decrypt($_POST['imagen'],cod,key);	
					//$mensaje.="OK nombre ".$imagen. "<br>";
				}else{
					$mensaje.="OK in CORRECTO  ";
					break;
				}
				
				if(is_numeric($_POST['cantidad'])){
					$cantidad=$_POST['cantidad'];	
					//$mensaje.="OK cantidad ".$cantidad. "<br>";
				}else{
					$mensaje.="error in cantidad  ";
					break;
				}
				
				if(is_numeric(openssl_decrypt($_POST['precio'],cod,key))){
					$precio=openssl_decrypt($_POST['precio'],cod,key);
					//$mensaje.="OK precio ".$precio. "<br>";
				}else{
					$mensaje.="OK in CORRECTO  ";
					break;
				}
			if(!isset($_SESSION['carrito'])){
				
				$producto=array(
				'id'=>$id,
				'nombre'=>$nombre,
				'cantidad'=>$cantidad,
				'imagen'=>$imagen,
				'precio'=>$precio
				);
				$_SESSION['carrito'][0]=$producto;
				$mensaje="Producto Agregado Al Carrito.";	
				
			}else{
			
			//verificamos si el producto ya fue seleccionado
				$idproductos=array_column($_SESSION['carrito'],"id");
				
				if(in_array($id,$idproductos)){
					echo "<script>alert('EL PRODUCTO YA ESTA EN EL CARRITO.')</script>";
				}else{
				
					$contador=count($_SESSION['carrito']);
						
						$producto=array(
						'id'=>$id,
						'nombre'=>$nombre,
						'cantidad'=>$cantidad,
						'imagen'=>$imagen,
						'precio'=>$precio
						);
						$_SESSION['carrito'][$contador]=$producto;
						$mensaje="Producto Agregado Al Carrito.";	
			    }
			}
			//$mensaje=print_r( $_SESSION,true);
			$mensaje="
			<div class='alert alert-success'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
				<strong><center>Producto Agregado Al Carrito <a href='$dominio/cart'>'VER CARRITO'</a></center></strong>
			</div>";	
			
			break;
			
			//se elimina el producto seleccionado
			case "eliminar":
				if(is_numeric(openssl_decrypt($_POST['id'],cod,key))){
					  $id=openssl_decrypt($_POST['id'],cod,key);
					
				    foreach($_SESSION['carrito'] as $indice=>$producto){
						if($producto['id']==$id){
							unset($_SESSION['carrito'][$indice]);
							//echo "<script>alert('CONECTADO....')</script>";
						}
					}
					
				}else{
					$mensaje.="OK in CORRECTO  ".$id;

				}
			break;
		}
		
	}

	//se llaman todas las categorias de la BD 
	$categoriasSQL= $pdo -> prepare("select * from categoria");
	$categoriasSQL -> execute();
	$categoriasSQL = $categoriasSQL -> fetchall(PDO::FETCH_ASSOC);
	
	//se cuentan cuaton productos hay de cada categoria 
	function cantidad($categoria,$pdo){
		$categoriasSQL= $pdo -> prepare("select nom_pro from productos where cate_pro = '$categoria'");
		$categoriasSQL -> execute();
		$categoriasSQL = $categoriasSQL -> fetchall(PDO::FETCH_ASSOC);
		echo count($categoriasSQL);
	}
?>