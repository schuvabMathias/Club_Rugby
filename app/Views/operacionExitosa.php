<!DOCTYPE html>
<html lang="en">

<head>
    <title>Club de Rugby</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="<?php echo base_url() ?>/rugbyIcon.ico">

    <link rel="stylesheet" href="<?php echo base_url() ?>/app/Views/styleGeneral.css">

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

        <div class="container opExitosa mt-5 text-center">
            <h2 class="text-center mt-2">¡Operación exitosa! <svg xmlns="http://www.w3.org/2000/svg" width="44"
                    height="44" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                </svg></h2>
            <p class="mt-3 mx-auto" style="font-size: 27;">La operacion se logró realizar con exito. Por favor presione
                volver
                para volver al menu principal.
            </p>

        </div>

        <div class="d-grid mt-4 mx-auto" style="width: 50%;">
            <a type="button" class="btn btn-lg btn-outline-dark"
                href="<?php echo base_url() ?>/index.php/HomeController/index">Volver</a>
        </div>


    </div>

</body>
<footer>
    <!--Waves Container-->
    <div class="fixed-bottom">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
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
</footer>

</html>