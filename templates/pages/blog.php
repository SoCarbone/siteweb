<section class="breadcrumb" id="top">

    <div class="uk-container uk-container-center">

        <h1 class="uk-text-center" data-uk-scrollspy="{cls:'uk-animation-slide-right'}">Les dernières actus</h1>

    </div>

</section>

<section>

    <!--<div class="uk-container uk-container-center content">-->

        <div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-4 uk-margin-large-top" data-uk-grid="{gutter: 20}">
        <?php
        // Posts displaying
        foreach($posts as $post)
        {
            ?>
            <div>
                <article class="uk-article">
                    <?php if(isset($post['image_name'])) { echo '<img src="./img/portfolio/' . $post['image_name'] . '" />'; } ?>
                    <div class="data">
                    <h2 class="uk-article-title"><?php echo $post['title']; ?></h2>
                    <p class="uk-article-meta">Ecrit par Alexis le <?php echo $post['date_billet_fr']; ?></p>
                    <p class="uk-article-lead"><?php echo $post['content']; ?></p>
                        </div>
                </article>
            </div>
            <?php
        }
        ?>

        <!--</div>-->
    </div>

</section>
