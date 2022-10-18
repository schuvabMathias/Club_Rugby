<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Club Rugby</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <!-- <label class="form-label">Buscar:</label>
    <div class="mb-3">
        <select class="form-select" aria-label="Select Forma" name="selectForma" id="selectForma">
            <option value="nombre">Nombre</option>
            <option value="numero_sucursal">Numero de Sucursal</option>
        </select>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="inputValor" name="inputValor">
    </div>
    <button type="submit" class="btn btn-primary">Buscar</button> -->
    <form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Documento</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Categoria</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php for ($i = 0; $i < sizeof($socios); $i++) { ?>
                    <tr>
                        <th scope="row"><?php echo $i + 1 ?></th>
                        <td><?php echo $socios[$i]['nombre_apellido'] ?></td>
                        <td><?php echo $socios[$i]['dni'] ?></td>
                        <td><?php echo $socios[$i]['telefono'] ?></td>
                        <td><?php echo $socios[$i]['direccion'] ?></td>
                        <td><?php echo $socios[$i]['mail'] ?></td>
                        <td><?php
                            if ($socios[$i]['id_categoria'] == 1) {
                                echo 'Infantil';
                            }
                            if ($socios[$i]['id_categoria'] == 2) {
                                echo 'Juvenil';
                            }
                            if ($socios[$i]['id_categoria'] == 3) {
                                echo 'Mayor';
                            }
                            if ($socios[$i]['id_categoria'] == 4) {
                                echo 'Veterano';
                            }
                            ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Eliminar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>



<!--
    Cliente: Nombre y Apellido – Dirección – Teléfono – Fecha de Nacimiento –
    Documento de Identidad – CUIT/CUIL
-->

</html>