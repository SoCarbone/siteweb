<div class="uk-section breadcrumb" uk-scrollspy="cls:uk-animation-slide-bottom">

    <div class="uk-container">

        <h1 class="uk-text-center uk-lead">Nos différents services</h1>

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

                    <div class="uk-display-block uk-transition-toggle uk-border-circle uk-overflow-hidden avatar">
                        <img src="./img/services/<?php echo $item['image_name']; ?>" class="uk-transition-scale-up uk-transition-opaque" alt="<?php echo $item['title']; ?>" />
                    </div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium uk-box-shadow-hover-xlarge uk-text-center team">

                        <div class="team-title uk-margin-medium-bottom">
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
