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
            
            <!-- formulario de producstos -->
            <div class="container-fluid">
              <div class="row"> 

              <div class="col-md-4">


                <div class="card">
                <?php echo $cate_alert; ?>
                  <div class="card-header">
                    <h3 class="card-title">Categorias</h3>

                    <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 120px;">
                        <div class="input-group-append">
                          <a href="javascript:void(0);" data-toggle="modal" data-target="#categorias" class="btn btn-success float-right">Nueva Categoria</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0" style="height: 425px;">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Categoria</th>
                          <th>Imagen</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        <?php foreach($categorias as $categoriasp){ //se muestran tododas las categorias?>
                              
                          <tr>
                            <td><?php echo $categoriasp['cod_cate'];?></td>
                            <td><?php echo $categoriasp['cate_cate'];?></td>
                            <td><a href="<?php echo $dominio.$categoriasp['dir_cate'];?>" target="_blank"><img src="<?php echo $dominio.$categoriasp['img_cate'];?>" width="100"></a></td>
                          </tr>
    
                        <?php } ?>

                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
                </div>

                <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Empresas</h3>

                    <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 115px;">
                        <div class="input-group-append">
                          <a href="javascript:void(0);" data-toggle="modal" data-target="#empresa" class="btn btn-success float-right">Nueva Empresa</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0" style="height: 425px;">
                    <table class="table table-head-fixed text-nowrap table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Empresa</th>
                          <th>Imagen</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        
                        <?php foreach($empresas as $empresasp){ //se muestran tododas las empresas?>
                              
                          <tr>
                            <td><?php echo $empresasp['cod_emp'];?></td>
                            <td><?php echo $empresasp['empre_emp'];?></td>
                            <td><a href="<?php echo $dominio.$empresasp['dir_emp'];?>" target="_blank"><img src="<?php echo $dominio.$empresasp['img_emp'];?>" width="100"></a></td>
                          </tr>
    
                        <?php } ?>

                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
                </div>

                <div class="col-md-4">
                <div class="card ">
                  <div class="card-header">
                    <h3 class="card-title">Tipos</h3>

                    <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 90px;">
                        <div class="input-group-append">
                          <a href="javascript:void(0);" data-toggle="modal" data-target="#tipo" class="btn btn-success float-right">Nuevo Tipo</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0" style="height: 425px;">
                    <table class="table table-head-fixed text-nowrap table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Tipo</th>
                          <th>Imagen</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($tipos as $tiposp){ //se muestran tododos los tipos?>
                              
                          <tr>
                            <td><?php echo $tiposp['cod_tip'];?></td>
                            <td><?php echo $tiposp['tipo_tip'];?></td>
                            <td><a href="<?php echo $dominio.$tiposp['dir_tip'];?>" target="_blank"><img src="<?php echo $dominio.$tiposp['img_tip'];?>" width="100"></a></td>
                          </tr>

                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                </div>

                <div class="col-md-12">                             

                  <form class="card card-info" action="vistaproductos-nevo-producto.php" method="post" enctype="multipart/form-data">
                    <div class="card-header">
                        <h3 class="card-title">Nuevo Producto</h3>

                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                            <?php echo $img_alert;?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Nombre:</label>
                            <input name="nombre" class="form-control select2bs4" type="text" style="width: 100%;" placeholder="Nombre Del Producto..." value required>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                            <label>Valor:</label>
                            <input name="valor" class="form-control select2bs4" type="number" style="width: 100%;" placeholder="Valor Del Producto..." value required>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                            <label>Empresa:</label>
                            <select name="empresa" class="form-control select2bs4" type="text" style="width: 100%;" placeholder="Empresa Del Producto..." value required disabled>
                              <option>Null</option>
                              <?php foreach($empresas as $empresasp){ //se muestran todos los nombres de las empresas?>
                                <option><?php echo $empresasp['empre_emp'];?></option>
                              <?php } ?>
                            </select>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Cantidad:</label>
                            <input name="cantidad" class="form-control select2bs4" type="number" style="width: 100%;" placeholder="Cantidad Del Producto..." value required>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                            <label>Categoria:</label>
                            <select name="categoria" class="form-control" type="text" style="width: 100%;" placeholder="Categoria Del Producto..." value required>
                              <?php foreach($categorias as $categoriasp){ //se muestran todos los nombres de las categorias?>
                                <option><?php echo $categoriasp['cate_cate'];?></option>
                              <?php } ?>
                            </select>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                            <label>Tipo:</label>
                            <select name="tipo" class="form-control select2bs4" type="text" style="width: 100%;" placeholder="Tipo Del Producto..." value required disabled>
                              <option>Null</option>
                              <?php foreach($tipos as $tiposp){ //se muestran todos los nombres de los tipos?>
                                  <option><?php echo $tiposp['tipo_tip'];?></option>
                              <?php } ?>
                            </select>
                            </div>
                            <!-- /.form-group -->
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                            <label>Imagen:</label>
                            <input name="imagen" class="form-control select2bs4" type="file" style="width: 100%;" placeholder="Cantidad Del Producto..." accept="image/*" value required>
                            </div>
                            <div class="form-group">
                            <label>Descripción</label>
                            <textarea name="descripcion" id="editor1"   class="form-control select2bs4" tabindex="16"  placeholder="Descripción Del Producto..." value="fdjgfíjgfhf" value required></textarea>

                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                                CKEDITOR.replace( 'editor1' );
                            </script>
                            </div>
                        </div>

                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info float-right" name="insertar" value="insertar" title="Insertar Nuevo producto">Insertar Nuevo Producto</button>
                    </div>

                  </form>
                </div>

                
            </div>
            <!-- fin de formulario de productos-->

      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



          <div class="modal fade" id="categorias" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Insertar Nueva Categoria</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <form action="vistaproductos-nevo-producto.php" method="post" enctype="multipart/form-data">
                  <div class="modal-body">

                    <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Categoria</label>
                          <input type="text" class="form-control" placeholder="Colocar Categoria" name="new_categoria" value required>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Imagen</label>
                          <input type="file" class="form-control" placeholder="Colocar Categoria" name="img_categoria" accept="image/*" value required>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="modal-footer">
                    <button class="btn btn-success" type="submit" name="insert_categoria" value="insert_categoria">Insertar</button>
                  </div>
                </form>

              </div>
            </div>
          </div><!-- termna el modal d categoria -->


          <div class="modal fade" id="empresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Insertar Nueva Empresa</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <form action="vistaproductos-nevo-producto.php" method="post" enctype="multipart/form-data">
                  <div class="modal-body">

                    <div class="row">

                 
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Categoria</label>
                            <select name="empresa" class="form-control" type="text" style="width: 100%;" placeholder="Empresa Del Producto..." value required>
                              <?php foreach($empresas as $empresasp){ //se muestran todos los nombres de las empresas?>
                                <option><?php echo $empresasp['empre_emp'];?></option>
                              <?php } ?>
                            </select>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Empresa</label>
                          <input type="text" class="form-control" placeholder="Colocar Categoria" name="empresa" value required>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Imagen</label>
                          <input type="file" class="form-control" placeholder="Colocar Categoria" name="img-empresa" accept=".jpg, .jpeg, .png" value required>
                        </div>
                      </div>

                    </div>

                  </div>

                  <div class="modal-footer">
                    <button class="btn btn-success" type="submit" name="insert_empresa" value="empresa">Insertar</button>
                  </div>
                </form>

              </div>
            </div>
          </div><!-- termina el modal empresa -->


          <div class="modal fade" id="tipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Insertar Nuevo Tipo</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <form action="vistaproductos-nevo-producto.php" method="post" enctype="multipart/form-data">
                  <div class="modal-body">

                    <div class="row">

                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Categoria</label>
                            <select name="empresa" class="form-control" type="text" style="width: 100%;" placeholder="Empresa Del Producto..." value required>
                              <?php foreach($empresas as $empresasp){ //se muestran todos los nombres de las empresas?>
                                <option><?php echo $empresasp['empre_emp'];?></option>
                              <?php } ?>
                            </select>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Empresa</label>
                            <select name="empresa" class="form-control" type="text" style="width: 100%;" placeholder="Empresa Del Producto..." value required>
                              <?php foreach($categorias as $categoriasp){ //se muestran todos los nombres de las categorias?>
                                <option><?php echo $categoriasp['cate_cate'];?></option>
                              <?php } ?>
                            </select>
                        </div>
                      </div>


                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Tipo</label>
                          <input type="text" class="form-control" placeholder="Coloca El tipo..." name="tipo" value required>
                        </div>
                      </div>


                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Imagen</label>
                          <input type="file" class="form-control" placeholder="Colocar Categoria" name="img-tipo" accept=".jpg, .jpeg, .png" value required>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="modal-footer">
                    <button class="btn btn-success" type="submit" name="insert_tipo" value="tipo">Insertar</button>
                  </div>
                </form>

              </div>
            </div>
          </div><!-- trmina el modal de tipo -->
  
  <?php 
    //si inclulle el pie de pagina con todos los scrips
    include ("piepag.php");
  ?>