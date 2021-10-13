 <?php
  #Metodo que borra los productos
  include_once "dbEcommerce.php";
  $con = mysqli_connect($host, $user, $pass, $db);

  if (isset($_REQUEST['idBorrar']) && isset($_REQUEST['rutaP'])) {
    $id = mysqli_real_escape_string($con, $_REQUEST['idBorrar'] ?? '');
    $rutaEli = mysqli_real_escape_string($con, $_REQUEST['rutaP']);
    $rutaFinal = str_replace("/ecommerce/admin/", "", $rutaEli);
    $query = "DELETE from productos where idProd='" . $id . "'; ";
    $res = mysqli_query($con, $query);

    if ($res) {
      unlink($rutaFinal);
      echo '<meta http-equiv="refresh" content="0; url=panel.php?modulo=productos&mensajeEli=Producto eliminado con exito" />';
    } else {
  ?>
     <div class="alert alert-danger float-right" role="alert">
       Error al borrar el producto <?php echo mysqli_error($con); ?>
     </div>
 <?php
    }
  }
  ?>
 <script>
   function alerta() {
     swal.fire({
       title: "¡Error en base de datos!",
       text: "Descripción del problema",
       icon: "error",
     });
   }

   function confir(){
    Swal.fire({
  title: 'Desea Eliminar?',
  text: "No podra recuperar la información!",
  icon: 'warning',
  showCancelButton: true,
  cancelButtonText: "Cancelar",
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Eliminar!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Eliminado!',
      'Se elimino con exito!.',
      'success'
    )
  }
})
   }
   alerta();
 </script>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>Productos</h1>
         </div>
       </div>
     </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-12">
           <div class="card">
             <div class="card-header">
               <h3 class="card-title">Registro de productos</h3>
             </div>
             <!-- /.card-header -->
             <div class="card-body">

               <button type="button" class="btn btn-primary" onclick="return alerta();">hola</button>
               <button type="button" class="btn btn-primary" onclick="return confir();">que hace</button>
               <table id="example2" class="table table-bordered table-hover">
                 <thead>
                   <tr>
                     <th>Nombre</th>
                     <th>Precio</th>
                     <th>Existencias</th>
                     <th>Imagen</th>
                     <th>Acciones
                       <a href="panel.php?modulo=crearProducto"><i class="fa fa-plus" aria-hidden="true" title="Agregar nuevo producto"></i></a>
                     </th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php
                    include_once "dbEcommerce.php";
                    $con = mysqli_connect($host, $user, $pass, $db);
                    $query = "SELECT idProd, nombre, precio, existencia, foto, ruta from productos";
                    $res = mysqli_query($con, $query);

                    while ($row = mysqli_fetch_assoc($res)) {
                    ?>

                     <tr>
                       <td><?php echo $row['nombre'] ?></td>
                       <td>$<?php echo $row['precio'] ?></td>
                       <td><?php echo $row['existencia'] ?></td>
                       <td>
                         <img src="<?php echo $row['ruta'] ?>" class="img-size-50">
                         <!-- <img width="100" src="data:
                      <?php //echo $row['tipo']; 
                      ?>;base64,<?php //echo base64_encode($row['foto']); 
                                                            ?>"> -->


                       </td>
                       <td>
                         <a href="panel.php?modulo=editarProducto&idpro=<?php echo $row['idProd'] ?>" style="margin-right: 25px;"><i class="fas fa-edit" title="Editar producto"></i></a>
                         <a href="panel.php?modulo=productos&idBorrar=<?php echo $row['idProd'] ?>&rutaP=<?php echo $row['ruta'] ?>" class="text-danger borrar"><i class="fas fa-trash" title="Eliminar producto"></i></a>
                       </td>
                     </tr>
                   <?php
                    }
                    ?>

                 </tbody>
                 <tfoot>
                   <tr>
                     <th>Nombre</th>
                     <th>Precio</th>
                     <th>Existencias</th>
                     <th>Imagen</th>
                     <th>Acciones
                       <a href="panel.php?modulo=crearProducto"><i class="fa fa-plus" aria-hidden="true" title="Agregar nuevo producto"></i></a>
                     </th>
                   </tr>
                 </tfoot>
               </table>
             </div>
             <!-- /.card-body -->
           </div>
           <!-- /.card -->
         </div>
         <!-- /.col -->
       </div>
       <!-- /.row -->
     </div>
     <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
 </div>