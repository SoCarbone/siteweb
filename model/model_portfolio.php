<?php


function getItems()
{
    global $bdd;
    $get_items = $bdd->prepare('SELECT * FROM portfolio ORDER BY id DESC');
    $get_items->execute();

    return $get_items->fetchAll();
}

function getItem($id)
{
    global $bdd;
    $get_item = $bdd->prepare('SELECT * FROM portfolio WHERE id=:id');
    $get_item->bindParam(':id', $id, PDO::PARAM_INT);
    $get_item->execute();
    $modify_item = $get_item->fetch();

    return $modify_item;
}

function updateItem($id, $title, $description, $method, $image_name, $video)
{
    $title = htmlspecialchars($title);
    $description = htmlspecialchars($description);
    $method = htmlspecialchars($method);
    $image_name = htmlspecialchars($image_name);

    global $bdd;
    $update_item = $bdd->prepare('UPDATE portfolio SET title=:title, description=:description, method=:method, image_name=:image_name, video=:video WHERE id=:id');
    $update_item->bindParam(':id', $id, PDO::PARAM_INT);
    $update_item->bindParam(':title', $title, PDO::PARAM_STR);
    $update_item->bindParam(':description', $description, PDO::PARAM_STR);
    $update_item->bindParam(':method', $method, PDO::PARAM_STR);
    $update_item->bindParam(':image_name', $image_name, PDO::PARAM_STR);
    $update_item->bindParam(':video', $video, PDO::PARAM_STR);
    $update_item->execute();
}

function addItem($title, $description, $method, $image_name, $video)
{
    $title = htmlspecialchars($title);
    $description = htmlspecialchars($description);
    $method = htmlspecialchars($method);
    $image_name = htmlspecialchars($image_name);

    global $bdd;
    $add_item = $bdd->prepare('INSERT INTO portfolio(title, description, method, image_name, video) VALUES (:title, :description, :method, :image_name, :video)');
    $add_item->bindParam(':title', $title, PDO::PARAM_STR);
    $add_item->bindParam(':description', $description, PDO::PARAM_STR);
    $add_item->bindParam(':method', $method, PDO::PARAM_STR);
    $add_item->bindParam(':image_name', $image_name, PDO::PARAM_STR);
    $add_item->bindParam(':video', $video, PDO::PARAM_STR);
    $add_item->execute();
}

function deleteItem($id)
{
    global $bdd;
    $delete_item = $bdd->prepare('DELETE FROM portfolio WHERE id=:id');
    $delete_item->bindParam(':id', $id, PDO::PARAM_INT);
    $delete_item->execute();
}

function makeImage($image_name)
{
    //On vérifie le format de l'image
    $files_data = pathinfo($_FILES['image']['name']);
    $extension = $files_data['extension'];
    $authorized_extensions = array('jpg', 'jpeg', 'png');

    //Si l'extension est autorisé on déplace l'image dans le dossier tmp et on construti l'image
    if (in_array($extension, $authorized_extensions))
    {
        move_uploaded_file($_FILES['image']['tmp_name'], './img/portfolio/tmp/' . basename($_FILES['image']['name']));

        //On ajoute le logo sur l'image
        $logo = imagecreatefrompng("./img/brand-image.png");
        if($extension == 'png')
        {
            $image = imagecreatefrompng("./img/portfolio/tmp/$image_name");
        }
        else{
            $image = imagecreatefromjpeg("./img/portfolio/tmp/$image_name");
        }

        $width_logo = imagesx($logo);
        $height_logo = imagesy($logo);
        $width_image = imagesx($image);
        $height_image = imagesy($image);

        $position_x = $width_image - $width_logo - 20;
        $position_y = $height_image - $height_logo - 20;

        imagecopymerge($image, $logo, $position_x, $position_y, 0,0, $width_logo, $height_logo, 60);

        $image_path = 'img/portfolio/' . $image_name;

        //On enregistre l'image dans le bon dossier
        if($extension == 'png')
        {
            imagepng($image, $image_path);
        }
        else{
            imagejpeg($image, $image_path);
        }

        //On vide la mémoire
        imagedestroy($image);

        //On supprime l'image du dossier tmp
        $the_folder = "img/portfolio/tmp";

        $folder = opendir($the_folder); // On définit le répertoire dans lequel on souhaite travailler.

        while (false !== ($file = readdir($folder))) // On lit chaque fichier du répertoire dans la boucle.
        {
            $path = $the_folder."/".$file; // On définit le chemin du fichier à effacer.

            // Si le fichier n'est pas un répertoire…
            if ($file != ".." AND $file != "." AND !is_dir($file))
            {
                unlink($path); // On efface.
            }
        }

        closedir($folder); // Ne pas oublier de fermer le dossier ***EN DEHORS de la boucle*** ! Ce qui évitera à PHP beaucoup de calculs et des problèmes liés à l'ouverture du dossier.
    }
}
