<div class="uk-section top" id="top">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 uk-width-1-2@m">
                <p class="uk-margin-small-bottom" id="p-mail"><span uk-icon="icon: phone"></span> +33 (0)6 21 90 42 73</p>
            </div>
            <div class="uk-width-1-1 uk-width-1-2@m">
                <p class="uk-margin-small-bottom" id="p-phone"><span uk-icon="icon: phone"></span> +33 (0)6 02 71 11 50</p>
            </div>
        </div>
    </div>
</div>

<div id="nav-container">

    <div class="uk-section nav" id="nav" >
        <div class="uk-container">

            <div class="uk-flex uk-flex-center uk-margin-bottom uk-margin-top">
                <a href="home.html"><img src="./img/logo.png" class="uk-responsive-width" id="logo" alt="logo Alexis Colombo" uk-scrollspy="cls:uk-animation-slide-top"/></a>
            </div>
        </div>
    </div>

</div>

<div id="nav-container" uk-sticky>

    <div class="uk-section nav" id="nav" >
        <div class="uk-container">

            <nav class="uk-navbar-container uk-navbar-transparent uk-visible@m" id="web-nav" uk-navbar uk-scrollspy="cls:uk-animation-slide-bottom, delay:500">
                <div class="uk-navbar-center">
                    <ul class="uk-navbar-nav">
                        <?php include('../templates/menu.php') ?>
                    </ul>
                </div>
            </nav>

            <div class="uk-hidden@m mobile-nav" id="" uk-navbar uk-scrollspy="cls:uk-animation-slide-bottom, delay:500">
                <button href="#mobile-nav" class="uk-button uk-button-primary uk-width-1-1" type="button" uk-toggle="target: #mobile-nav; animation: uk-animation-slide-top-small"><span uk-icon="icon: menu"></span> Menu</button>
            </div>
            <div class="uk-width-1-1" id="mobile-nav" hidden="hidden">
                <ul class="uk-nav uk-nav-default">
                    <?php include('../templates/menu.php') ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="arrow"></div>

</div>
