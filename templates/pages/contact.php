<div class="container-fluid pt-5 pb-5" id="breadcrumb">

    <div class="container pt-4 pb-4">

        <h1 class="text-center display-4" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:'500'}">Contactez moi !</h1>

    </div>

</div>

<div class="container-fluid">

    <div class="container content">

        <div class="row">

            <div class="col-sm-12 col-md-6" data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:'500'}">

                <h2 class="mb-3">Par mail</h2>
                <div class="card">

                    <form id="contact" method="post" action="contact.html">

                        <?php if(isset($final_message)) { echo $final_message; } ?>

                        <fieldset data-uk-margin>
                            <div class="form-group">
                                <label for="lastname">Votre nom*</label>
                                <input type="text" class="form-control" id="lastname" aria-describedby="lastname" name="lastname" placeholder="Entrez votre nom" value="<?php echo stripslashes($lastname) ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="firstname">Votre prénom*</label>
                                <input type="text" class="form-control" id="firstname" aria-describedby="firstname" name="firstname" placeholder="Entrez votre prénom" value="<?php echo stripslashes($firstname) ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="company">Votre société*</label>
                                <input type="text" class="form-control" id="company" aria-describedby="company" name="company" placeholder="Entrez le nom de votre société" value="<?php echo stripslashes($company) ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="function">Votre fonction</label>
                                <input type="text" class="form-control" id="function" aria-describedby="function" name="function" placeholder="Entrez votre fonction" value="<?php echo stripslashes($function) ?>">
                            </div>
                            <div class="form-group">
                                <label for="phone">Votre téléphone</label>
                                <input type="phone" class="form-control" id="phone" aria-describedby="phone" name="phone" placeholder="Entrez votre téléphone" value="<?php echo stripslashes($phone) ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Votre email*</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email" name="email" placeholder="Entrez votre email" value="<?php echo stripslashes($email) ?>" required>
                            </div>
                            <div class="form-group mb-0">
                                <label for="content">Votre demande*</label>
                                <textarea class="form-control" placeholder="Entrez votre message" id="content" name="content" value="" tabindex="4" required><?php echo stripslashes($content) ?></textarea>
                            </div>
                            <small>*Champ obligatoire</small>

                        </fieldset>

                        <div class="g-recaptcha" data-sitekey="<?php echo $public_key; ?>"></div>

                        <div class="form-group">
                            <button type="submit" name="envoi" class="btn btn-primary">Envoyer le formulaire !</button>
                        </div>

                    </form>

                </div>

            </div>

            <div class="col-sm-12 col-md-6" data-uk-scrollspy="{cls:'uk-animation-slide-right', delay:'500'}">

                <h2 class="mb-3">Par téléphone</h2>

                <div class="row">

                    <div class="col-sm-6 col-md-12 mb-4">

                        <div class="card contact">
                            <div class="card-body name">
                                <p class="card-text">Contact Avignon et sud-est</p>
                                <h4 class="card-title blue">Alexis COLOMBO</h4>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">06 02 71 11 50</li>
                            </ul>
                            <div class="card-body">
                                <a href="https://www.linkedin.com/in/alexiscolombo/" target="_blank" class="btn btn-primary rounded-circle btn-social" data-toggle="tooltip" data-placement="right" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="https://www.facebook.com/colomboalexis" target="_blank" class="btn btn-primary rounded-circle btn-social" data-toggle="tooltip" data-placement="right" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </div>
                        </div>

                    </div>

                    <!--<div class="col-sm-6 col-md-12">

                        <div class="card contact">
                            <div class="card-body name">
                                <p class="card-text">Contact Bordeaux et sud-ouest</p>
                                <h4 class="card-title blue">Laëtitia DOENS</h4>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">06 00 00 00 00</li>
                            </ul>
                            <div class="card-body">
                                <a href="https://www.linkedin.com/in/laetitia-doens-16a97066/" target="_blank" class="btn btn-primary rounded-circle btn-social" data-toggle="tooltip" data-placement="right" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>

                    </div>-->

                </div>

                <!--<p>Réservez moi sur <a href="https://www.hopwork.fr/profile/alexiscolombo" target="_blank">Hopwork</a> ou sur <a href="https://www.404works.com/profil/alexisc" target="_blank">404Works</a> !</p>-->

                <!--<img src="./img/crasy-work.png" alt="Graphiste POLYMORPHE freelance" class="uk-align-center uk-margin-large-top" />-->

            </div>

        </div>

    </div>

</div>

<!--<div class="container-fluid up" id="wide">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2865.6826096431664!2d4.889341208297174!3d44.08990522410721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b591de95745d75%3A0x9a35a4be098866fc!2s101+Route+de+Beauregard%2C+84350+Courth%C3%A9zon!5e0!3m2!1sfr!2sfr!4v1489504536640" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>-->
