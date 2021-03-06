<?php
include "Config/Conexion.php"
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecake</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- notificaciones -->
    <link rel="stylesheet" href="assets/vendors/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

    <!-- icono mostrar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img style="height: 100px; width: 250px;" src="assets/images/logo/logo4.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Men??</li>

                        <li class="sidebar-item  ">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Tablero</span>
                            </a>
                        </li>
                        <li class="sidebar-item active">
                            <a href="empresa.php" class='sidebar-link'>
                                <i class="bi bi-briefcase-fill"></i>
                                <span>Empresa</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="empleados.php" class='sidebar-link'>
                                <i class="bi bi-people-fill"></i>
                                <span>Empleados</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown me-1">
                                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bi bi-envelope bi-sub fs-4 text-gray-600'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Correos</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">No hay correos nuevos</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown me-3">
                                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bi bi-bell bi-sub fs-4 text-gray-600'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Notificaciones</h6>
                                        </li>
                                        <li><a class="dropdown-item">No hay notificaciones</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600">Administrador</h6>
                                            <p class="mb-0 text-sm text-gray-600">@Admin</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/faces/1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Hello, Administrador!</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> Mi
                                            Cuenta</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                            Configuraciones</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Cerrar sesi??n</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div id="main-content">

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Empresa/Negocio</h3>
                                <p class="text-subtitle text-muted">Personalizar informaci??n</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Tablero</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Empresa
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section id="multiple-column-form">
                        <div class="row match-height">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form class="form">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Nombre</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Input with icon left" id="first-name-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-icon">Logo</label>
                                                            <div class="position-relative">
                                                                <input type="file" class="form-control" placeholder="Input with icon left" id="first-name-icon">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Correo electronico</label>
                                                            <div class="position-relative">
                                                                <input type="email" id="city-column" class="form-control" placeholder="pasteleria@gmail.com" name="city-column">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-envelope"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Telefono</label>
                                                            <div class="position-relative">
                                                                <input type="number" class="form-control" placeholder="########" id="first-name-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-phone"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                    <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Horario</label>
                                                            <div class="position-relative">
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-calendar-week"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                    <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Direcci??n</label>
                                                            <div class="position-relative">
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-geo-alt"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; Ecake</p>
                        </div>
                        <div class="float-end">
                            <p>Creado con mucho <span class="text-danger"><i class="bi bi-heart"></i></span> para <a href="https://github.com/JosDCZ/Pasteleria">ti</a></p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <script src="assets/js/extensions/sweetalert2.js"></script>
        <script src="assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>

        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

        <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
        <!-- AJAX mio -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            // Simple Datatable
            let table1 = document.querySelector('#table1');
            let dataTable = new simpleDatatables.DataTable(table1);
        </script>

        <script type="text/javascript">
            function mostrarPassword() {
                var cambio = document.getElementById("Contrase??a-icon");
                if (cambio.type == "password") {
                    cambio.type = "text";
                    $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
                } else {
                    cambio.type = "password";
                    $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
                }
            }

            $(document).ready(function() {
                //CheckBox mostrar contrase??a
                $('#ShowPassword').click(function() {
                    $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
                });
            });

            function mostrarPasswordEdit() {
                var cambio = document.getElementById("mod-Contrase??a-icon");
                if (cambio.type == "password") {
                    cambio.type = "text";
                    $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
                } else {
                    cambio.type = "password";
                    $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
                }
            }

            $(document).ready(function() {
                //CheckBox mostrar contrase??a
                $('#ShowPassword').click(function() {
                    $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
                });
            });
        </script>

        <script src="assets/js/main.js"></script>

        <script>
            $(document).ready(function() {
                MostrarDatos();
            });

            function MostrarDatos() {
                var MostrarDatos = "true";
                $.ajax({
                    url: "Controller/ControllerEmpleado.php",
                    type: 'POST',
                    data: {
                        MostrarSend: MostrarDatos
                    },
                    success: function(data, status) {
                        $('#tablaMostrar').html(data);
                    }
                });
            }

            function soloLetras(texto) {
                var regex = /^[a-zA-Z ]+$/;
                return regex.test(texto);
            }

            function soloNumeros(texto) {
                var regex = /^([0-9])*$/;
                return regex.test(texto);
            }

            function soloCorreo(texto) {
                var regex = /^(?:[^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*|"[^\n"]+")@(?:[^<>()[\].,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,63}$/i;
                return regex.test(texto);
            }

            function soloContrasena(texto) {
                var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;
                return regex.test(texto);
            }

            function validarCampos() {

                var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;

                var IdAdd = $('#Id-icon').val();
                var NombreAdd = $('#Nombre-icon').val();
                var ApellidoAdd = $('#Apellido-icon').val();
                var CorreoAdd = $('#Correo-icon').val();
                var Contrase??aAdd = $('#Contrase??a-icon').val();

                if (NombreAdd.length < 3) {
                    toastify("Campo Nombre vacio", 2);
                    $('#Nombre-icon').focus();
                    $('#Nombre-icon').css("background", "#fb6e893b").fadeIn(3000);
                } else if (soloLetras(NombreAdd) == false) {
                    toastify("Ingrese solo letras en el campo Nombre", 2);
                    $('#Nombre-icon').focus();
                    $('#Nombre-icon').css("background", "#fb6e893b").fadeIn(3000);
                } else if (ApellidoAdd.length < 3) {
                    toastify("Campo Apellido vacio", 2);
                    $('#Nombre-icon').css("background", "#fff");
                    $('#Apellido-icon').focus();
                    $('#Apellido-icon').css("background", "#fb6e893b").fadeIn(3000);
                } else if (soloLetras(ApellidoAdd) == false) {
                    toastify("Ingrese solo letras en el campo Apellido", 2);
                    $('#Nombre-icon').css("background", "#fff");
                    $('#Apellido-icon').focus();
                    $('#Apellido-icon').css("background", "#fb6e893b").fadeIn(3000);
                } else if (CorreoAdd.length < 3 && !reg.test(CorreoAdd)) {
                    toastify("Ingrese un correo correcto", 2);
                    $('#Apellido-icon').css("background", "#fff");
                    $('#Correo-icon').focus();
                    $('#Correo-icon').css("background", "#fb6e893b").fadeIn(3000);
                } else if (soloCorreo(CorreoAdd) == false) {
                    toastify("Ingrese un correo correcto", 2);
                    $('#Apellido-icon').css("background", "#fff");
                    $('#Correo-icon').focus();
                    $('#Correo-icon').css("background", "#fb6e893b").fadeIn(3000);
                } else if (Contrase??aAdd.length < 3) {
                    toastify("Ingrese una contrase??a correcta", 2);
                    $('#Correo-icon').css("background", "#fff");
                    $('#Contrase??a-icon').focus();
                    $('#Contrase??a-icon').css("background", "#fb6e893b").fadeIn(3000);
                } else if (soloContrasena(Contrase??aAdd) == false) {
                    toastify("Ingrese una contrase??a de acuerdo a las politicas\n\n- Minimo 8 caracteres\n- Maximo 15 caracteres\n- Al menos una letra may??scula\n- Al menos una letra minuscula\n- Al menos un d??gito\n- No espacios en blanco\n- Al menos 1 caracter especial", 2);
                    $('#Correo-icon').css("background", "#fff");
                    $('#Contrase??a-icon').focus();
                    $('#Contrase??a-icon').css("background", "#fb6e893b").fadeIn(3000);
                } else {
                    Agregar();
                }
            }

            function validarCamposMod() {

                var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;

                var IdAdd = $('#mod-Id-icon').val();
                var NombreAdd = $('#mod-Nombre-icon').val();
                var ApellidoAdd = $('#mod-Apellido-icon').val();
                var CorreoAdd = $('#mod-Correo-icon').val();
                var Contrase??aAdd = $('#mod-Contrase??a-icon').val();

                if (IdAdd.length < 1) {
                    toastify("Ingrese un id correcto", 2);
                    $('#mod-Id-icon').focus();
                    $('#mod-Id-icon').css("background", "#fb6e893b").fadeIn(3000);
                } else if (NombreAdd.length < 3) {
                    toastify("Ingrese un nombre correcto", 2);
                    $('#mod-Id-icon').css("background", "#fff");
                    $('#mod-Nombre-icon').focus();
                    $('#mod-Nombre-icon').css("background", "#fb6e893b").fadeIn(3000);
                } else if (ApellidoAdd.length < 3) {
                    toastify("Ingrese un apellido correcto", 2);
                    $('#mod-Nombre-icon').css("background", "#fff");
                    $('#mod-Apellido-icon').focus();
                    $('#mod-Apellido-icon').css("background", "#fb6e893b").fadeIn(3000);
                } else if (CorreoAdd.length < 3 && !reg.test(CorreoAdd)) {
                    toastify("Ingrese un correo correcto", 2);
                    $('#mod-Apellido-icon').css("background", "#fff");
                    $('#mod-Correo-icon').focus();
                    $('#mod-Correo-icon').css("background", "#fb6e893b").fadeIn(3000);

                } else if (Contrase??aAdd.length < 3) {
                    toastify("Ingrese una contrase??a correcta", 2);
                    $('#mod-Correo-icon').css("background", "#fff");
                    $('#mod-Contrase??a-icon').focus();
                    $('#mod-Contrase??a-icon').css("background", "#fb6e893b").fadeIn(3000);

                } else {

                    Editar();
                }
            }

            function Agregar() {
                var IdAdd = $('#Id-icon').val();
                var NombreAdd = $('#Nombre-icon').val();
                var ApellidoAdd = $('#Apellido-icon').val();
                var CorreoAdd = $('#Correo-icon').val();
                var Contrase??aAdd = $('#Contrase??a-icon').val();
                var admin = $('input[name="adminradio"]:checked').val();


                pasar = "Agregar";
                $.ajax({
                    url: "Controller/ControllerEmpleado.php",
                    type: 'POST',
                    data: {
                        IdSend: IdAdd,
                        NombreSend: NombreAdd,
                        ApellidoSend: ApellidoAdd,
                        CorreoSend: CorreoAdd,
                        Contrase??aSend: Contrase??aAdd,
                        AdminSend: admin,
                        paso: pasar
                    },
                    success: function(data, status) {
                        //mostrar datos
                        var hecho = JSON.parse(data);
                        // console.log(hecho);
                        if (hecho === 1) {
                            Limpiar();
                            alertaSimple("??Acci??n realizada!", "Registro guardado con exito", "success", "Hecho");
                            MostrarDatos();
                        } else {
                            alertaSimple("??Acci??n Fallida!", "Registro no se pudo guardar", "error", "Vale");
                        }

                    }
                });
            }

            function Eliminar(idEliminar) {
                pasar = "Borrar";
                $.ajax({
                    url: "Controller/ControllerEmpleado.php",
                    type: 'POST',
                    data: {
                        eliminarSend: idEliminar,
                        paso: pasar
                    },
                    success: function(data, status) {
                        //mostrar datos
                        //console.log(status);   
                        MostrarDatos();
                    }
                });
            }

            //onclick en los botonos de la tabla
            function MostrarEditar(idActualizar) {
                $('#hiddendata').val(idActualizar);
                pasar = "Actualizar";
                $.post("Controller/ControllerEmpleado.php", {
                    idActualizar: idActualizar,
                    paso: pasar
                }, function(data, status) {
                    var id = JSON.parse(data);
                    if (id == 0) {
                        alertaSimple("??Acci??n Fallida!", "No se pudo Obtener datos", "error", "Vale");
                    } else {
                        $('#mod-Id-icon').val(id.idempleado);
                        $('#mod-Nombre-icon').val(id.nombre);
                        $('#mod-Apellido-icon').val(id.apellido);
                        $('#mod-Correo-icon').val(id.correo);
                        $('#mod-Contrase??a-icon').val(atob(id.contrase??a));
                    }

                });

                $('#ModificarModal').modal('show');
            }

            //onclick en el modal
            function Editar() {

                var modIdAdd = $('#mod-Id-icon').val();
                var modNombreAdd = $('#mod-Nombre-icon').val();
                var modApellidoAdd = $('#mod-Apellido-icon').val();
                var modCorreoAdd = $('#mod-Correo-icon').val();
                var modContrase??aAdd = $('#mod-Contrase??a-icon').val();
                var idoculto = $('#hiddendata').val();
                pasar = "Actualizar";


                $.post("Controller/ControllerEmpleado.php", {
                    modIdAdd: modIdAdd,
                    modNombreAdd: modNombreAdd,
                    modApellidoAdd: modApellidoAdd,
                    modCorreoAdd: modCorreoAdd,
                    modContrase??aAdd: modContrase??aAdd,
                    idoculto: idoculto,
                    paso: pasar
                }, function(data, status) {
                    var hecho = JSON.parse(data);
                    if (hecho === 1) {
                        LimpiarMod();
                        alertaSimple("??Acci??n realizada!", "Registro modificado con exito", "success", "Hecho");
                        MostrarDatos();
                    } else {
                        alertaSimple("??Acci??n Fallida!", "Registro no se pudo actualizar", "error", "Vale");
                    }
                });

            }

            function estadoAdmin(idestado) {
                console.log("id: " + idestado);
                if (idestado != 0) {
                    var nombre = "";
                    var apellido = "";
                    pasar = "obtener";

                    $.post("Controller/ControllerEmpleado.php", {
                        idObteSend: idestado,
                        paso: pasar
                    }, function(data, status) {
                        var id = JSON.parse(data);
                        if (id == 0) {
                            alertaSimple("??Acci??n Fallida!", "No se pudo Obtener datos", "error", "Vale");
                        } else {
                            nombre = id.nombre;
                            apellido = id.apellido;
                        }
                    });

                    var estadocheck = 0;
                    pasar = "cambioEstadoAdmin";
                    // Comprobar cuando cambia un checkbox
                    $('input[type=checkbox]').on('change', function() {
                        if ($(this).is(':checked')) {
                            estadocheck = 1;
                            console.log("Checkbox " + $(this).prop("id") + " (" + $(this).val() + ") => Seleccionado");
                        } else {
                            estadocheck = 0;
                            console.log("Checkbox " + $(this).prop("id") + " (" + $(this).val() + ") => Deseleccionado");
                        }

                        if (estadocheck === 1) {
                            $.post("Controller/ControllerEmpleado.php", {
                                IdcambioSend: idestado,
                                paso: pasar,
                                estadoSend: estadocheck
                            }, function(data, status) {
                                var hecho = JSON.parse(data);
                                if (hecho === 1) {
                                    MensajeEsquina("info", nombre + " " + apellido + " ahora es Administrador");
                                    MostrarDatos();
                                } else {
                                    MensajeEsquina("error", "Error al cambiar estado");
                                }
                            });
                        } else {
                            $.post("Controller/ControllerEmpleado.php", {
                                IdcambioSend: idestado,
                                paso: pasar,
                                estadoSend: estadocheck
                            }, function(data, status) {
                                var hecho = JSON.parse(data);
                                if (hecho === 1) {
                                    MensajeEsquina("warning", nombre + " " + apellido + " ya NO es Administrador");
                                    idestado = 0;
                                    MostrarDatos();
                                } else {
                                    MensajeEsquina("error", "Error al cambiar estado");
                                }
                            });
                        }
                    });

                }
            }

            function estadoActivo(idestado) {
                if (idestado != 0) {
                    console.log("id capturado: " + idestado);
                    var nombreA = "";
                    var apellidoA = "";
                    var estado = 0;
                    pasar = "obtener";

                    $.post("Controller/ControllerEmpleado.php", {
                        idObteSend: idestado,
                        paso: pasar
                    }, function(data, status) {
                        var idA = JSON.parse(data);
                        if (idA == 0) {
                            alertaSimple("??Acci??n Fallida!", "No se pudo Obtener datos", "error", "Vale");
                        } else {
                            nombreA = idA.nombre;
                            apellidoA = idA.apellido;
                            estado = idA.estado;
                        }
                    });

                    $.post("Controller/ControllerEmpleado.php", {
                        IdcambioASend: idestado,
                        paso: pasar,
                    }, function(data, status) {
                        var hecho = JSON.parse(data);

                        if (hecho === 1) {

                            if (estado == 1) {
                                MensajeEsquina("warning", "Se cambio el estado de " + nombreA + " " + apellidoA + " a Inactivo");
                            } else {
                                MensajeEsquina("info", "Se cambio el estado de " + nombreA + " " + apellidoA + " a Activo");
                            }
                            idestado = 0;
                            MostrarDatos();
                        } else {
                            MensajeEsquina("error", "Error al cambiar estado");
                        }
                    });
                }
            }

            function Limpiar() {
                $('#Id-icon').val("");
                $('#Nombre-icon').val("");
                $('#Apellido-icon').val("");
                $('#Correo-icon').val("");
                $('#Contrase??a-icon').val("");
                $('#completeModal').modal('hide');
                $('#Correo-icon').css("background", "#fff");
                $('#Nombre-icon').css("background", "#fff");
                $('#Apellido-icon').css("background", "#fff");
                $('#Contrase??a-icon').css("background", "#fff");
                $('#Correo-icon').css("background", "#fff");
                $('#admin-icon').prop('checked', false);
            }

            function LimpiarMod() {
                $('#mod-Id-icon').val("");
                $('#mod-Nombre-icon').val("");
                $('#mod-Apellido-icon').val("");
                $('#mod-Correo-icon').val("");
                $('#mod-Contrase??a-icon').val("");
                $('#ModificarModal').modal('hide');
                $('#mod-Correo-icon').css("background", "#fff");
                $('#mod-Nombre-icon').css("background", "#fff");
                $('#mod-Apellido-icon').css("background", "#fff");
                $('#mod-Contrase??a-icon').css("background", "#fff");
                $('#mod-Correo-icon').css("background", "#fff");
            }


            function alertaSimple(titulo, texto, icono, boton) {
                swal.fire({
                    title: titulo,
                    text: texto,
                    icon: icono,
                    confirmButtonColor: '#fb4669',
                    confirmButtonText: boton
                });
            }

            function confirEliminarEmpleado(idActualizar) {
                Swal.fire({
                    title: '??Desea Eliminar?',
                    text: "??No podra recuperar la informaci??n!",
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: "Cancelar",
                    confirmButtonColor: '#6c757d',
                    cancelButtonColor: '#dc3545',
                    confirmButtonText: 'Si, Eliminar!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: '??Eliminado!',
                            text: 'Se elimino el registro con exito.',
                            icon: 'success',
                            confirmButtonColor: '#fb4669',
                            confirmButtonText: 'Hecho'
                        })
                        Eliminar(idActualizar);
                    }
                })
            }



            function MensajeEsquina(icono, titulo) {

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: icono,
                    title: titulo
                })

            }

            function toastify(titulo, colornum) {
                let color = ["#dc3545", "#198754", "#fb4669"];
                Toastify({
                    text: titulo,
                    duration: 3000,
                    destination: "#",
                    newWindow: true,
                    close: true,
                    gravity: "bottom", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background: color[colornum],
                    },
                    onClick: function() {} // Callback after click
                }).showToast();
            }
        </script>
</body>

</html>