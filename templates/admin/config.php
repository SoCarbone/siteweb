<div class="uk-section">

    <div class="uk-container">

        <h2 class="text-center">Configuration</h2>

        <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium uk-box-shadow-hover-xlarge">

            <form method="post" name="add_project" action="admin.php?page=config" enctype="multipart/form-data" class="uk-grid-small" uk-grid>

                <?php if(isset($final_message)) { echo $final_message; } ?>

                <!--<legend class="uk-legend">Maintenance</legend>

                <div class="uk-width-1-1">
                    <select class="uk-select" name="maintenance">
                        <option value="false">Off</option>
                        <option value="true">On</option>
                    </select>
                </div>-->

                <legend class="uk-legend">Infos par défaut des pages</legend>

                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="default_title">Title</label>
                    <div class="uk-form-controls">
                        <input type="text" class="uk-input" name="default_title" id="default_title" placeholder="" value="<?php echo $config['default_title']; ?>" required>
                    </div>
                </div>

                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="default_description">Description</label>
                    <div class="uk-form-controls">
                        <input type="text" class="uk-input" name="default_description" id="default_description" placeholder="" value="<?php echo $config['default_description']; ?>" required>
                    </div>
                </div>

                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="default_keywords">Keywords</label>
                    <div class="uk-form-controls">
                        <input type="text" class="uk-input" name="default_keywords" id="default_keywords" placeholder="" value="<?php echo $config['default_keywords']; ?>" required>
                    </div>
                </div>

                <legend class="uk-legend uk-margin-large-top">Infos de la page Services</legend>

                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="services_title">Title</label>
                    <div class="uk-form-controls">
                        <input type="text" class="uk-input" name="services_title" id="services_title" placeholder="" value="<?php echo $config['services_title']; ?>" required>
                    </div>
                </div>

                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="services_description">Description</label>
                    <div class="uk-form-controls">
                        <input type="text" class="uk-input" name="services_description" id="services_description" placeholder="" value="<?php echo $config['services_description']; ?>" required>
                    </div>
                </div>

                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="services_keywords">Keywords</label>
                    <div class="uk-form-controls">
                        <input type="text" class="uk-input" name="services_keywords" id="services_keywords" placeholder="" value="<?php echo $config['services_keywords']; ?>" required>
                    </div>
                </div>

                <legend class="uk-legend uk-margin-large-top">Infos de la page Portfolio</legend>

                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="portfolio_title">Title</label>
                    <div class="uk-form-controls">
                        <input type="text" class="uk-input" name="portfolio_title" id="portfolio_title" placeholder="" value="<?php echo $config['portfolio_title']; ?>" required>
                    </div>
                </div>

                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="portfolio_description">Description</label>
                    <div class="uk-form-controls">
                        <input type="text" class="uk-input" name="portfolio_description" id="portfolio_description" placeholder="" value="<?php echo $config['portfolio_description']; ?>" required>
                    </div>
                </div>

                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="portfolio_keywords">Keywords</label>
                    <div class="uk-form-controls">
                        <input type="text" class="uk-input" name="portfolio_keywords" id="portfolio_keywords" placeholder="" value="<?php echo $config['portfolio_keywords']; ?>" required>
                    </div>
                </div>

                <legend class="uk-legend uk-margin-large-top">Infos de la page Contact</legend>

                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="contact_title">Title</label>
                    <div class="uk-form-controls">
                        <input type="text" class="uk-input" name="contact_title" id="contact_title" placeholder="" value="<?php echo $config['contact_title']; ?>" required>
                    </div>
                </div>

                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="contact_description">Description</label>
                    <div class="uk-form-controls">
                        <input type="text" class="uk-input" name="contact_description" id="contact_description" placeholder="" value="<?php echo $config['contact_description']; ?>" required>
                    </div>
                </div>

                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="contact_keywords">Keywords</label>
                    <div class="uk-form-controls">
                        <input type="text" class="uk-input" name="contact_keywords" id="contact_keywords" placeholder="" value="<?php echo $config['contact_keywords']; ?>" required>
                    </div>
                </div>

                <legend class="uk-legend uk-margin-large-top">Texte du footer</legend>

                <div class="uk-width-1-1">
                    <textarea class="uk-textarea" name="footer" placeholder="" cols="3" rows="5" required><?php echo $config['footer']; ?></textarea>
                </div>

                <div class="uk-width-1-1">
                    <button class="uk-button uk-button-primary" type="submit">Enregistrer</button>
                </div>

            </form>

        </div>

    </div>

</div>
