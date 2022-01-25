<?php
    include ("global/sessiones.php");

    include ("../global/config.php");
    include ("../global/conexion.php");

   error_reporting(0);

    $codigo = $_POST['codigo'];
    $cantidad = $_POST['cantidad'];
    $valor = $_POST['valor'];
    $articulo = $_POST['articulo'];
    $producto = $_POST['producto'];

    $fecha=new DateTime();

    //ancho de la tabla de los productos registrados
    $proanch = 620; 

    //se actualiza el precio o la cantidad o los dos campos
    if(isset($_POST['actualizar'])){

        $consultaSQL=$pdo -> prepare("update productos set cati_pro='$cantidad', val_pro='$valor' where cod_pro='$codigo'");
        $consultaSQL -> execute();

        $msConfi = '<div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        EL Producto <strong>'.'"'.$articulo.'"'.'</strong> Fue Actualizado Correctamente
                    </div>';
    //se elimmina el producto seleccionado
    }elseif(isset($_POST['eliminar'])){
        $msConfi = '<div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        El Producto <strong>'.'"'.$articulo.'"'.'</strong> Fue Eliminado Correctamente
                    </div>';
    
    //se busca el producto
    }elseif(isset($_POST['buscar'])){
        
        $consultaSQL=$pdo -> prepare("select * from productos where nom_pro='$producto'");
        $consultaSQL -> execute();
        $registros=$consultaSQL -> fetchall(PDO::FETCH_ASSOC);

        //ancho de la tabla de los productos registrados
        $proanch = 250;

        //si el producto no se encuentra se muestra un mensaje enpantalla
        if($registros == null){
            $noEncontrado ='<div class="alert alert-warning text-center">
                                <a href="vistaproductos.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                El Producto <strong>'.'"'.$producto.'"'.'</strong> No Fue Encontrado
                            </div>';
        }

    //se inserta el nuevo producta en la tabla productos
    }elseif(isset($_POST['insertar'])){
        
        //se estraen los datos del formulario 
        $nombreP = $_POST['nombre'];
        $cantidadP = $_POST['cantidad'];
        $valorP = $_POST['valor'];
        $categoriaP = $_POST['categoria'];
        $empresaP = $_POST['empresa'];
        $tipoP = $_POST['tipo'];
        $descripcionP = $_POST['descripcion'];
        $nombre_archivo = $_FILES['imagen']['name'];


        $dir_img= "/images/".$categoriaP."/".$fecha->getTimestamp()."_".$nombre_archivo;
        $dir_pro= "/tienda/".$categoriaP."/base".$categoriaP.".php?product=".$nombreP;

        //se bericica si ya esixte la carpeta o sino se crea
        if (!file_exists('../tienda/'.$categoriaP)) {
            mkdir('../tienda/'.$categoriaP, 0777, true);
        }

        //se berifica si la bas e del producto existe o no
        if (!file_exists("../tienda/".$categoriaP."/base".$categoriaP.".php")) {
            $fh = fopen("../tienda/".$categoriaP."/base".$categoriaP.".php", "w") or die ("no se pudo crear la base");
            $tx = file_get_contents("modulos/producto.txt");
            fwrite($fh, $tx) or die ("no se pudo copiar la info de la base");
            fclose($fh);
        }


        //si la imangen se gurca correcta mente se guardan en nd los datos del producto
        if(move_uploaded_file($_FILES['imagen']['tmp_name'] ,"..".$dir_img)){


            $insertar = $pdo -> prepare("insert into productos values(null, '$nombreP', '$descripcionP', '$valorP', '$dir_img', '$dir_pro', '$cantidadP', '$categoriaP', '$empresaP', '$tipoP')");
            $insertar -> execute();

            if($insertar){
                $img_alert='
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong><center>El Producto '.$nombreP.' Fue Correctamente Registrado</center></strong>
                </div>';
            }else{
                $img_alert='
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong><center>El Producto '.$nombreP.' No Fue Correctamente Registrado</center></strong>
                </div>';
            }
        }
    

    }

    if(isset($_POST['insert_categoria'])){

        $new_categoria = $_POST['new_categoria'];
        $img_categoria = $_FILES['img_categoria']['name'];

        $consultaSQL=$pdo -> prepare("select * from categoria where cate_cate='$new_categoria'");
        $consultaSQL -> execute();
        $registros=$consultaSQL -> fetchall(PDO::FETCH_ASSOC);

        //se balida si la categoria existe
        if(!$registros){

            //se crea la carepta donse se gurdara las imagenes de la ccategoria
            if (!file_exists('../images/'.$new_categoria)) {

                mkdir('../images/'.$new_categoria, 0777, true);

                //mkdir('../tienda/'.$new_categoria, 0777, true);
                
                $dir_img= "/images/".$new_categoria."/".$fecha->getTimestamp()."_".$img_categoria;

                //se balida si la imagen se guarda corectamente
                if(move_uploaded_file($_FILES['img_categoria']['tmp_name'] ,"..".$dir_img)){

                    $insertar = $pdo -> prepare("insert into categoria values(null, '$new_categoria', '$dir_img', '/tienda/baseCategorie.php?categorie=$new_categoria')");
                    $insertar -> execute();

                    //se balida si se pudo guardar en la base se datoss
                    if($insertar){
                        $cate_alert='
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong><center>La Categoria "'.$new_categoria.'" Fue Correctamente Registrada</center></strong>
                        </div>';
                    }else{
                        $cate_alert='
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong><center>La Categoria "'.$new_categoria.'" No Fue Correctamente Registrada</center></strong>
                        </div>';
                    }

                }

            }

        }else{
            $cate_alert='
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong><center>La Categoria "'.$new_categoria.'" Ya Existe</center></strong>
                    </div>';
        }

    }



    //si no se a precionado el boton bucar se muestran todos los productos
    if(!isset($_POST['buscar'])){
    //todos los productos
        $consultaSQL=$pdo -> prepare("select * from productos");
        $consultaSQL -> execute();
        $registros=$consultaSQL -> fetchall(PDO::FETCH_ASSOC);
    }
    
    //nobre de todos los productos
        $nombreSQL=$pdo -> prepare("select nom_pro from productos");
        $nombreSQL -> execute();
        $nomPro=$nombreSQL -> fetchall(PDO::FETCH_ASSOC);

    //categorias
        $categoriaSQL= $pdo -> prepare("select * from categoria");
        $categoriaSQL -> execute();
        $categorias = $categoriaSQL -> fetchall(PDO::FETCH_ASSOC);

    //empresas 
        $empresaSQL= $pdo -> prepare("select * from empresa");
        $empresaSQL -> execute();
        $empresas = $empresaSQL -> fetchall(PDO::FETCH_ASSOC);
    
    //tipos
        $tipoSQL= $pdo -> prepare("select * from tipo");
        $tipoSQL -> execute();
        $tipos = $tipoSQL -> fetchall(PDO::FETCH_ASSOC);

?>
 