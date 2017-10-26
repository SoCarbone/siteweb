<div class="uk-section">

    <div class="uk-container">

        <h2 class="text-center">Gestion de l'équipe</h2>

            <?php
            if(isset($_GET['modify']))
            {
                ?>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium uk-box-shadow-hover-xlarge">
                    <h3 class="uk-card-title blue">Modifier les informations de <?php echo $modify_member['name']; ?></h3>
                    <div class="">

                        <form method="post" name="add_project" action="admin.php?page=team&itsmodify=true" enctype="multipart/form-data" class="uk-grid-small" uk-grid>

                            <input type="hidden" class="" name="id" placeholder="" value="<?php echo $modify_member['id']; ?>">

                            <div class="uk-width-1-3">
                                <input type="text" class="uk-input" name="name" placeholder="" value="<?php echo $modify_member['name']; ?>" required>
                            </div>

                            <div class="uk-width-1-3">
                                <input type="text" class="uk-input" name="function" placeholder="" value="<?php echo $modify_member['function']; ?>" required>
                            </div>

                            <div class="uk-width-1-1">
                                <textarea class="uk-textarea" id="editor" name="content" placeholder="Description des tâches" cols="3" rows="15" required><?php echo str_replace('<br />', '', $modify_member['content']); ?></textarea>
                                <?php include_once('../templates/admin/editor.php'); ?>
                            </div>

                            <div class="uk-width-1-3">
                                <input type="text" class="uk-input" name="image_name" placeholder="Nom de l'image avec son extension" value="<?php echo $modify_member['image_name']; ?>">
                            </div>

                            <div class="uk-width-1-1">
                                <button class="uk-button uk-button-primary" type="submit">Enregistrer</button>
                                <a href="admin.php?page=team" class="uk-link-text uk-margin-left">Annuler</a>
                            </div>

                        </form>

                    </div>
                </div>
            <?php
            }
            ?>

        <div class="uk-grid uk-margin-large-top" uk-grid uk-height-match="target: > div > .uk-card">
            <?php
            // Team displaying
            foreach($team as $member)
            {
                ?>
                <div class="uk-width-1-2">

                    <div class="uk-display-block uk-transition-toggle uk-border-circle uk-overflow-hidden avatar">
                        <img src="./img/partners/<?php echo $member['image_name']; ?>" class="uk-transition-scale-up uk-transition-opaque" alt="<?php echo $member['name']; ?>" />
                    </div>
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium uk-box-shadow-hover-xlarge uk-text-center team">

                        <div class="team-title uk-margin-medium-bottom">
                            <h3 class="uk-card-title uk-margin-remove-bottom uk-text-center"><?php echo $member['name']; ?></h3>
                            <p class="uk-text-small uk-margin-remove-top"><?php echo $member['function']; ?></p>
                        </div>

                        <div class="uk-text-justify"><?php echo $member['content']; ?></div>

                        <div class="uk-card-footer">
                            <a href="admin.php?page=team&modify=<?php echo $member['id']; ?>" class="uk-button uk-button-primary uk-margin-small-left">Modifier</a>
                        </div>
                    </div>

                </div>
                <?php
            }
            ?>
        </div>

    </div>

</div>
