<div class="container-fluid" id="section">

    <h2 class="text-center">Tableau de bord</h2>

    <h3>Données du site</h3>

    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <p class="number text-center"><?php echo $items_number ?></p>
                    <h3 class="text-center">projet<?php if($items_number > 1 ){ echo 's'; }?> dans portfolio</h3>
                </div>
                <div class="card-body">
                    <a href="admin.php?page=portfolio" class="btn btn-dark">Gérer les projets</a>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <p class="number text-center"><?php echo $posts_number ?></p>
                    <h3 class="text-center">news dans le blog</h3>
                </div>
                <div class="card-body">
                    <a href="admin.php?page=blog" class="btn btn-dark">Gérer les news</a>
                </div>
            </div>
        </div>
    </div>

    <h3 class="mt-5">Données des visiteurs</h3>

    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <p class="number text-center"><?php echo $visitors_number ?></p>
                    <h3 class="text-center">visiteur<?php if($visitors_number > 1 ){ echo 's'; }?> unique<?php if($visitors_number > 1 ){ echo 's'; }?></h3>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php var_dump($screens_list); ?>
                </div>
            </div>
        </div>
    </div>

</div>
