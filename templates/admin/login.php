<div class="uk-section" id="login">
    <div class="uk-container">
        <div class="uk-card uk-card-default uk-card-body uk-width-large uk-position-center uk-box-shadow-medium uk-box-shadow-hover-xlarge">
            <div class="uk-flex uk-flex-center uk-margin-large-bottom">
                <img src="./img/logo.png" class="uk-responsive-width" />
            </div>
            <?php
                if(isset($unknow_message))
                { ?>
                    <div class="uk-alert-danger" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p><?php echo $unknow_message; ?></p>
                    </div>
                <?php }
            ?>
            <form method="post" action="admin.php?page=login">
                <div class="uk-margin">
                    <input class="uk-input" name="firstname" type="text" placeholder="Votre prénom" required>
                </div>
                <div class="uk-margin">
                    <input class="uk-input" name="password" type="password" placeholder="Votre mot de passe" required>
                </div>
                <div class="uk-margin">
                    <button class="uk-button uk-button-primary uk-width-1-1" type="submit">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</div>
