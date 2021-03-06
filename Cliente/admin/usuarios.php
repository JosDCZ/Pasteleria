 
<?php
  include_once "dbEcommerce.php";
  $con= mysqli_connect($host, $user, $pass, $db);

  if (isset($_REQUEST['idBorrar'])) {
    $id=mysqli_real_escape_string($con, $_REQUEST['idBorrar']??'');
    $query="DELETE from usuarios where idUsuarios='".$id."'; ";
    $res=mysqli_query($con, $query);

    if ($res) {

    echo '<meta http-equiv="refresh" content="0; url=panel.php?modulo=usuarios&mensajeEli=Usuario eliminado con exito" />';

    }else{
?>
    <div class="alert alert-danger float-right" role="alert">
      Error al borrar el usuario <?php echo mysqli_error($con); ?>
    </div>
<?php
    }
  }
?> 
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios</h1>
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
                <h3 class="card-title">Datos de los usuarios del sistema</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones
                      <a href="panel.php?modulo=crearUsuario"><i class="fa fa-plus" aria-hidden="true" title="Agregar nuevo usuario"></i></a>
                    </th>
                  </tr>
                  </thead>
                  <tbody>
<?php
        include_once "dbEcommerce.php";
        $con = mysqli_connect($host, $user, $pass, $db);
        $query = "SELECT idUsuarios, email, nombre from usuarios";
        $res = mysqli_query($con, $query);
        
        while ($row = mysqli_fetch_assoc($res)) {
?>
            
            <tr>
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td>
                      <a href="panel.php?modulo=editarUsuario&id=<?php echo $row['idUsuarios'] ?>" style="margin-right: 25px;"><i class="fas fa-edit" title="Editar usuario"></i></a>
                      <a href="panel.php?modulo=usuarios&idBorrar=<?php echo $row['idUsuarios'] ?>" class="text-danger borrar"><i class="fas fa-trash" title="Eliminar usuario"></i></a>
                    </td>
                  </tr>
<?php
        }
?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
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