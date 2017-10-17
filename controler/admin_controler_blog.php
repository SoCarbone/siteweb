<?php

if(isset($_GET['add']) AND $_GET['add'] == true)
{
    /*if(isset($_POST['video']))
    {
        $video = $_POST['video'];
    }
    else
    {
        $video = null;
    }*/
    addItem($_POST['title'], $_POST['description'], $_POST['method'], $_POST['image_name'], $_POST['video']);
}

if(isset($_GET['modify']))
{
    $modify_post = getPost($_GET['modify']);
}

if(isset($_GET['itsmodify']) AND $_GET['itsmodify'] == true)
{
    updatePost($_POST['id'], $_POST['title'], $_POST['content'], $_POST['image_name']);
}

if(isset($_GET['delete']))
{
    deleteItem($_GET['delete']);
}

$max_limit = 10;
$min_limit = 0;

// Get the 5 posts of the page (model)
$posts = get_posts($min_limit, $max_limit);

// Posts displaying
foreach($posts as $key => $post)
{
    $posts[$key]['title'] = htmlspecialchars($post['title']);
    $posts[$key]['content'] = nl2br(htmlspecialchars($post['content']));
}

