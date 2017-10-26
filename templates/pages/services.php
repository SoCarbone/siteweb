<div class="uk-section breadcrumb" uk-scrollspy="cls:uk-animation-slide-bottom">

    <div class="uk-container">

        <h1 class="uk-text-center uk-lead">Notre offre</h1>

    </div>

</div>

<div class="uk-section " uk-scrollspy="cls:uk-animation-slide-bottom">

    <div class="uk-container">

        <div class="uk-grid" uk-grid uk-height-match="target: > div > .uk-card">

            <?php
            // Services displaying
            foreach($items as $item)
            {
                ?>
                <div class="uk-width-1-1 uk-width-1-3@m" uk-scrollspy="cls:uk-animation-slide-bottom">

                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium uk-box-shadow-hover-xlarge uk-text-center ">

                        <h1 class="uk-heading-line uk-text-center uk-margin-bottom"><span><img src="./img/services/<?php echo $item['image_name']; ?>" class="uk-transition-scale-up uk-transition-opaque icon-services" alt="<?php echo $item['title']; ?>" /></span></h1>

                        <div class="team-title uk-margin-medium-bottom">
                            <!--<img src="./img/services/<?php echo $item['image_name']; ?>" class="uk-transition-scale-up uk-transition-opaque icon-services" alt="<?php echo $item['title']; ?>" />-->
                            <h3 class="uk-card-title uk-margin-remove-bottom uk-text-center"><?php echo $item['title']; ?></h3>
                        </div>

                        <p class="uk-text-justify"><?php echo $item['description']; ?></p>

                    </div>

                </div>
                <?php
            }
            ?>

        </div>

    </div>
</div>
