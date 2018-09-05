<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/rubine.css">
        <link rel="stylesheet" href="css/docs.css">

        <title>Rubine</title>
    </head>

    <body class="theme-light">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top acrylic opacity-dynamic-80">
            <div class="container">
                <a class="navbar-brand brand" href="index.php">Rubine</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item<?php echo $page == 'elements' ? ' active' : '' ?>">
                            <a class="nav-link" href="elements.php">Elements</a>
                        </li>
                        <li class="nav-item<?php echo $page == 'style' ? ' active' : '' ?>">
                            <a class="nav-link" href="style.php">Style</a>
                        </li>
                        <li class="nav-item<?php echo $page == 'components' ? ' active' : '' ?>">
                            <a class="nav-link" href="components.php">Components</a>
                        </li>
                        <li class="nav-item<?php echo $page == 'release' ? ' active' : '' ?>">
                            <a class="nav-link" href="release.php">Release notes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>