<?php 

  include ("modulos/productos.php");

  //se inclulle la cabecera
  include ("cabecera.php");


  // se inclulle el sidebar
  include ("sidebar.php");
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Productos</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <!-- /.row -->

        <div class="row">
          <div class="col-12">
            <div class="card ">
              <div class="card-header ">
                <h3 class="card-title">Productos Registrados</h3>

                <div class="card-tools">

                  <form action="vistaproductos-registrados.php" method="post">
                    <div class="input-group input-group-sm" style="width: 165px;">

                        <input list="encodings" type="text" name="producto" class="form-control float-right" placeholder="Buscar Producto" required="true">
                        <datalist id="encodings">

                        <?php foreach($nomPro as $lista){ //SE MUESTRA LOS NOMBRES DE LOS PRODUCTOS?> 
                          <option value="<?php echo $lista['nom_pro'];?>"></option>
                        <?php }?>

                        </datalist>

                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default" name="buscar" title="Buscar Producto">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                    </div>
                  </form>
                  
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: <?php echo $proanch;?>px;">
                <table class="table table-head-fixed text-nowrap  table-striped">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Imagen</th>
                      <th>Nombre</th>
                      <th>Cantidad</th>
                      <th>Precio</th>
                      <th class="text-center">Actualizar</th>
                      <th class="text-center">Eliminar</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <!--//se mustran todos los productos de la tabla productos-->
                    <?php echo $msConfi;?>
                    <?php foreach($registros as $datos){ ?>
                      <form action="vistaproductos-registrados.php" method="post">
                        <tr >
                          <td><?php echo $datos['cod_pro'];?></td>
                          <td> <a href="<?php echo $dominio.$datos['dir_pro'];?>" target="_blank"> <img src="<?php echo $dominio.$datos['img_pro'];?>" width="150"></a></td> 
                          <td><?php echo $datos['nom_pro'];?></td>

                          <input type="hidden" name="codigo" value="<?php echo $datos['cod_pro'];?>">
                          <input type="hidden" name="articulo" value="<?php echo $datos['nom_pro'];?>">
                          
                          <td><input type="number" class="form-control tan text-center" name="cantidad" id="" style="width: 100px;" value="<?php echo $datos['cati_pro'];?>" required="true"></td>
                          <td><input type="number" class="form-control tan text-center" name="valor" id="" style="width: 100px;" value="<?php echo $datos['val_pro'];?>" required="true"></td>
                          <td class="text-center"><button type="submit" class="btn btn-warning" title="Actualizar" name="actualizar" ><span class="icon-update" ></button></td>
                          <td class="text-center"><button type="submit" class="btn btn-danger" title="Eliminar" name="eliminar"><span class="icon-delete_forever"></button></td>
                        </tr>
                      </form>
                    <?php } ?>

                  </tbody>
                </table>
                <?php 
                    //se muestra el mensaje de que el producto no fue mostrado
                    echo $noEncontrado;
                  ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

      </div><!-- /.container-fluid -->

      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php 
    //si inclulle el pie de pagina con todos los scrips
    include ("piepag.php");
  ?>