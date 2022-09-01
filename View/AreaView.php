<!doctype html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/View/include/img/logo.png"/>
    <link rel="stylesheet" href="/View/include/styles/area.css"/>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjs3VWHlWeaJOXWI-tIJzDgF5pOiAg0fA&callback=initMap&v=weekly" defer></script>
    <script src="/View/include/scripts/maps.js"></script>
    <title>Secteurs - Educ O'poils</title>

</head>

<body class="d-flex flex-column min-vh-100">

<?php

include("include/header.php");

?>

<div class="main">

    <h1>Secteurs</h1>

    Je me déplace principalement sur deux secteurs, l'un aux alentours de Montberon et l'autre aux
    alentours de Castelnau d'Estrétefonds, voir ci-dessous :

    <div class="maps">

        <div id="mapMontberon" style="height: 400px; width: 100%; margin: 5px"></div>
        <div id="mapCastel" style="height: 400px; width: 100%; margin: 5px"></div>

    </div>

</div>

<?php

include("include/footer.php");

?>

</body>

</html>

