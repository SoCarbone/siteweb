<div class="uk-section" id="intro" uk-scrollspy="cls:uk-animation-slide-left; delay:500">

    <div class="uk-inline-clip uk-transition-toggle uk-visible@m">

        <img src="./img/big-illustration.jpg" class="uk-transition-scale-up uk-transition-opaque" alt="texte les créateurs tout-en-un" />
        <div class="uk-position-top-center">
            <img src="./img/text-big-illustration.png" class="uk-transition-slide-top uk-margin-large-top uk-width-large" alt="Illustration Alexis et Laëtitia" />
        </div>

    </div>

    <img src="./img/big-illustration-mobile.jpg" class="uk-hidden@m" alt="illustration les créateurs tout-en-un" />



</div>

<div class="uk-section breadcrumb" uk-scrollspy="cls:uk-animation-slide-bottom; delay:750">

    <div class="uk-container">

        <h1 class="uk-text-center uk-lead">Un duo d'expérience <br class="uk-visible@m" />pour un projet digital harmonieux</h1>

    </div>

</div>

<div class="uk-section">

    <div class="uk-container">

        <div class="uk-grid" uk-grid uk-height-match="target: > div > .uk-card">

            <?php
            // Team displaying
            foreach($team as $member)
            {
                ?>
                <div class="uk-width-1-1 uk-width-1-2@m" uk-scrollspy="cls:uk-animation-slide-bottom">

                    <div class="uk-display-block uk-transition-toggle uk-border-circle uk-overflow-hidden avatar">
                        <img src="./img/partners/<?php echo $member['image_name']; ?>" class="uk-transition-scale-up uk-transition-opaque" alt="avatar <?php echo $member['name']; ?>" />
                    </div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium uk-box-shadow-hover-xlarge uk-text-center team">

                        <div class="team-title uk-margin-medium-bottom">
                            <h3 class="uk-card-title uk-margin-remove-bottom uk-text-center"><?php echo $member['name']; ?></h3>
                            <p class="uk-text-small uk-margin-remove-top uk-text-center"><?php echo $member['function']; ?></p>
                        </div>

                        <p class="uk-text-justify"><?php echo $member['content']; ?></p>

                    </div>

                </div>
                <?php
            }
            ?>

        </div>

    </div>

</div>

<div class="uk-section white-section" uk-scrollspy="cls:uk-animation-slide-bottom">

    <div class="uk-container">

        <h2 class="uk-heading-divider blue">Ils nous font confiance</h2>

        <div class="slider uk-visible-toggle">

            <?php
            // Recommendations displaying
            foreach($items as $item)
            {
                ?>
                <div class="uk-card uk-card-body slide">
                    <div class="uk-grid" uk-grid>
                        <div class="uk-width-1-1 uk-width-expand@m">
                            <div class="quote">
                                <p class="uk-text-justify quote-content"><?php echo $item['content']; ?></p>
                                <p class="uk-text-meta"><span class="uk-text-bold"><?php echo $item['name']; ?></span> <?php echo $item['function']; ?></p>
                            </div>
                        </div>
                        <?php if(!empty($item['image_name']))
                        {?>
                            <div class="uk-width-1-1 uk-width-auto@m">
                                <img src="./img/clients/<?php echo $item['image_name']; ?>" alt="logo <?php echo $item['image_name']; ?>" class="uk-responsive-width">
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>

        <script type="text/javascript">
            $(document).ready(function(){
              $('.slider').slick({
                adaptiveHeight: true,
                  autoplay: true,
                  prevArrow: '<a class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-large" href="#" uk-slidenav-previous></a>',
                  nextArrow: '<a class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-large" href="#" uk-slidenav-next></a>'
              });
            });
        </script>


    </div>
</div>

<!--<div class="uk-section big-blue uk-box-shadow-large uk-box-shadow-hover-xlarge" uk-scrollspy="cls:uk-animation-slide-bottom">

    <div class="uk-container">

        <h2 class="uk-text-center uk-heading-primary">"Nous mettons un point d’honneur à garder des relations humaines dans nos collaborations professionnelles"</h2>

    </div>

</div>-->

<div class="uk-section" uk-scrollspy="cls:uk-animation-slide-bottom">

    <div class="uk-container">

        <h2 class="uk-heading-divider white">Notre secret ?</h2>

        <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium uk-box-shadow-hover-xlarge">

            <div class="uk-grid" uk-grid>
                <?php
                // Secrets displaying
                foreach($secrets as $secret)
                {
                    ?>
                    <div class="uk-width-1-1 uk-width-1-4@m">
                        <div class="uk-card">
                            <div class="team-title uk-margin-small-bottom">
                                <h3 class="uk-card-title uk-margin-remove-bottom uk-text-center"><?php echo $secret['title']; ?></h3>
                            </div>
                            <p><?php echo $secret['description']; ?></p>
                        </div>

                    </div>
                    <?php
                }
                ?>
            </div>

        </div>


    </div>

</div>


