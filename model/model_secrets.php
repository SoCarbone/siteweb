<?php


function getSecrets()
{
    global $bdd;
    $get_secrets = $bdd->prepare('SELECT * FROM secrets ORDER BY id');
    $get_secrets->execute();

    return $get_secrets->fetchAll();
}

function getSecret($id)
{
    global $bdd;
    $get_secret = $bdd->prepare('SELECT * FROM secrets WHERE id=:id');
    $get_secret->bindParam(':id', $id, PDO::PARAM_INT);
    $get_secret->execute();
    $modify_secret = $get_secret->fetch();

    return $modify_secret;
}

function updateSecret($id, $description, $title)
{
    $description = nl2br(htmlspecialchars($description));
    $title = htmlspecialchars($title);

    global $bdd;
    $update_secret = $bdd->prepare('UPDATE secrets SET description=:description, title=:title WHERE id=:id');
    $update_secret->bindParam(':id', $id, PDO::PARAM_INT);
    $update_secret->bindParam(':description', $description, PDO::PARAM_STR);
    $update_secret->bindParam(':title', $title, PDO::PARAM_STR);
    $update_secret->execute();
}

function addSecret($description, $title)
{
    $description = nl2br(htmlspecialchars($description));
    $title = htmlspecialchars($title);

    global $bdd;
    $add_secret = $bdd->prepare('INSERT INTO secrets(description, title) VALUES (:description, :title)');
    $add_secret->bindParam(':description', $description, PDO::PARAM_STR);
    $add_secret->bindParam(':title', $title, PDO::PARAM_STR);
    $add_secret->execute();
}

function deleteSecret($id)
{
    global $bdd;
    $delete_secret = $bdd->prepare('DELETE FROM secrets WHERE id=:id');
    $delete_secret->bindParam(':id', $id, PDO::PARAM_INT);
    $delete_secret->execute();
}
