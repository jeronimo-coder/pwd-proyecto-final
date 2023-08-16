<?php
$Titulo = "Tabla Compras";
include_once './Estructura/cabecera.php';
if (!$sesion->verificarPermiso('./listaCompras.php')) {
    $mensaje = "No tiene permiso para acceder a este sitio.";
    echo "<script> window.location.href='./index.php?mensaje=" . urlencode($mensaje) . "'</script>";
} else {
    $objItems = new abmCompra();
    $listaCompras = $objItems->buscar(['idusuario' => $sesion->getIDUsuarioLogueado()]);

    if (count($listaCompras) > 0) {
?>
        <div class="container my-2">
            <div class="table-responsive">
                <table class="table table-hover caption-top align-middle text-center" id="tablaCompras">

                    <thead class="table-dark">
                        <tr>
                            <th>ID Compra</th>
                            <th>Productos lista</th>
                            <th>Estado</th>
                            <th>Fecha Modificación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                    </tbody>
                </table>
            </div>

            <!-- AQUI SE LISTAN LOS PRODUCTOS -->
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="container-fluid p-4 mt-5 border border-2 rounded-2 bg-light shadow-lg p-3 mb-5 d-none" id='oculto'>
                    <h5 id="usnombre" class="text-center"></h5>
                    <hr>
                    <div class="overflow-auto" style="max-height: 300px;">
                        <ul class="list-group" id="listaProductos">
                        </ul>
                    </div>
                    <button type="button" class="btn btn-danger mt-2" id="cerrar">
                        <i class="fa-solid fa-xmark me-2"></i>Cerrar
                    </button>
                </div>
            </div>


            <script src="..\Utiles\js\funcionesABMListadoCompras.js"></script>
        </div>
    <?php } else {
    ?>
        <div class="container py-5 text-center">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./img/carro-vacio.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">Aún no has realizado ninguna compra</h4>
                            <p class="card-text h4">Hay varios modelos de zapatillas, encuentra el que más te guste</p>
                            <p class="card-text">
                                <a href="./productos.php" class="btn btn-success col-11">Productos</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    }
    include_once '.\Estructura\pie.php';
} ?>