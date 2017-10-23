<div class="uk-section">

    <div class="uk-container">

        <h2 class="text-center">Gestion du portfolio</h2>

        <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium uk-box-shadow-hover-xlarge">

            <?php
            if(isset($_GET['modify']))
            {
                ?>
                <h3 class="uk-card-title blue">Modifier <?php echo $modify_item['title']; ?></h3>
                <div class="">

                    <form method="post" name="add_project" action="admin.php?page=portfolio&itsmodify=true" enctype="multipart/form-data" class="uk-grid-small" uk-grid>

                        <input type="hidden" class="" name="id" placeholder="" value="<?php echo $modify_item['id']; ?>">

                        <div class="uk-width-1-3">
                            <input type="text" class="uk-input" name="title" placeholder="" value="<?php echo $modify_item['title']; ?>" required>
                        </div>

                        <div class="uk-width-1-3">
                            <input type="text" class="uk-input" name="description" placeholder="" value="<?php echo $modify_item['description']; ?>" required>
                        </div>

                        <div class="uk-width-1-3" uk-form-custom="target: true">
                            <input type="file" class="">
                            <input type="text" class="uk-input" name="image_name" placeholder="Choisir une image" value="<?php echo $modify_item['image_name']; ?>" disabled>
                        </div>

                        <div class="uk-width-1-1">
                            <input type="text" class="uk-input" name="video" placeholder="Si c'est une vidéo, mettre l'url complète"  value="<?php if(isset($modify_item['video'])) {echo $modify_item['video'];} ?>">
                        </div>

                        <div class="uk-width-1-1">
                            <textarea class="uk-textarea" name="method" placeholder="Description des tâches" cols="3" rows="5" required><?php echo $modify_item['method']; ?></textarea>
                        </div>

                        <div class="uk-width-1-1">
                            <button class="uk-button uk-button-primary" type="submit">Enregistrer</button>
                            <a href="admin.php?page=portfolio" class="uk-link-text uk-margin-left">Annuler</a>
                        </div>

                    </form>

                </div>
            <?php
            }

            else
            {
            ?>

            <h3 class="uk-card-title blue">Ajouter un projet</h3>
            <div class="">

                <form method="post" name="add_project" action="admin.php?page=portfolio&add=true" enctype="multipart/form-data" class="uk-grid-small" uk-grid>

                    <div class="uk-width-1-3">
                        <input type="text" class="uk-input" name="title" placeholder="Le nom du client" required>
                    </div>

                    <div class="uk-width-1-3">
                        <input type="text" class="uk-input" name="description" placeholder="Produit livré" required>
                    </div>

                    <div class="uk-width-1-3" uk-form-custom="target: true">
                        <input type="file" class="">
                        <input type="text" class="uk-input" name="image" placeholder="Choisir une image" disabled>
                    </div>

                    <div class="uk-width-1-1">
                        <input type="text" class="uk-input" name="video" placeholder="Si c'est une vidéo, mettre l'url complète">
                    </div>

                    <div class="uk-width-1-1">
                        <textarea class="uk-textarea" name="method" placeholder="Description des tâches" cols="3" rows="5" required></textarea>
                    </div>

                    <div class="uk-width-1-1">
                        <button class="uk-button uk-button-primary" type="submit">Ajouter</button>
                    </div>

                </form>

            </div>
            <?php
            }
            ?>

        </div>

        <div class="uk-grid uk-margin-top" uk-grid>
            <?php
            foreach($items as $item)
            {
                ?>
                <div class="uk-width-1-4">
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-box-shadow-hover-xlarge">
                        <div class="uk-card-media-top">
                            <img class="card-img-top" src="<?php echo $site_url . './img/portfolio/' . $item['image_name']; ?>" alt="<?php echo $item['image_name']; ?>">
                        </div>

                        <div class="uk-card-body">
                            <h4 class="uk-card-title">
                                <?php echo $item['title']; ?>
                            </h4>
                            <p class="blue">
                                <?php echo $item['description']; ?>
                            </p>
                            <p>
                                <?php echo $item['method']; ?>
                            </p>
                        </div>
                        <div class="uk-card-footer">
                            <a href="admin.php?page=portfolio&modify=<?php echo $item['id']; ?>" class="uk-button uk-button-primary uk-margin-small-bottom">Modifier</a>
                            <a href="#delete-modal" class="uk-button uk-button-danger" uk-toggle="target: #delete-modal">Supprimer</a>
                        </div>

                        <!--Modal de confirmation de suppression-->
                        <div id="delete-modal" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <h2 class="uk-modal-title blue">Etes vous sur de vouloir supprimer <?php echo $item['title']; ?> ?</h2>
                                <p class="uk-text-right">
                                    <button href="admin.php?page=portfolio&delete=<?php echo $item['id']; ?>" class="uk-button uk-button-danger" type="button">OUI</button>
                                    <button class="uk-button uk-button-secondary uk-modal-close" type="button">NON</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

    </div>

</div>
