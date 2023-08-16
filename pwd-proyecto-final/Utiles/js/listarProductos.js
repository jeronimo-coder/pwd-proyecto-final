$(window).on("load", function () {
    cargarProductosHome();
});

function cargarProductosHome() {
    //console.log("carrito");
    $.ajax({
        type: "POST",
        url: '../Acciones/producto/listarProdTienda.php',
        data: null,
        success: function (response) {
            //console.log(response);
            var arreglo = [];
            $.each($.parseJSON(response), function (index, productoActual) {
                arreglo.push(productoActual);
            });
            //console.log(arreglo);

            armarTablaProductos(arreglo);
        }
    });
}

// Buscamos la tabla y añadimos cada compra
function armarTablaProductos(arreglo) {


    $('#filaProductos').empty();
    //console.log(arreglo.length);

    if ((arreglo.length) > 0) {
        //var idcompra=arreglo[0].idcompra;
        //console.log(idcompra);
        $.each(arreglo, function (index, producto) {

            console.log('producto');
            $('#filaProductos').append(`
    <div class="col-3 pb-3">
        <div class="card bg-primary text-white" style="min-height: 350px;">
            <img src="./img/productos/${producto.imagen}" class="card-img-top float-start mb-2" style="max-width: 100%" alt="...">
            <div class="card-body text-left">
                <h5 class="card-title text-center h2">${producto.pronombre}</h5>
                <p class="card-text text-center h3">${producto.prodetalle}</p>
                <p class="card-text h3"><b>$</b> ${producto.precio}</p>
                <p class="card-text"><b>Disponibles:</b> ${producto.procantstock}</p>
                <div id="agregarBoton${producto.idproducto}" class="d-grid gap-2 d-md-block m-auto mb-2"></div>
            </div>
            <div class="card-footer text-center">
                ${(producto.rol != null && producto.rol == "cliente") ? `<button class="carrito btn btn-light" type="button" onclick="agregarACarrito(${producto.idproducto})" class="agregarACarrito">Agregar al carrito</button>` : ''}
            </div>
        </div>
    </div>
`);
        });


    } else {

        $('#filaProductos').append('<div class=" card mb-3" style="max-width: 540px;"><div class="row g-0"><div class="col-md-4"><img src="./img/pexelsZapas3.png" class="img-fluid rounded-start" alt="..."></div><div class="col-md-8"><div class="card-body"><h4 class="card-title">Todav&iacutea estamos cargando los productos...</h4><p class="card-text">Falta muy poco para que veas todos los productos que tenemos para vos!.</p></div></div></div></div>');
    }
}
