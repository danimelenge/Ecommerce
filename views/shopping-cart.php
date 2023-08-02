<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style-shopping-cart.css">
    <title>Carrito de compras</title>
</head>

<body>
    <!-- carrito + resumen -->
    <section class="my-5">
        <div class="container">
            <div class="row">
                <!-- carrito -->
                <div class="col-lg-9">
                    <div class="card border border-dark-subtle shadow-0">
                        <div class="m-4">
                            <div id="container-titles" class="d-flex">
                                <h4 class="card-title mb-4">Tu carrito de compras</h4>
                                <h6 class="card-title mb-4 p-1">(<span></span>)Productos</h6>
                            </div>
                            <div class="row gy-3 mb-4">
                                <div class="col-lg-5">
                                    <div class="me-lg-5">
                                        <div class="d-flex">
                                            <img src="../img/Product.jpg" class="border rounded me-3" style="width: 96px; height: 96px;" />
                                            <div class="">
                                                <a href="#" class="nav-link">Zapatillas Nike Air force</a>
                                                <p class="text-muted">Blanco, Zapatillas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                                    <div class="">
                                        <input style="width: 100px;" class="form-control me-4"></input>
                                    </div>
                                    <div class="">
                                        <text class="h6">$1156.00</text> <br />
                                        <small class="text-muted text-nowrap"> $460.00 / por artículo </small>
                                    </div>
                                </div>
                                <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                                    <div class="float-md-end">
                                        <a href="#" class="btn btn-danger border icon-hover-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i> Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- carrito -->
                <!-- resumen -->
                <div class="col-lg-3">
                    <div class="card shadow-0 border border-dark-subtle">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Subtotal total:</p>
                                <p class="mb-2">$329.00</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Descuento:</p>
                                <p class="mb-2">-$60.00</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Impuesto:</p>
                                <p class="mb-2">$14.00</p>
                            </div>
                            <hr />
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Precio total:</p>
                                <p class="mb-2 fw-bold">$283.00</p>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="btn btn-1 w-100 shadow-0 mb-2"><i class="fa-solid fa-bag-shopping" style="color: #000000;"></i> Realizar compra</a>
                                <a href="#" class="btn btn-2 btn-light w-100 mt-2 text-dark">Volver a la tienda</a>
                            </div>
                            <div class="mt-5 d-grid gap-4">
                                <h5 class="mb-2 d-grid justify-content-center">MÉTODOS DE PAGO</h5>
                                <div class="mt-3">
                                    <img src="../img/pagos.png" class="img-fluid" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- resumen -->
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>