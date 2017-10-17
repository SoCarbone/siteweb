<div class="uk-section top" id="top">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 uk-width-1-2@m">
                <p class="uk-margin-small-bottom" id="p-mail"><span uk-icon="icon: mail"></span> alexis.colombo(at)gmail.com</p>
            </div>
            <div class="uk-width-1-1 uk-width-1-2@m">
                <p class="uk-margin-small-bottom" id="p-phone"><span uk-icon="icon: phone"></span> +33 (0)6 02 71 11 50</p>
            </div>
        </div>
    </div>
</div>

<div id="nav-container" uk-sticky>

    <div class="uk-section nav" id="nav" >
        <div class="uk-container">

            <div class="uk-flex uk-flex-center uk-margin-bottom">
                <a href="home.html"><img src="./img/logo.png" class="uk-responsive-width " id="logo" alt="logo Alexis Colombo" uk-scrollspy="cls:uk-animation-slide-top"/></a>
            </div>

            <nav class="uk-navbar-container uk-navbar-transparent uk-visible@m" uk-navbar uk-scrollspy="cls:uk-animation-slide-bottom, delay:500">
                <div class="uk-navbar-center">
                    <ul class="uk-navbar-nav">
                        <li class="<?php if((isset($_GET['page']) AND $_GET['page'] == 'home') OR !isset($_GET['page'])) { echo 'uk-active'; } ?>"><a class="" href="home.html">Qui sommes nous ?</a></li>
                        <li class="<?php if(isset($_GET['page']) AND $_GET['page'] == 'portfolio') { echo 'uk-active'; } ?>"><a class="" href="portfolio.html">Réalisations</a></li>
                        <li class="<?php if(isset($_GET['page']) AND $_GET['page'] == 'contact') { echo 'uk-active'; } ?>"><a class="" href="contact.html">Contact</a></li>
                    </ul>
                </div>

                <div class="uk-navbar-center uk-hidden@m" uk-scrollspy="cls:uk-animation-slide-bottom, delay:500">
                    <a class="uk-navbar-toggle" href="#">
                        <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
                    </a>
                </div>
            </nav>





            <div class="pos-f-t mobile"  data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:'500'}">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="p-4">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link lead <?php if((isset($_GET['page']) AND $_GET['page'] == 'home') OR !isset($_GET['page'])) { echo 'active'; } ?>" href="home.html">Qui sommes nous ?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link lead <?php if(isset($_GET['page']) AND $_GET['page'] == 'portfolio') { echo 'active'; } ?>" href="portfolio.html">Réalisations</a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link lead <?php //if(isset($_GET['page']) AND $_GET['page'] == 'team') { echo 'active'; } ?>" href="team.html">L'équipe</a>
                            </li>-->
                            <!--<li class="nav-item">
                                <a class="nav-link lead <?php //if(isset($_GET['page']) AND $_GET['page'] == 'blog') { echo 'active'; } ?>" href="blog.html">Blog</a>
                            </li>-->
                            <li class="nav-item">
                                <a class="nav-link lead <?php if(isset($_GET['page']) AND $_GET['page'] == 'contact') { echo 'active'; } ?>" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <nav class="navbar navbar-light">
                    <button class="navbar-toggler w-100" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>

        </div>
    </div>

    <div class="container-fluid" id="arrow"></div>

</div>
