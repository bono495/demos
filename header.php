<?php

$page = $_GET['page'];

?>

<!doctype html>
<html lang="nl-NL">
    <head>
        <title>Cook Demo | Gis Viewer</title>
        <meta charset="utf-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index,follow">
        <meta name="description" content="Probeer hier de GIS Viewer van Cook. Op deze pagina kunt u de demo GIS viewer van Cook bekijken.">

        <meta property="og:title" content="Cook Demo | De complete veilige gepersonaliseerde GIS Viewer van GISArts" />
        <meta property="og:description" content="Probeer hier de GIS Viewer van Cook. Op deze pagina kunt u de demo GIS viewer van Cook bekijken." />
        <meta property="og:image" content="https://demo.gisarts.nl/img/logo_cook.webp" />
        <meta property="og:site_name" content="Cook Demo" />
        <meta property="og:url" content="https://demo.gisarts.nl/" />

        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="subject" content="Serve The World">
        <meta name="copyright" content="Gisarts">
        <meta name="keywords" content="cook, gis, viewer, geo, gisarts"/>
        
        <link rel="icon" href="./img/favicon.webp">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="css/main.css" rel="stylesheet" media="screen">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet"> 
        <base href="https://demo.gisarts.nl/">
    </head>
    <body>
        <header class="text-center header nav-down">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <div class="nav-item text-start nav-logo">
                        <a aria-current="page" href="/"><img width="250px" src="./img/logo_cook.webp" class="r-logo-main" alt="logo_cook"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link <?php if($page == "") { echo "active";} ?>" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($page == "demo") { echo "active";} ?>" href="?page=demo">Demo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($page == "functies") { echo "active";} ?>" href="?page=functies">Functies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($page == "applicatiebeheer") { echo "active";} ?>" href="?page=applicatiebeheer">Applicatiebeheer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="cursor: pointer;" onclick="window.scrollTo(0, document.body.scrollHeight);">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>