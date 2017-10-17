<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-93773882-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments)
        };
        gtag('js', new Date());

        gtag('config', 'UA-93773882-1');

    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="<?php $author ?>">

    <?php

        if(isset($_GET['page']) AND array_key_exists($_GET['page'], $site_title))
        {
            echo '<title>' . $site_title[$_GET['page']] . '</title>';
        }
        else
        {
            echo '<title>' . $site_title['default'] . '</title>';
        }

        if(isset($_GET['page']) AND array_key_exists($_GET['page'], $site_description))
        {
            echo '<meta name="description" content="' . $site_description[$_GET['page']] . '">';
        }
        else
        {
            echo '<meta name="description" content="' . $site_description['default'] . '">';
        }

        if(isset($_GET['page']) AND array_key_exists($_GET['page'], $site_keywords))
        {
            echo '<meta name="keywords" content="' . $site_keywords[$_GET['page']] . '">';
        }
        else
        {
            echo '<meta name="keywords" content="' . $site_keywords['default'] . '">';
        }

    ?>

        <!--Balises Open graph>-->
        <meta property="og:title" content="<?php $site_title['default'] ?>" />
        <meta property="og:description" content="<?php $site_description['default'] ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php $site_url ?>" />
        <meta property="og:image" content="<?php echo $site_url; ?>/img/popup_illustration.png" />

        <!--Meta twitter-->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="<?php $site_title['default'] ?>" />
        <meta name="twitter:description" content="<?php $site_description['default'] ?>" />
        <meta name="twitter:url" content="<?php $site_url ?>" />
        <meta name="twitter:image" content="<?php echo $site_url; ?>/img/popup_illustration.png" />

        <!--Favicon-->
        <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
        <link rel="manifest" href="img/favicon/manifest.json">
        <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <!--Import Fonts-->
        <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

        <!--CSS UIkit-->
        <!--<link rel="stylesheet" href="uikit/css/uikit.min.css" />-->

        <!--JS UIkit-->
        <!--<script src="js/jquery-3.1.1.min.js"></script>
    <script src="uikit/js/uikit.min.js"></script>
    <script src="uikit/js/components/grid.min.js"></script>
    <script src="uikit/js/components/lightbox.min.js"></script>-->

        <!-- Bootstrap CSS -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">-->

        <!-- jQuery is required -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- UIkit JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit-icons.min.js"></script>

        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css" />

        <!--My CSS-->
        <link rel="stylesheet" href="css/carbone.css" />

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--Script reCaptcha-->
        <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>

    <?php include_once('../templates/nav.php') ?>
