<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Club Rugby</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1>Ingresar socio:</h1>
    <?php if ($validation != null) { ?>
        <?= $validation->listErrors(); ?>
    <?php } ?>
    <?= form_open('socioController/create') ?>
    <div class="mb-3">
        <label for="inputNombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="inputNombre" name="inputNombre" value="<?php echo $nombre_apellido ?>">
    </div>
    <div class="mb-3">
        <label for="inputDocumento" class="form-label">Documento</label>
        <input type="number" class="form-control" id="inputDocumento" name="inputDocumento" value="<?php echo $dni ?>">
    </div>
    <div class="mb-3">
        <label for="inputTelefono" class="form-label">Telefono:</label>
        <input type="text" class="form-control" id="inputTelefono" name="inputTelefono" value="<?php echo $telefono ?>">
    </div>
    <div class="mb-3">
        <label for="inputDireccion" class="form-label">Direcci&oacute;n:</label>
        <input type="text" class="form-control" id="inputDireccion" name="inputDireccion" value="<?php echo $direccion ?>">
    </div>
    <div class="mb-3">
        <label for="inputMail" class="form-label">Mail:</label>
        <input type="mail" class="form-control" id="inputMail" name="inputMail" value="<?php echo $mail ?>">
    </div>
    <label class="form-label">Buscar:</label>
    <div class="mb-3">
        <select class="form-select" aria-label="Select Categoria" name="selectCategoria" id="selectCategoria">
            <option value="1">Infantil</option>
            <option value="2">Juvenil</option>
            <option value="3" default>Mayor</option>
            <option value="4">Veterano</option>
        </select>
    </div>
    <div class="mb-3 infantil">
        <label for="inputNombreTutor" class="form-label">Nombre Tutor:</label>
        <input type="mail" class="form-control" id="inputNombreTutor" name="inputNombreTutor" value="<?php echo $nombre_tutor ?>">
    </div>
    <div class="mb-3 infantil">
        <label for="inputDocumentoTutor" class="form-label">Documento Tutor:</label>
        <input type="mail" class="form-control" id="inputDocumentoTutor" name="inputDocumentoTutor" value="<?php echo $dni_tutor ?>">
    </div>
    <div class="mb-3 veterano"><input type="checkbox" id="inputEnfermedad" name="inputEnfermedad" value="enfermedad coronaria"></div>
    <button type="submit" class="btn btn-primary">Ingresar</button>
    <?= form_close() ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>