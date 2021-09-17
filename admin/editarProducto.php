<?php
//requerimos el autoloader para cargar todo lo que necesitamos de las librerias de composer
require_once 'vendor/autoload.php';
//es obligatorio usar el namespace para poder cargar la clase con exito
use Verot\Upload\Upload;

include_once "dbEcommerce.php";
$con = mysqli_connect($host, $user, $pass, $db);

    if (isset($_REQUEST['guardar'])) {
        # code...

        #Guardamos la informacion de las imagenes en variables sacandolas de FILE
        if (isset($_FILES['imagen']['name'])) {
          # code..



          $tipoArchivo=$_FILES['imagen']['type'];
          $permitido=array("image/png", "image/jpeg", "image/jpg", "image/gif");

          if (in_array($tipoArchivo, $permitido)) {
            # code...

            $foo= new Upload($_FILES['imagen']);

            
            $nombreArchivo=$_FILES['imagen']['name'];
            $tamanioArchivo=$_FILES['imagen']['size'];
            $tmpName=$_FILES['imagen']['tmp_name'];
            #Sirve al momeno de guardar la imagen en la carpeta del servidor
            $destino="imagenes/";
            #Quitamos los espacios en el nombre para no tener problemas al llamar la imagen
            $nombreI=preg_replace("/[[:space:]]/","",trim($nombreArchivo));

            #Es necesario quitar el formato al nombre de la imagen para que se puedan mostrar segun la ruta
            if ($tipoArchivo=="image/jpeg") {
              # code...
              $nombreImg=str_replace(".jpg","",$nombreI);
            }
            if ($tipoArchivo=="image/jpg") {
              # code...
              $nombreImg=str_replace(".jpg","",$nombreI);
            }
            if ($tipoArchivo=="image/png") {
              # code...
              $nombreImg=str_replace(".png","",$nombreI);
            }
            if ($tipoArchivo=="image/gif") {
              # code...
              $nombreImg=str_replace(".gif","",$nombreI);
            }
            
            #Sirve para guardar en la base de datos la ruta a la que se ira a obtener la img
            $rut="/ecommerce/admin/imagenes/".$nombreI;

            $size_x_y=500;
            #$foo->file_new_name_body=sprintf('%spx_%s', $size_x, time());
            $foo->file_new_name_body=$nombreImg;
            $foo->image_resize = true;
            $foo->image_x=$size_x_y;
            $foo->image_y=$size_x_y;
            $foo->image_ratio=false;
            

            #capturar la imagen
            $imagenSubida = fopen($tmpName, 'r');

            #Extraer los binarios de la imagen para guardar en el campo asignado en la base de datos
            $binariosImg=fread($imagenSubida, $tamanioArchivo);

            $nombre = mysqli_real_escape_string($con, $_REQUEST['nombre']??'');
            $precio = mysqli_real_escape_string($con, $_REQUEST['precio']??'');
            $existencia = mysqli_real_escape_string($con, $_REQUEST['existencia']??'');
            $binarios= mysqli_escape_string($con, $binariosImg);
            $ruta = mysqli_real_escape_string($con, $rut);
            $tipoArc = mysqli_real_escape_string($con, $tipoArchivo);

            $query = "INSERT INTO productos
            (nombre, precio, existencia, ruta, foto, tipo) VALUES
            ('".$nombre."', '".$precio."', '".$existencia."', '".$ruta."', '".$binarios."', '".$tipoArc."');
            ";
            $res = mysqli_query($con, $query);

            if ($res) {
                # code...
                #Con esta etiqueta podemos guardar la imagen pero sin redimensionar
                #move_uploaded_file($tmpName, $destino.$nombreArchivo);
                #Con esta etiqueta guardamos la imagen pero redimensionada
                $foo->process($destino);
                echo '<meta http-equiv="refresh" content="0; url=panel.php?modulo=crearProducto&mensaje=Producto creado exitosamente" />';
            }else{
?>

              <div class="alert alert-danger alert-dismissible fade show float-right" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
                Error al ingresar el producto.
              </div>

<?php
            }
            
          }else{

?>
              <div class="alert alert-danger alert-dismissible fade show float-right" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
                El archivo seleccionado no es compatible.
              </div>
<?php

          }
        }else{
?>
             <div class="alert alert-danger alert-dismissible fade show float-right" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
                Seleccione una imagen de referencia.
              </div>
<?php
        }

    }


    $id=mysqli_real_escape_string($con, $_REQUEST['idpro']??'');
    $query="SELECT idProd, nombre, precio, existencia, ruta, tipo FROM productos 
    WHERE idProd='".$id."'; 
    ";
    $res=mysqli_query($con, $query);
    $row=mysqli_fetch_assoc($res);
 ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Insertar Producto</h1>
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
                <h3 class="card-title">Ingrese los siguientes datos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body col-md-6">
                <form action="panel.php?modulo=crearProducto" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="<?php echo $row['nombre'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Precio</label>
                        <input type="number" step="0.01" min="0" name="precio" class="form-control" value="<?php echo $row['precio']?>" pattern="(d{3})([.])(d{2})" required>
                    </div>

                    <div class="form-group">
                        <label>Existencias</label>
                        <input type="number" min="0" name="existencia" class="form-control" value="<?php echo $row['existencia'] ?>" required>
                    </div>

                    <div class="col-md-12">
                       <div class="form-group">
                         <label>Foto</label>
                         <div class="card">
                           <div class="card-body border border-primary">
                             <label for="imagen" id="icon-image"  class="btn btn-danger"><i class="fas fa-times"></i></label>
                             <span id="icon-cerrar"></span>
                             <input id="imagen" class="d-none" type="file" name="imagen" onchange="preview(event)" accept="image/*">
                             <img class="img-thumbnail" id="img-preview" src="<?php echo $row['ruta'] ?>">
                           </div>
                         </div>
                       </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary" name="guardar"><i class="fas fa-save nav-icon"></i>     Guardar</button>
                          <button href="panel.php?modulo=productos" class="btn btn-danger" name="cancelar"><i class="fas fa-times nav-icon"></i>      Cancelar</button>
                      </div>
                    </div>
                    
                    
                </form>
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