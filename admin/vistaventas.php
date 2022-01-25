<?php 

  include ("modulos/ventas.php");
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
            <h1 class="m-0 text-dark">Ventas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
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

        <!-- formulario de producstos -->
        

        <!-- fin de formulario de productos-->

        <div class="row">
          <div class="col-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ventas Totales</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Codigo</th>
                    <th>Fecha/Hora</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Total</th>
                    <th>Consultar</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php foreach($ventas as $toventas){?>
                    <tr>
                      <td><?php echo $toventas['cod_ven'];?></td>
                      <td><?php echo $toventas['fech_van'];?></td>
                      <td><?php echo $toventas['nom_ven'];?></td>
                      <td><?php echo $toventas['email_ven'];?></td>
                      <td>$<?php echo number_format($toventas['total_ven'], 3);?></td>
                      <td class="text-center"><a class="btn btn-success" title="Actualizar" name="actualizar" href="javascript:void(0);" data-toggle="modal" data-target="#aa<?php echo $toventas['cod_ven'];?>"><span class="icon-search" ></a></td>
                    </tr>
                  <?php }?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Codigo</th>
                    <th>Fecha/Hora</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Total</th>
                    <th>Consultar</th>
                  </tr>
                  </tfoot>
                </table>
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

        <?php foreach($ventas as $toventass){
          
          //se llama cada producto de cada una de las ventas
          $concultaven = $pdo -> prepare("select nom_pro, canti_det from detalleventa join productos on productos.cod_pro = detalleventa.productos_det where ventas_det=".$toventass['cod_ven']." order by ventas_det");
          $concultaven -> execute();
          $ventas = $concultaven -> fetchall(PDO::FETCH_ASSOC);

        ?>
          <div class="modal fade" id="aa<?php echo $toventass['cod_ven'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Datos De Venta #<?php echo $toventass['cod_ven'];?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <p class="font-weight-bold">Fecha y Hora: <?php echo $toventass['fech_van'];?></p>
                    <div class="card">
                      <!-- /.card-header -->
                      <div class="card-body p-0">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th style="width: 10px">#</th>
                              <th>Producto</th>
                              <th>Cantidad</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($ventas as $detall){ //se muestra los productos de cada venta?>
                              <tr>
                                <td><?php echo $toventass['cod_ven'];?></td>
                                <td><span class="badge bg-success"><?php echo $detall['nom_pro'];?></span></td>
                                <td><?php echo $detall['canti_det'];?></td>
                              </tr>
                            <?php }?>
                          </tbody>
                          <tfoot>
                            <tr>
                              <th style="width: 10px"></th>
                              <th>Total</th>
                              <th>$<?php echo $toventass['total_ven'];?></th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <p class="font-weight-bold">Datos y Dirección Del Destinatario:</p>

                    <p>- <?php echo $toventass['nom_ven'];?>.</p>
                    <p>- <?php echo $toventass['ced_ven'];?>.</p>
                    <p>- <?php echo $toventass['tel_ven'];?>.</p>
                    <p>- <?php echo $toventass['dira_ven'];?>.</p>
                    <p> <?php echo $toventass['dirb_ven'];?>.</p>
                    <p>- <?php echo $toventass['adi_ven'];?>.</p>
                    <p>- <?php echo $toventass['ciud_ven'];?>.</p>
                    <p>- <?php echo $toventass['email_ven'];?>.</p>

                </div>
                <div class="modal-footer">
                  <a href="<?php echo $dominio."/admin/modulos/VerFactura.php?IdVenta=".$toventass['cod_ven'];?>" class="btn btn-success" target="_blank">Ver Factura</a>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
  
  <?php 
    //si inclulle el pie de pagina con todos los scrips
    include ("piepag.php");
  ?>


