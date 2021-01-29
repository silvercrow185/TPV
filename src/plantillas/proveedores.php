<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php
        include '../../componentes/head.php';
    ?>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>


    <!-- DIV PRINCIPAL DE BODY -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        <!-- ============================================================== -->
        <!-- HEADER -->
        <?php
            include '../../componentes/header.php';
        ?>
        <!-- FIN HEADER -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- BARRA IZQUIERDA  -->
        <?php
            include '../../componentes/barra_izquierda.php';
        ?>
        <!-- FON BARRA IZQUIERDA  -->
        <!-- ============================================================== -->
        

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- CONTENEDOR -->
        <div class="page-wrapper">
            <div class="conteiner-fluid">
            <!-- AQUI EMPEZAMOS A AGREGAR DISEÑO DEL CENTRO -->
            <div class="container">
            <div class="row">
            <div class="col-sm-2 col-md-2 col-lg-2"></div>
                <div class="col-sm-10 col-md-10 col-lg-10">
                    <!-- Input de Busqueda de preveedores -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Buscar Proveedores</h4>
                            <h6 class="card-subtitle">Ingresa Codigo de proveedor</h6>
                            <form class="mt-4">
                                <div class="form-group">
                                    <label>Clave</label>
                                    <input type="text"  class="form-control">
                                    <label>Nombre</label>
                                    <input type="text" disabled="true" class="form-control">
                                    <label>Razón Social</label>
                                    <input type="text" disabled="true" class="form-control">
                                    <label>Dirección</label>
                                    <input type="text" disabled="true" class="form-control">
                                    <label>Telefono</label>
                                    <input type="text" disabled="true" class="form-control">
                                    <label>RFC</label>
                                    <input type="text" disabled="true" class="form-control">
                                    <label>Correo</label>
                                    <input type="text" disabled="true" class="form-control">
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Fin Input de Busqueda de preveedores -->

                    <!-- Input de Crear Nuevo preveedor -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Agregar Nuevo Proveedor</h4>
                            <h6 class="card-subtitle">Rellena los campos para agregar un nuevo proveedor</h6>
                            <form class="mt-4">
                                <div class="form-group">
                                    <label>Clave</label>
                                    <input type="text"  class="form-control">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control">
                                    <label>Razón Social</label>
                                    <input type="text" class="form-control">
                                    <label>Dirección</label>
                                    <input type="text" class="form-control">
                                    <label>Telefono</label>
                                    <input type="text" class="form-control">
                                    <label>RFC</label>
                                    <input type="text" class="form-control">
                                    <label>Correo</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <button type="reset" class="btn btn-dark">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Fin Input de Crear Nuevo preveedor -->

                    <!--Tabla de proveedores-->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tabla de Proveedores</h4>
                                <h6 class="card-subtitle">Resultado de proveedores</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Clave</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Razón Social</th>
                                            <th scope="col">Dirección</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">RFC</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Fin Tabla de proveedores-->
                </div>
            </div>
        </div>



            </div>
        </div>
       

        


        <!--FIN CONTENEDOR -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    </div>

    <!-- TODOS LOS ENLACES DE SCRIPTS -->
    <?php
        include '../../componentes/scripts.php';
    ?>
    <!-- FIN DE SCRIPTS -->
</body>

</html>