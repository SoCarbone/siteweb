<div class="uk-section footer" uk-scrollspy="cls:uk-animation-slide-bottom">
    <div class="uk-container">
        <h2 class="uk-margin-remove-bottom">Alexis Colombo et Laëtitia Doens</h2>
        <div class="uk-grid uk-margin-bottom" uk-grid>
            <div class="uk-width-1-1 uk-width-2-3@m">
                <p class=""><?php echo $config['footer']; ?></p>
            </div>
            <div class="uk-width-1-1 uk-width-1-3@m">
                <h3>Inscrivez-vous à notre newsletter</h3>
                <form class="form-inline validate" action="//alexiscolombo.us16.list-manage.com/subscribe/post?u=bf989e6e9d3c8dcac6fe189b5&amp;id=32b2c4c078" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                    <div class="uk-margin-small-bottom" id="mc_embed_signup_scroll">
                        <input type="email" value="" name="EMAIL" class="uk-input" id="mce-EMAIL" placeholder="Votre email" required>
                    </div>
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bf989e6e9d3c8dcac6fe189b5_32b2c4c078" tabindex="-1" value=""></div>
                    <button type="submit" class="uk-button uk-button-primary" name="subscribe" id="mc-embedded-subscribe">S'inscrire</button>
                </form>
            </div>
        </div>

        <ul class="uk-navbar-nav uk-nav-default uk-visible@m">
            <?php include('../templates/menu.php') ?>
            <!--<li class="<?php //if(isset($_GET['page']) AND $_GET['page'] == 'mentions') { echo 'uk-active'; } ?>"><a class="" href="mentions.html">Mentions légales</a></li>-->
        </ul>

        <ul class="uk-nav uk-nav-default uk-hidden@m">
            <?php include('../templates/menu.php') ?>
            <!--<li class="<?php //if(isset($_GET['page']) AND $_GET['page'] == 'mentions') { echo 'uk-active'; } ?>"><a class="" href="mentions.html">Mentions légales</a></li>-->
        </ul>

    </div>
</div>

<div class="uk-section footer-bottom" uk-scrollspy="cls:uk-animation-slide-bottom">
    <div class="uk-container">
        <p class="small">2009-<?php echo date('Y'); ?> Alexis et Laëtitia</p>
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
<!--<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
<script type="text/javascript">
    require(["mojo/signup-forms/Loader"], function(L) {
        L.start({
            "baseUrl": "mc.us16.list-manage.com",
            "uuid": "bf989e6e9d3c8dcac6fe189b5",
            "lid": "32b2c4c078"
        })
    })

</script>-->

</body>

</html>
