<div class="uk-section">

    <div class="uk-container">

        <h2 class="text-center">Gestion des secrets</h2>

        <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium uk-box-shadow-hover-xlarge">

            <?php
            if(isset($_GET['modify']))
            {
                ?>
                <h3 class="uk-card-title blue">Modifier le secret : <?php echo $modify_secret['title']; ?></h3>
                <div class="">

                    <form method="post" name="add_project" action="admin.php?page=secrets&itsmodify=true" class="uk-grid-small" uk-grid>

                        <input type="hidden" class="" name="id" placeholder="" value="<?php echo $modify_secret['id']; ?>">

                        <div class="uk-width-1-3">
                            <input type="text" class="uk-input" name="title" placeholder="Titre du service" value="<?php echo $modify_secret['title']; ?>" required>
                        </div>

                        <div class="uk-width-1-1">
                            <textarea class="uk-textarea" id="editor" name="description" placeholder="Desciption du service" cols="3" rows="5" required><?php echo $modify_secret['description']; ?></textarea>
                        </div>

                        <div class="uk-width-1-1">
                            <button class="uk-button uk-button-primary" type="submit">Enregistrer</button>
                            <a href="admin.php?page=secrets" class="uk-link-text uk-margin-left">Annuler</a>
                        </div>

                    </form>

                </div>
            <?php
            }

            else
            {
            ?>

            <h3 class="uk-card-title blue">Ajouter un secret</h3>
            <div class="">

                <form method="post" name="add_recommendations" action="admin.php?page=secrets&add=true" class="uk-grid-small" uk-grid>

                    <div class="uk-width-1-3">
                        <input type="text" class="uk-input" name="title" placeholder="Titre du service" required>
                    </div>

                    <div class="uk-width-1-1">
                        <textarea class="uk-textarea" id="editor" name="description" placeholder="Desciption du service" cols="3" rows="5" required></textarea>
                    </div>

                    <div class="uk-width-1-1">
                        <button class="uk-button uk-button-primary" type="submit">Ajouter</button>
                    </div>

                </form>

            </div>
            <?php
            }
            ?>

            <?php include_once('../templates/admin/editor.php'); ?>

        </div>

        <div class="uk-grid uk-margin-top" uk-grid uk-height-match="target: > div > .uk-card">
            <?php
            // Secrets displaying
            foreach($secrets as $secret)
            {
                ?>
                <div class="uk-width-1-2 uk-width-1-4@m">
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="team-title uk-margin-small-bottom">
                            <h3 class="uk-card-title uk-margin-remove-bottom uk-text-center"><?php echo $secret['title']; ?></h3>
                        </div>
                        <p><?php echo $secret['description']; ?></p>
                        <div class="uk-card-footer">
                            <a href="admin.php?page=secrets&modify=<?php echo $secret['id']; ?>" class="uk-button uk-button-primary uk-margin-small-bottom">Modifier</a>
                            <a href="" class="uk-button uk-button-danger" uk-toggle="target: #delete-modal-<?php echo $secret['id']; ?>">Supprimer</a>
                        </div>

                        <!--Modal de confirmation de suppression-->
                        <div id="delete-modal-<?php echo $secret['id']; ?>" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <h2 class="uk-modal-title blue">Etes vous sur de vouloir supprimer <?php echo $secret['title']; ?> ?</h2>
                                <p class="uk-text-right">
                                    <a href="admin.php?page=secrets&delete=<?php echo $secret['id']; ?>" class="uk-button uk-button-danger" type="button">OUI</a>
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
