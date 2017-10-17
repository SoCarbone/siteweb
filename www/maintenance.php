<?php
include_once('../templates/pre_header.php');?>

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
        <link rel="stylesheet" href="uikit/css/uikit.min.css" />

        <!--JS UIkit-->
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="uikit/js/uikit.min.js"></script>
        <script src="uikit/js/components/grid.min.js"></script>
        <script src="uikit/js/components/lightbox.min.js"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <!--My CSS-->
        <link rel="stylesheet" href="css/carbone.css" />

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-3">Site en maintenance</h1>
                <p class="lead">Je travaille actuellement sur l'amélioration du site. Il sera bientôt accessible.</p>
                <hr class="my-4">
                <p>En attendant, vous pouvez toujours vous inscrire à ma newsletter en bas de la page.</p>
                <p>Je vous souhaite une agréable journée.</p>
            </div>

        </div>

    </div>

    <div class="container-fluid footer">
        <div class="container">
            <h2 class="pt-5 display-4">Alexis Colombo</h2>
            <div class="row pb-2">
                <div class="col-sm-12 col-md-6">
                    <p class="mt-0">est un créateur NUM&Eacute;RIQUE proche d’Avignon, Orange et Carpentras, qui accompagne les agences de communication, les professionnels et associations dans la mise en place de leur communication en créant sites Web responsive, motion-design, illustrations, lettrages et iconographie.</p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <h3>Inscrivez-vous à ma newsletter</h3>
                    <form class="form-inline validate" action="//alexiscolombo.us16.list-manage.com/subscribe/post?u=bf989e6e9d3c8dcac6fe189b5&amp;id=32b2c4c078" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                        <div class="form-group mr-2" id="mc_embed_signup_scroll">
                            <input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Votre email" required>
                        </div>
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bf989e6e9d3c8dcac6fe189b5_32b2c4c078" tabindex="-1" value=""></div>
                        <button type="submit" class="btn btn-primary" name="subscribe" id="mc-embedded-subscribe">S'inscrire</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid footer-bottom">
        <div class="container">
            <p class="small pt-1 pb-1 mb-0">2009-
                <?php echo date('Y'); ?> Alexis Colombo</p>
        </div>
    </div>


    <script type="text/javascript">
        (function(d, id) {
            if (d.getElementById(id)) return;
            var s = d.createElement('script');
            var c = d.getElementsByTagName('script')[0];
            s.type = 'text/javascript';
            s.async = true;
            s.src = 'https://widgets.hopwork.com/1.0.0/js/sdk.min.js';
            c.parentNode.insertBefore(s, c);
        })(document, 'hopwork-sdkjs-btn');

    </script>

    <!--Popup Mailchimp-->
    <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
    <script type="text/javascript">
        require(["mojo/signup-forms/Loader"], function(L) {
            L.start({
                "baseUrl": "mc.us16.list-manage.com",
                "uuid": "bf989e6e9d3c8dcac6fe189b5",
                "lid": "32b2c4c078"
            })
        })

    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>

</html>
