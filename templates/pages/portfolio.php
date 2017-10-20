<div class="uk-section breadcrumb" uk-scrollspy="cls:uk-animation-slide-bottom">

    <div class="uk-container">

        <h1 class="uk-text-center uk-lead">Nos réalisations de Créateurs digital</h1>

    </div>

</div>

<div class="uk-section" id="wide" uk-scrollspy="cls:uk-animation-fade; delay:1000">
    <div class="grid">
        <!-- width of .grid-sizer used for columnWidth -->
        <div class="grid-sizer"></div>
        <?php
        // Posts displaying
        foreach($items as $item)
        {
            ?>
            <div class="grid-item">
                <div class="uk-card">

                    <div class="uk-inline-clip uk-transition-toggle uk-dark">
                        <img class="uk-transition-scale-up uk-transition-opaque" src="./img/portfolio/<?php echo $item['image_name']; ?>" width="" height="" alt="<?php echo $item['image_name']; ?>">
                        <a href="#modal-<?php echo $item['id']; ?>" uk-toggle>
                            <div class="uk-transition-slide-bottom uk-position-cover uk-position-small uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                <span class="uk-transition-fade" uk-icon="icon: plus-circle; ratio: 2"></span>
                            </div>
                        </a>
                    </div>

                    <div id="modal-<?php echo $item['id']; ?>" class="uk-modal-full" uk-modal>
                        <div class="uk-modal-dialog">
                            <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                            <div class="uk-grid-collapse uk-flex-middle" uk-grid>
                                <div class="uk-padding-large uk-width-1-1 uk-width-1-3@m">
                                    <h1 class="blue uk-margin-remove-bottom"><?php echo $item['title']; ?></h1>
                                    <p class="uk-margin-remove-top uk-text-lead"><?php echo $item['description']; ?></p>
                                    <p><?php echo $item['method']; ?></p>
                                </div>
                                <?php if(!empty($item['video']))
                                { ?>
                                    <div class="uk-cover-container uk-width-1-1 uk-width-2-3@m" uk-height-viewport><iframe src="<?php echo $item['video']; ?>" width="" height="" frameborder="0" allowfullscreen uk-cover></iframe></div>
                                <?php }
                                else
                                { ?>
                                    <div class="uk-background-cover uk-width-1-1 uk-width-2-3@m" style="background-image: url('./img/portfolio/<?php echo $item['image_name']; ?>');" uk-height-viewport></div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<script type="text/javascript">
var $grid = $('.grid').masonry({
  // set itemSelector so .grid-sizer is not used in layout
  itemSelector: '.grid-item',
  // use element for option
  columnWidth: '.grid-sizer',
  percentPosition: true
});
// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry('layout');
});
</script>
