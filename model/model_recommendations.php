<?php


function getItems()
{
    global $bdd;
    $get_items = $bdd->prepare('SELECT * FROM recommendations ORDER BY id DESC');
    $get_items->execute();

    return $get_items->fetchAll();
}

function getItem($id)
{
    global $bdd;
    $get_item = $bdd->prepare('SELECT * FROM recommendations WHERE id=:id');
    $get_item->bindParam(':id', $id, PDO::PARAM_INT);
    $get_item->execute();
    $modify_item = $get_item->fetch();

    return $modify_item;
}

function updateItem($id, $content, $name, $function, $image_name)
{
    /*$content = nl2br(htmlspecialchars($content));*/
    $name = htmlspecialchars($name);
    $function = htmlspecialchars($function);
    $image_name = htmlspecialchars($image_name);

    global $bdd;
    $update_item = $bdd->prepare('UPDATE recommendations SET content=:content, name=:name, function=:function, image_name=:image_name WHERE id=:id');
    $update_item->bindParam(':id', $id, PDO::PARAM_INT);
    $update_item->bindParam(':content', $content, PDO::PARAM_STR);
    $update_item->bindParam(':name', $name, PDO::PARAM_STR);
    $update_item->bindParam(':function', $function, PDO::PARAM_STR);
    $update_item->bindParam(':image_name', $image_name, PDO::PARAM_STR);
    $update_item->execute();
}

function addItem($content, $name, $function, $image_name)
{
    /*$content = nl2br(htmlspecialchars($content));*/
    $name = htmlspecialchars($name);
    $function = htmlspecialchars($function);
    $image_name = htmlspecialchars($image_name);

    global $bdd;
    $add_item = $bdd->prepare('INSERT INTO recommendations(content, name, function, image_name) VALUES (:content, :name, :function, :image_name)');
    $add_item->bindParam(':content', $content, PDO::PARAM_STR);
    $add_item->bindParam(':name', $name, PDO::PARAM_STR);
    $add_item->bindParam(':function', $function, PDO::PARAM_STR);
    $add_item->bindParam(':image_name', $image_name, PDO::PARAM_STR);
    $add_item->execute();
}

function deleteItem($id)
{
    global $bdd;
    $delete_item = $bdd->prepare('DELETE FROM recommendations WHERE id=:id');
    $delete_item->bindParam(':id', $id, PDO::PARAM_INT);
    $delete_item->execute();
}

function makeImage($image_name)
{
    //On vérifie le format de l'image
    $files_data = pathinfo($_FILES['image']['name']);
    $extension = $files_data['extension'];
    $authorized_extensions = array('jpg', 'jpeg', 'png');

    if (in_array($extension, $authorized_extensions))
    {
        move_uploaded_file($_FILES['image']['tmp_name'], './img/clients/' . basename($_FILES['image']['name']));
    }
}
