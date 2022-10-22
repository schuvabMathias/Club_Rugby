<!DOCTYPE html>
<html lang="en">

<head>
    <title>Club de Rugby</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="http://localhost/Club_Rugby/app/Views/styleGeneral.css">
    <link rel="stylesheet" href="http://localhost/Club_Rugby/app/Views/socioView/style.css">

</head>

<body>
    <div class="container-fluid p-1 bg-dark text-white text-center mt-5 titulo">
        <h1><b>|~</b> Clubcito de Rugby <b>~|</b></h1>
        <p></p>
    </div>

    <div class="container mt-4">
        <h2 class="text-center mt-5 text-dark">Inscripcion menu
        </h2>
        <?php if ($validation != null) { ?>
            <?= $validation->listErrors(); ?>
        <?php } ?>
        <?= form_open('socioController/create') ?>
        <div class="row mt-4 formulario">
            <div class="col-sm-6">
                <!-- nombre -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="inputNombre" name="inputNombre" value="<?php echo $nombre_apellido ?>" placeholder="Carlitos Bala">
                    <label for="inputName">Nombre y Apellido</label>
                </div>
                <!-- email -->
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="inputMail" name="inputMail" value="<?php echo $mail ?>" placeholder="name@example.com">
                    <label for="inputMail">Direccion de email</label>
                </div>
                <!-- TELEFONO -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="inputTelefono" name="inputTelefono" value="<?php echo $telefono ?>" placeholder="Telefono">
                    <label for="inputTelefono">Telefono</label>
                </div> <!-- aca vamos a tener que hacer un control de que se ingresen solo numeros -->
            </div>
            <div class="col-sm-6 text-end">
                <!-- DIRECCION -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="inputDireccion" name="inputDireccion" value="<?php echo $direccion ?>" placeholder="Telefono">
                    <label for="inputDireccion">Direccion</label>
                </div>
                <!-- DOCUMENTO -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="inputDocumento" name="inputDocumento" value="<?php echo $dni ?>" placeholder="Password">
                    <label for="inputDocumento">Documento</label>
                </div>
                <!-- CATEGORIA -->
                <div class="form-floating ">
                    <select class="form-select" name="selectCategoria" id="selectCategoria" aria-label="Floating label select example">
                        <option selected>Seleccione su categoria</option>
                        <option value="1">Infantil (6 a 12)</option>
                        <option value="2">Juvenil</option>
                        <option value="3">Mayor</option>
                    </select>
                    <label for="floatingSelect">Works with selects</label>
                </div>

            </div>

            <div class="d-grid mt-4">
                <button type="button" class="btn btn-dark">Inscribir!</button>
            </div>



        </div> <?= form_close() ?>
    </div>


    <!--Waves Container-->
    <div class="fixed-bottom">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
    </div>
    <!--Waves end-->



</body>

</html>