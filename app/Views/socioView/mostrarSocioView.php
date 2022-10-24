<!DOCTYPE html>
<html lang="en">

<head>
    <title>Club de Rugby</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://localhost/Club_Rugby/app/Views/styleGeneral.css">
    <style>
        td {
            color: whitesmoke;
        }

        /* tuve que hacer esto porque el css no me lo tomaba */
        @media (min-width: 720px) and (max-width: 2080px) {
            .general {
                width: 80%;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container general">

        <div class="container-fluid p-1 bg-dark text-white text-center mt-5 titulo">
            <h1><b>|~</b> Clubcito de Rugby <b>~|</b></h1>
            <p></p>
        </div>

        <div class="container mt-4">
            <h2 class="text-center mt-5 text-dark">Listado de socios
            </h2>
            <div class="row mt-4 formulario">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Documento</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Email</th>
                            <th scope="col">Categoría</th>
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
                <div class="d-grid mt-4">
                    <a type="button" class="btn btn-lg btn-outline-warning" href="http://localhost/Club_Rugby/index.php">Volver</a>
                </div>



                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


            </div>
        </div>

    </div>



</body>
<footer>
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
</footer>

</html>