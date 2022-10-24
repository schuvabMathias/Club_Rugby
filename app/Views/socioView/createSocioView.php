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
        <?= form_open('socioController/create') ?>
        <div class="row mt-4 formulario">
            <div class="col-sm-6">
                <!-- NOMBRE -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="inputNombre" name="inputNombre" value="<?php echo $nombre_apellido ?>" placeholder="Carlitos Bala">
                    <label for="inputName">Nombre y Apellido</label>
                    <?php echo $validation['nombre_apellido']; ?>
                </div>
                <!-- EMAIL -->
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="inputMail" name="inputMail" value="<?php echo $mail ?>" placeholder="name@example.com">
                    <label for="inputMail">Direccion de email</label>
                    <?php echo $validation['mail']; ?>
                </div>

                <!-- TELEFONO -->
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="inputTelefono" name="inputTelefono" value="<?php echo $telefono ?>" placeholder="Telefono">
                    <label for="inputTelefono">Telefono</label>
                    <?php echo $validation['telefono']; ?>
                </div> <!-- aca vamos a tener que hacer un control de que se ingresen solo numeros -->
                <div class="form-floating mb-3 infantil-Nomb">
                    <input type="mail" class="form-control infantil" id="inputNombreTutor" name="inputNombreTutor" value="<?php echo $nombre_tutor ?>" placeholder="Mustafa Bala">
                    <label for="inputNombreTutor" class="form-label infantil">Nombre Tutor</label>
                    <?php echo $validation['nombre_tutor']; ?>
                </div>
                <div class="mb-3 veterano">
                    <input type="checkbox" class="veterano form-check-input" id="inputEnfermedad" name="inputEnfermedad" value="enfermedad coronaria" placeholder="Algo">
                    <label for="inputEnfermedad" class="form-check-label">
                        <p>Enfermedad coronaria</p>
                    </label>
                </div>

            </div>
            <div class="col-sm-6 text-end">
                <!-- DIRECCION -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="inputDireccion" name="inputDireccion" value="<?php echo $direccion ?>" placeholder="Telefono">
                    <label for="inputDireccion">Direccion</label>
                    <?php echo $validation['direccion']; ?>
                </div>
                <!-- DOCUMENTO -->
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="inputDocumento" name="inputDocumento" value="<?php echo $dni ?>" placeholder="Password">
                    <label for="inputDocumento">Documento</label>
                    <?php echo $validation['dni']; ?>
                </div>
                <!-- CATEGORIA -->
                <div class="form-floating mb-3">
                    <select class="form-select" name="selectCategoria" id="selectCategoria" aria-label="Floating label select example">
                        <option value="1" <?php if ($id_categoria == 1) {
                                                echo 'selected';
                                            } ?>>Infantil (6 a 12)</option>
                        <option value="2" <?php if ($id_categoria == 2) {
                                                echo 'selected';
                                            } ?>>Juvenil</option>
                        <option value="3" <?php if ($id_categoria == 3) {
                                                echo 'selected';
                                            } ?>>Mayor</option>
                        <option value="4" <?php if ($id_categoria == 4) {
                                                echo 'selected';
                                            } ?>>Veterano</option>
                    </select>
                    <label for="floatingSelect">Categoria</label>
                </div>
                <div class="form-floating mb-3 infantil-Doc">
                    <input type="mail" class="form-control infantil" id="inputDocumentoTutor" name="inputDocumentoTutor" value="<?php echo $dni_tutor ?>" placeholder="Algo">
                    <label for="inputDocumentoTutor" class="form-label infantil">Documento Tutor</label>
                    <?php echo $validation['dni_tutor']; ?>
                </div>
                <div class="mb-3 veteranoInv">
                    <p style="margin-top: 4.5rem"></p>
                </div>


            </div>

        </div>
        <div class="row formulario">
            <div class="col-sm-6">
                <div class="d-grid">
                    <a type="button" class="btn btn-lg btn-outline-warning" href="http://localhost/Club_Rugby/index.php">Volver</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-grid">
                    <button type="submit" class="btn btn-lg btn-dark">Inscribir!</button>
                </div>
            </div>
        </div>
        <?= form_close() ?>
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


    <script src="http://localhost/Club_Rugby/app/Views/socioView/createSocioView.js"></script>

</body>

</html>