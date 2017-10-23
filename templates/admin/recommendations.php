<div class="uk-section">

    <div class="uk-container">

        <h2 class="text-center">Gestion des recommendations</h2>

        <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium uk-box-shadow-hover-xlarge">

            <?php
            if(isset($_GET['modify']))
            {
                ?>
                <h3 class="uk-card-title blue">Modifier le recommendation de <?php echo $modify_item['name']; ?></h3>
                <div class="">

                    <form method="post" name="add_project" action="admin.php?page=recommendations&itsmodify=true" enctype="multipart/form-data" class="uk-grid-small" uk-grid>

                        <input type="hidden" class="" name="id" placeholder="" value="<?php echo $modify_item['id']; ?>">

                        <div class="uk-width-1-1">
                            <textarea class="uk-textarea" name="content" placeholder="Description des tâches" cols="3" rows="5" required><?php echo $modify_item['content']; ?></textarea>
                        </div>

                        <div class="uk-width-1-3">
                            <input type="text" class="uk-input" name="name" placeholder="" value="<?php echo $modify_item['name']; ?>" required>
                        </div>

                        <div class="uk-width-1-3">
                            <input type="text" class="uk-input" name="function" placeholder="" value="<?php echo $modify_item['function']; ?>" required>
                        </div>

                        <div class="uk-width-1-3">
                            <input type="text" class="uk-input" name="image_name" placeholder="Nom de l'image avec son extension" value="<?php echo $modify_item['image_name']; ?>">
                        </div>

                        <div class="uk-width-1-1">
                            <button class="uk-button uk-button-primary" type="submit">Enregistrer</button>
                            <a href="admin.php?page=recommendations" class="uk-link-text uk-margin-left">Annuler</a>
                        </div>

                    </form>

                </div>
            <?php
            }

            else
            {
            ?>

            <h3 class="uk-card-title blue">Ajouter une recommendation</h3>
            <div class="">

                <form method="post" name="add_recommendations" action="admin.php?page=recommendations&add=true" enctype="multipart/form-data" class="uk-grid-small" uk-grid>

                    <div class="uk-width-1-1">
                        <textarea class="uk-textarea" name="content" placeholder="Contenu de la recommendation" cols="3" rows="5" required></textarea>
                    </div>

                    <div class="uk-width-1-3">
                        <input type="text" class="uk-input" name="name" placeholder="Prénom et nom du client" required>
                    </div>

                    <div class="uk-width-1-3">
                        <input type="text" class="uk-input" name="function" placeholder="Function du client et son entreprise" required>
                    </div>

                    <div class="uk-width-1-3">
                        <input type="text" class="uk-input" name="image_name" placeholder="Nom de l'image avec son extension">
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

        <div class="uk-margin-top " >
            <?php
            // Recommendations displaying
            foreach($items as $item)
            {
                ?>
                <div class="uk-card uk-card-default uk-card-body uk-margin-bottom">
                    <div class="uk-grid" uk-grid>
                        <div class="uk-width-1-1 uk-width-expand@m">
                            <div class="quote">
                                <p class="uk-text-justify quote-content"><?php echo $item['content']; ?></p>
                                <p class="uk-text-meta"><span class="uk-text-bold"><?php echo $item['name']; ?></span> <?php echo $item['function']; ?></p>
                            </div>
                        </div>

                        <div class="uk-width-1-1 uk-width-auto@m">
                            <img src="./img/clients/<?php echo $item['image_name']; ?>" alt="<?php echo $item['image_name']; ?>" class="uk-responsive-width">
                        </div>
                    </div>
                    <div class="uk-card-footer">
                        <a href="admin.php?page=recommendations&modify=<?php echo $item['id']; ?>" class="uk-button uk-button-primary uk-margin-small-left">Modifier</a>
                        <a href="#delete-modal" class="uk-button uk-button-danger" uk-toggle="target: #delete-modal">Supprimer</a>
                    </div>

                    <!--Modal de confirmation de suppression-->
                    <div id="delete-modal" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body">
                            <h2 class="uk-modal-title blue">Etes vous sur de vouloir supprimer la recommendation de <?php echo $item['name']; ?> ?</h2>
                            <p class="uk-text-right">
                                <a href="admin.php?page=recommendations&delete=<?php echo $item['id']; ?>" class="uk-button uk-button-danger" type="button">OUI</a>
                                <button class="uk-button uk-button-secondary uk-modal-close" type="button">NON</button>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

    </div>

</div>
