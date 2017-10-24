<div class="uk-section">

    <div class="uk-container">

        <div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>ATTENTION ! il n'y a pas de message de confirmation de suppression.</p>
        </div>

        <h2 class="text-center">Gestion des services</h2>

        <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium uk-box-shadow-hover-xlarge">

            <?php
            if(isset($_GET['modify']))
            {
                ?>
                <h3 class="uk-card-title blue">Modifier le service : <?php echo $modify_item['title']; ?></h3>
                <div class="">

                    <form method="post" name="add_project" action="admin.php?page=services&itsmodify=true" class="uk-grid-small" uk-grid>

                        <input type="hidden" class="" name="id" placeholder="" value="<?php echo $modify_item['id']; ?>">

                        <div class="uk-width-1-3">
                            <input type="text" class="uk-input" name="title" placeholder="Titre du service" value="<?php echo $modify_item['title']; ?>" required>
                        </div>

                        <div class="uk-width-1-3">
                            <input type="text" class="uk-input" name="image_name" placeholder="Nom de l'image avec son extension" value="<?php echo $modify_item['image_name']; ?>" required>
                        </div>

                        <div class="uk-width-1-1">
                            <textarea class="uk-textarea" name="description" placeholder="Desciption du service" cols="3" rows="5" required><?php echo $modify_item['description']; ?></textarea>
                        </div>

                        <div class="uk-width-1-1">
                            <button class="uk-button uk-button-primary" type="submit">Enregistrer</button>
                            <a href="admin.php?page=services" class="uk-link-text uk-margin-left">Annuler</a>
                        </div>

                    </form>

                </div>
            <?php
            }

            else
            {
            ?>

            <h3 class="uk-card-title blue">Ajouter un service</h3>
            <div class="">

                <form method="post" name="add_recommendations" action="admin.php?page=services&add=true" class="uk-grid-small" uk-grid>

                    <div class="uk-width-1-3">
                        <input type="text" class="uk-input" name="title" placeholder="Titre du service" required>
                    </div>

                    <div class="uk-width-1-3">
                        <input type="text" class="uk-input" name="image_name" placeholder="Nom de l'image avec son extension" value="skill.jpg" required>
                    </div>

                    <div class="uk-width-1-1">
                        <textarea class="uk-textarea" name="description" placeholder="Desciption du service" cols="3" rows="5" required></textarea>
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

        <div class="uk-grid uk-margin-top" uk-grid uk-height-match="target: > div > .uk-card">
            <?php
            // Services displaying
            foreach($items as $item)
            {
                ?>
                <div class="uk-width-1-1 uk-width-1-3@m" uk-scrollspy="cls:uk-animation-slide-bottom">

                    <div class="uk-display-block uk-transition-toggle icon-services">
                        <img src="./img/services/<?php echo $item['image_name']; ?>" class="uk-transition-scale-up uk-transition-opaque" alt="<?php echo $item['title']; ?>" />
                    </div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium uk-box-shadow-hover-xlarge uk-text-center team">

                        <div class="team-title uk-margin-medium-bottom">
                            <h3 class="uk-card-title uk-margin-remove-bottom uk-text-center"><?php echo $item['title']; ?></h3>
                        </div>

                        <p class="uk-text-justify"><?php echo $item['description']; ?></p>

                        <div class="uk-card-footer">
                            <a href="admin.php?page=services&modify=<?php echo $item['id']; ?>" class="uk-button uk-button-primary">Modifier</a>
                            <a href="admin.php?page=services&delete=<?php echo $item['id']; ?>" class="uk-button uk-button-danger uk-margin-small-top">Supprimer</a>
                        </div>

                    </div>

                </div>
                <?php
            }
            ?>
        </div>

    </div>

</div>
