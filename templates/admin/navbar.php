<div class="uk-navbar-container uk-padding-small uk-box-shadow-large" uk-navbar>
    <div class="uk-navbar-left">
        <img src="./img/logo.png" /><h2 class="uk-margin-left"><?php echo $site_name; ?></h2>
    </div>
    <div class="uk-navbar-center">
        <h1 class="text-center blue">Administration</h1>
    </div>
</div>

<div class="uk-grid">

    <div class="uk-width-1-6" id="left-nav"><!--Menu latéral gauche-->

        <div class="uk-card uk-card-body">
            <ul class="uk-nav-parent-icon" uk-nav>
                <li><a href="admin.php">Tableau de bord</a></li>
                <li><a href="admin.php?page=recommendations">Recommendations</a></li>
                <li><a href="admin.php?page=team">&Eacute;quipe</a></li>
                <li><a href="admin.php?page=secrets">Nos secrets</a></li>
                <li><a href="admin.php?page=services">Services</a></li>
                <li><a href="admin.php?page=portfolio">Réalisations</a></li>
                <!--<li><a href="admin.php?page=blog">News</a></li>-->
            </ul>
        </div>

    </div>

    <div class="uk-width-5-6" id="content"><!--Début de la zone d'administration-->
