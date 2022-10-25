<!DOCTYPE html>
<html lang="en">

<head>
    <title>Club de Rugby</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="http://localhost/Club_Rugby/app/Views/styleGeneral.css">
    <link rel="stylesheet" href="http://localhost/Club_Rugby/app/Views/homeStyle.css">

    <!-- tuve que hacer esto porque el css no me lo tomaba -->
    <style>
        @media (min-width: 720px) and (max-width: 2080px) {
            .general {
                width: 80%;
            }
        }
    </style>
</head>

<body>

    <div class="container general" style="width: 70%;">
        <div class="container-fluid p-1 bg-dark text-white text-center mt-3 titulo">
            <h1><b>|~</b> Clubcito de Rugby <b>~|</b></h1>
            <p></p>
        </div>

        <div class="container">
            <h2 class="text-center mt-2">Seleccione una opción</h2>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <div class="d-grid">
                        <a type="button" class="btn btn-lg btn-outline-dark" href="http://localhost/Club_Rugby/index.php/socioController/create">Inscribirse</a>
                    </div>
                    <p class="mt-3" style="font-size: 27;">Si es la primera vez que va a participar del torneo de rugby o
                        actualmente no se encuentra inscripto. Por favor, presione este botón para anotarse
                    </p>
                </div>
                <div class="col-sm-6 text-end">
                    <div class="d-grid">
                        <a type="button" class="btn btn-lg btn-outline-warning" href="http://localhost/Club_Rugby/index.php/socioController/mostrar">Mostrar socios</a>

                    </div>
                    <p class="mt-3">Al presionar este botón, se logrará ver una tabla con los socios del Clubcito de Rugby
                    </p>
                </div>
            </div>
        </div>
        <div class="text-center mt-2 mb-5 p-1">
            <h2>Más que un deporte, una pasión.</h2>
            <div class="container text-center">
                <div class="row  align-items-center  imagenes">
                    <div class="col-sm-4 p-3">
                        <img src="http://localhost/Club_Rugby/app/Views/img/balon.jpg" style="width: 88%;" alt="">
                    </div>
                    <div class="col-sm-4 p-3">
                        <img src="http://localhost/Club_Rugby/app/Views/img/puntaso.jpg" style="width: 90%;" alt="">
                    </div>
                    <div class="col-sm-4 p-3">
                        <img src="http://localhost/Club_Rugby/app/Views/img/locos.jpg" style="width: 90%;" alt="">
                    </div>
                </div>
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