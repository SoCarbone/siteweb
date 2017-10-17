<div class="container-fluid pt-5 pb-5" id="breadcrumb">

    <div class="container pt-4 pb-4">

        <h1 class="text-center display-4" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:'500'}">Nos réalisations de Créateurs NUM&Eacute;RIQUE</h1>

    </div>

</div>

<div class="container-fluid" id="wide" data-uk-scrollspy="{cls:'uk-animation-fade', delay:'1000'}">
    <div class="uk-grid-width-small-1-1 uk-grid-width-medium-1-4" data-uk-grid="{controls: '#items'}">
        <?php
        // Posts displaying
        foreach($items as $item)
        {
            ?>
                <figure class="uk-overlay uk-overlay-hover">
                    <img class="uk-overlay-spin" src="./img/portfolio/<?php echo $item['image_name']; ?>" width="" height="" alt="<?php echo $item['image_name']; ?>">
                    <figcaption class="uk-overlay-panel  uk-overlay-background uk-overlay-slide-top">
                        <h3 class="display-4"><?php echo $item['title']; ?></h3>
                        <p><?php echo $item['description']; ?></p>
                        <p class="lead"><?php echo $item['method']; ?></p>
                        <?php if(!empty($item['video']))
                        {
                            echo '<a href="' . $item['video'] . '" data-uk-lightbox title="" class="btn btn-primary btn-lg">Zoomer</a>';
                        }
                        else
                        {
                            echo '<a href="./img/portfolio/' . $item['image_name'] . '" data-uk-lightbox title="" class="btn btn-primary btn-lg">Zoomer</a>';
                        } ?>
                    </figcaption>
                </figure>
            <?php
        }
        ?>
    </div>
</div>
