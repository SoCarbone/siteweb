<?php
if(isset($_FILES['image']))
{

}

if(isset($_GET['add']) AND $_GET['add'] == true)
{
    if(isset($_FILES['image']) AND $_FILES['image']['error'] == 0)
    {
        if ($_FILES['image']['size'] <= 5242880)
        {
            $image_name = $_FILES['image']['name'];
            makeImage($image_name);
            echo '<div class="alert alert-success" role="alert">L\'image <strong>' . $image_name . '</strong> a bien été ajoutée.</div>';
        }
        else{
            echo '<div class="alert alert-danger" role="alert">Attention ! Votre image dépasse les 5Mo</div>';
            $image_name = $_POST['image_name'];
        }
    }
    else
    {
        echo '<div class="alert alert-danger" role="alert">Oups ! Il y a eu une erreur lors du téléchargement. Erreur n°' . $_FILES['image']['error'] . '</div>';
        $image_name = $_POST['image_name'];
    }

    addItem($_POST['title'], $_POST['description'], $_POST['method'], $image_name, $_POST['video']);
}

if(isset($_GET['modify']))
{
    $modify_item = getItem($_GET['modify']);
}

if(isset($_GET['itsmodify']) AND $_GET['itsmodify'] == true)
{
    /*if(isset($_FILES['image']) AND $_FILES['image']['error'] == 0)
    {
        if ($_FILES['image']['size'] <= 5242880)
        {
            $image_name = $_FILES['image']['name'];
            makeImage($image_name);
            echo '<div class="alert alert-success" role="alert">L\'image <strong>' . $image_name . '</strong> a bien été ajoutée.</div>';
        }
        else{
            echo '<div class="alert alert-danger" role="alert">Attention ! Votre image dépasse les 5Mo</div>';
            $image_name = $_FILES['image']['name'];
        }
    }
    else
    {
        $image_name = $_POST['image_name'];
        echo '<div class="alert alert-danger" role="alert">Oups ! Il y a eu une erreur lors du téléchargement. Erreur n°' . $_FILES['image']['error'] . '</div>';
    }

    updateItem($_POST['id'], $_POST['title'], $_POST['description'], $_POST['method'], $image_name, $_POST['video']);*/

    updateItem($_POST['id'], $_POST['title'], $_POST['description'], $_POST['method'], $_POST['image_name'], $_POST['video']);
}

if(isset($_GET['delete']))
{
    deleteItem($_GET['delete']);
}

$items = getItems();

foreach($items as $key => $item)
{
    $items[$key]['id'] = $item['id'];
    $items[$key]['title'] = $item['title'];
    $items[$key]['description'] = $item['description'];
    $items[$key]['method'] = $item['method'];
    $items[$key]['image_name'] = $item['image_name'];
}

