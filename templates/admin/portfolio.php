<div class="container-fluid" id="section">

    <h2 class="text-center">Gestion du portfolio</h2>

    <div class="row mb-3">

        <div class="card w-100">

            <?php
            if(isset($_GET['modify']))
            {
                ?>
                <div class="card-header">
                    <h3 class="text-center">Modifier <?php echo $modify_item['title']; ?></h3>
                </div>
                <div class="card-body">

                    <form method="post" name="add_project" action="admin.php?page=portfolio&itsmodify=true" enctype="multipart/form-data" class="" >

                        <div class="form-row">
                            <input type="hidden" class="form-control mb-2 mr-sm-2 mb-sm-0" name="id" placeholder="" value="<?php echo $modify_item['id']; ?>">
                            <div class="form-group col-sm-3">
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="title" placeholder="" value="<?php echo $modify_item['title']; ?>" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="description" placeholder="" value="<?php echo $modify_item['description']; ?>" required>
                            </div>
                            <div class="form-group col-sm-2">
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="image_name" placeholder="" value="<?php echo $modify_item['image_name']; ?>">
                            </div>
                            <div class="form-group col-sm-3">
                                <input type="file" class="form-control mb-2 mr-sm-2 mb-sm-0" name="image">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="video" placeholder="Si c'est une vidéo, mettre l'url complète" value="<?php if(isset($modify_item['video'])) {echo $modify_item['video'];} ?>">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="method" placeholder="" cols="3" required><?php echo $modify_item['method']; ?></textarea>
                        </div>

                        <button class="btn btn-dark mb-2 mr-sm-2 mb-sm-0" type="submit">Enregistrer</button>
                        <a href="admin.php?page=portfolio" class="btn btn-light mb-2 mr-sm-2 mb-sm-0">Annuler</a>

                    </form>

                </div>
            <?php
            }

            else
            {
            ?>

            <div class="card-header">
                <h3 class="text-center">Ajouter un projet</h3>
            </div>
            <div class="card-body">

                <form method="post" name="add_project" action="admin.php?page=portfolio&add=true" enctype="multipart/form-data" class="" >

                    <div class="form-row">
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="title" placeholder="Le nom du client" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="description" placeholder="Produit livré" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="file" class="form-control mb-2 mr-sm-2 mb-sm-0" name="image" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="video" placeholder="Si c'est une vidéo, mettre l'url complète">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="method" placeholder="Description des tâches" cols="3" required></textarea>
                        </div>
                    <button class="btn btn-dark" type="submit">Ajouter</button>


                </form>

            </div>
            <?php
            }
            ?>

        </div>

    </div>

    <div class="row">
        <?php
        foreach($items as $item)
        {
            ?>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="<?php echo $site_url . 'img/portfolio/' . $item['image_name']; ?>" alt="<?php echo $item['image_name']; ?>">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo $item['title']; ?>
                        </h4>
                        <p class="card-text">
                            <?php echo $item['description']; ?>
                        </p>
                        <p class="card-text">
                            <?php echo $item['method']; ?>
                        </p>
                    </div>
                    <div class="card-body">
                        <a href="admin.php?page=portfolio&modify=<?php echo $item['id']; ?>" class="btn btn-dark">Modifier</a>
                        <a href="admin.php?page=portfolio&delete=<?php echo $item['id']; ?>" class="btn btn-danger">Supprimer</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

</div>
