<?php include_once('../templates/pre_header.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

    <title><?php echo 'Adiministration du site: ' . $site_name; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css" />
</head>

<body>

<div class="container-fluid p-0 h-100"><!--Début du contenu-->

    <div class="row no-gutters h-100">

        <div class="col-2 h-100 d-inline-block" id="left-nav"><!--Menu latéral gauche-->

            <h2 class="text-center"><?php echo $site_name; ?></h2>
            <p class="text-center mb-4">Administration</p>

            <ul class="nav nav-pills nav-fill flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Tabelau de bord</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?page=portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?page=blog">Blog</a>
                </li>
            </ul>

        </div>

        <div class="col" id="content"><!--Début de la zone d'administration-->
