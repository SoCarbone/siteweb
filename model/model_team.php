<?php


function getTeam()
{
    global $bdd;
    $get_team = $bdd->prepare('SELECT * FROM team ORDER BY id DESC');
    $get_team->execute();

    return $get_team->fetchAll();
}

function getMember($id)
{
    global $bdd;
    $get_member = $bdd->prepare('SELECT * FROM team WHERE id=:id');
    $get_member->bindParam(':id', $id, PDO::PARAM_INT);
    $get_member->execute();
    $modify_member = $get_member->fetch();

    return $modify_member;
}

function updateMember($id, $content, $name, $function, $image_name)
{
    /*$content = nl2br(htmlspecialchars($content));*/
    $name = htmlspecialchars($name);
    $function = htmlspecialchars($function);
    $image_name = htmlspecialchars($image_name);

    global $bdd;
    $update_item = $bdd->prepare('UPDATE team SET content=:content, name=:name, function=:function, image_name=:image_name WHERE id=:id');
    $update_item->bindParam(':id', $id, PDO::PARAM_INT);
    $update_item->bindParam(':content', $content, PDO::PARAM_STR);
    $update_item->bindParam(':name', $name, PDO::PARAM_STR);
    $update_item->bindParam(':function', $function, PDO::PARAM_STR);
    $update_item->bindParam(':image_name', $image_name, PDO::PARAM_STR);
    $update_item->execute();
}
