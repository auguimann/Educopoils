<!doctype html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/View/include/img/logo.png"/>
    <link rel="stylesheet" href="/View/include/styles/area.css"/>
    <!--<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css"/>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js"></script>-->
    <title>Secteurs - Educ O'poils</title>

</head>

<body class="d-flex flex-column min-vh-100">

<?php

include("include/header.php");

?>

<div class="main">

    <h1>Secteurs</h1>

    <div class="container">

        <div class="row" id="secteurs">

            <h3>Je me déplace principalement sur deux secteurs, l'un aux alentours de Montberon et l'autre aux
                alentours de Castelnau d'Estrétefonds, voir ci-dessous :</h3>

            <div class="col-xl-6">

                <img src="/View/include/img/secteur_castel.png"
                     class="rounded img-fluid img-thumbnail" alt="secteur_castel"/>

            </div>
            <div class="col-xl-6">

                <img src="/View/include/img/secteur_montberon.png"
                     class="rounded img-fluid img-thumbnail" alt="secteur_montberon"/>

            </div>

        </div>

    </div>

    <!--<div id="mapMontberon"></div>-->

</div>

<?php

include("include/footer.php");

?>

</body>

</html>
<script src="/View/include/scripts/maps.js"></script>

