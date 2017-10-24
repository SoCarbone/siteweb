<div class="uk-section breadcrumb" uk-scrollspy="cls:uk-animation-slide-bottom">

    <div class="uk-container">

        <h1 class="uk-text-center uk-lead">Un projet ? Contactez-nous et faisons connaissance !</h1>

    </div>

</div>

<div class="uk-section">

    <div class="uk-container">

        <div class="uk-grid" uk-grid>

            <div class="uk-width-1-1 uk-width-1-2@m" uk-scrollspy="cls:uk-animation-slide-left">

                <h2 class="">Par mail</h2>
                <div class="uk-card uk-card-default uk-card-body">

                    <form id="contact" method="post" action="contact.html" class="uk-form-stacked">

                        <?php if(isset($final_message)) { echo $final_message; } ?>


                            <div class="uk-margin">
                                <label class="uk-form-label" for="lastname">Votre nom*</label>
                                <div class="uk-form-controls">
                                    <input type="text" class="uk-input" id="lastname" aria-describedby="lastname" name="lastname" placeholder="Entrez votre nom" value="<?php echo stripslashes($lastname) ?>" required>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label" for="firstname">Votre prénom*</label>
                                    <input type="text" class="uk-input" id="firstname" aria-describedby="firstname" name="firstname" placeholder="Entrez votre prénom" value="<?php echo stripslashes($firstname) ?>" required>
                            </div>
                            <div class="uk-margin">
                                <label for="company">Votre société*</label>
                                <div class="uk-form-controls">
                                    <input type="text" class="uk-input" id="company" aria-describedby="company" name="company" placeholder="Entrez le nom de votre société" value="<?php echo stripslashes($company) ?>" required>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label" for="function">Votre fonction</label>
                                <div class="uk-form-controls">
                                    <input type="text" class="uk-input" id="function" aria-describedby="function" name="function" placeholder="Entrez votre fonction" value="<?php echo stripslashes($function) ?>">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label" for="phone">Votre téléphone</label>
                                <div class="uk-form-controls">
                                    <input type="tel" class="uk-input" id="phone" aria-describedby="phone" name="phone" maxlength="10" placeholder="Entrez votre téléphone" value="<?php echo stripslashes($phone) ?>">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label" for="email">Votre email*</label>
                                <div class="uk-form-controls">
                                    <input type="email" class="uk-input" id="email" aria-describedby="email" name="email" placeholder="Entrez votre email" value="<?php echo stripslashes($email) ?>" required>
                                </div>
                            </div>
                            <div class="uk-margin uk-margin-remove-bottom">
                                <label class="uk-form-label" for="content">Votre demande*</label>
                                <div class="uk-form-controls">
                                    <textarea class="uk-textarea" placeholder="Entrez votre message" id="content" name="content" value="" rows="5" required><?php echo stripslashes($content) ?></textarea>
                                </div>
                            </div>
                            <p class="uk-text-small uk-margin-remove-top">*Champ obligatoire</p>

                        <div class="g-recaptcha" data-sitekey="<?php echo $public_key; ?>"></div>

                        <div class="uk-form-controls">
                            <button type="submit" name="envoi" class="uk-button uk-button-primary">Envoyer le formulaire !</button>
                        </div>

                    </form>

                </div>

            </div>

            <div class="uk-width-1-1 uk-width-1-2@m" uk-scrollspy="cls:uk-animation-slide-right">

                <h2 class="">Par téléphone</h2>

                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="uk-card-title uk-heading-divider blue uk-margin-remove-bottom">Alexis COLOMBO</h3>
                    <p class="uk-margin-remove-top">Contact Avignon et sud-est</p>

                    <p class=""><span uk-icon="icon: phone"></span> +33 (0)6 02 71 11 50</p>

                    <div class="">
                        <a href="https://www.linkedin.com/in/alexiscolombo/" class="uk-icon-button  uk-margin-small-right" uk-icon="icon: linkedin"></a>
                        <a href="https://www.facebook.com/colomboalexis" class="uk-icon-button  uk-margin-small-right" uk-icon="icon: facebook"></a>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-card-body uk-margin-top">
                    <h3 class="uk-card-title uk-heading-divider blue uk-margin-remove-bottom">Laëtitia DOENS</h3>
                    <p class="uk-margin-remove-top">Contact Bordeaux et sud-ouest</p>

                    <p class=""><span uk-icon="icon: phone"></span> +33 (0)6 21 90 42 73</p>

                    <div class="">
                        <a href="https://www.linkedin.com/in/laetitia-doens-16a97066/" class="uk-icon-button  uk-margin-small-right" uk-icon="icon: linkedin"></a>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<!--<div class="container-fluid up" id="wide">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2865.6826096431664!2d4.889341208297174!3d44.08990522410721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b591de95745d75%3A0x9a35a4be098866fc!2s101+Route+de+Beauregard%2C+84350+Courth%C3%A9zon!5e0!3m2!1sfr!2sfr!4v1489504536640" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>-->
