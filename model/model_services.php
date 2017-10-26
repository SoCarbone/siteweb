<?php


function getItems()
{
    global $bdd;
    $get_items = $bdd->prepare('SELECT * FROM services ORDER BY id');
    $get_items->execute();

    return $get_items->fetchAll();
}

function getItem($id)
{
    global $bdd;
    $get_item = $bdd->prepare('SELECT * FROM services WHERE id=:id');
    $get_item->bindParam(':id', $id, PDO::PARAM_INT);
    $get_item->execute();
    $modify_item = $get_item->fetch();

    return $modify_item;
}

function updateItem($id, $description, $title, $image_name)
{
    /*$description = nl2br(htmlspecialchars($description));*/
    $title = htmlspecialchars($title);
    $image_name = htmlspecialchars($image_name);

    global $bdd;
    $update_item = $bdd->prepare('UPDATE services SET description=:description, title=:title, image_name=:image_name WHERE id=:id');
    $update_item->bindParam(':id', $id, PDO::PARAM_INT);
    $update_item->bindParam(':description', $description, PDO::PARAM_STR);
    $update_item->bindParam(':title', $title, PDO::PARAM_STR);
    $update_item->bindParam(':image_name', $image_name, PDO::PARAM_STR);
    $update_item->execute();
}

function addItem($description, $title, $image_name)
{
   /* $description = nl2br(htmlspecialchars($description));*/
    $title = htmlspecialchars($title);
    $image_name = htmlspecialchars($image_name);

    global $bdd;
    $add_item = $bdd->prepare('INSERT INTO services(description, title, image_name) VALUES (:description, :title, :image_name)');
    $add_item->bindParam(':description', $description, PDO::PARAM_STR);
    $add_item->bindParam(':title', $title, PDO::PARAM_STR);
    $add_item->bindParam(':image_name', $image_name, PDO::PARAM_STR);
    $add_item->execute();
}

function deleteItem($id)
{
    global $bdd;
    $delete_item = $bdd->prepare('DELETE FROM services WHERE id=:id');
    $delete_item->bindParam(':id', $id, PDO::PARAM_INT);
    $delete_item->execute();
}
