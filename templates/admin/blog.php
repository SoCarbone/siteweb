<div class="container-fluid" id="section">

    <h2 class="text-center">Gestion du blog</h2>

    <div class="row mb-3">

        <div class="card w-100">

            <?php
            if(isset($_GET['modify']))
            {
                ?>
                <div class="card-header">
                    <h3 class="text-center">Modifier <?php echo $modify_post['title']; ?></h3>
                </div>
                <div class="card-body">

                    <form method="post" name="add_project" action="admin.php?page=blog&itsmodify=true" class="" >

                        <div class="form-row">
                            <div class="form-group col-sm-1">
                                <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" name="id" placeholder="" value="<?php echo $modify_post['id']; ?>" readonly>
                            </div>
                            <div class="form-group col-sm-3">
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="title" placeholder="" value="<?php echo $modify_post['title']; ?>" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="image_name" placeholder="" value="<?php if(isset($modify_post['image_name'])) {echo $modify_post['image_name'];} ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="content" placeholder="" cols="3" required><?php echo $modify_post['content']; ?></textarea>
                        </div>

                        <button class="btn btn-dark mb-2 mr-sm-2 mb-sm-0" type="submit">Enregistrer</button>
                        <a href="admin.php?page=blog" class="btn btn-light mb-2 mr-sm-2 mb-sm-0">Annuler</a>

                    </form>

                </div>
            <?php
            }

            else
            {
            ?>

            <div class="card-header">
                <h3 class="text-center">Ajouter une actualité</h3>
            </div>
            <div class="card-body">

                <form method="post" name="add_project" action="admin.php?page=blog&add=true" class="" >

                    <div class="form-row">
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="title" placeholder="Titre" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="image_name" placeholder="Le nom de l'image (avec extension)">
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="content" placeholder="Texte" cols="3" required></textarea>
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
        foreach($posts as $post)
        {
            ?>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="<?php echo $site_url . 'img/blog/' . $post['image_name']; ?>" alt="<?php echo $post['image_name']; ?>">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo $post['title']; ?>
                        </h4>
                        <p class="card-text">
                            <?php echo $post['content']; ?>
                        </p>
                    </div>
                    <div class="card-body">
                        <a href="admin.php?page=blog&modify=<?php echo $post['id']; ?>" class="btn btn-dark">Modifier</a>
                        <a href="admin.php?page=blog&delete=<?php echo $post['id']; ?>" class="btn btn-danger">Supprimer</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

</div>
