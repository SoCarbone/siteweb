<?php
function get_posts($offset, $limit)
{
    global $bdd;
    $offset = (int) $offset;
    $limit = (int) $limit;

    $query_posts = $bdd->prepare('SELECT id, title, content, DATE_FORMAT(post_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_billet_fr, image_name FROM news ORDER BY post_date DESC LIMIT :offset, :limit');
    $query_posts->bindParam(':offset', $offset, PDO::PARAM_INT);
    $query_posts->bindParam(':limit', $limit, PDO::PARAM_INT);
    $query_posts->execute();
    $posts = $query_posts->fetchAll();

    return $posts;
}

function get_posts_total()
{
    global $bdd;

    // Get the count total of posts
    $get_posts_total = $bdd->query('SELECT COUNT(*) AS nb_posts FROM news');

    return $get_posts_total;
}

function getPost($post_id)
{
    global $bdd;
    $post_id = (int) $post_id;

    // Get the count total of posts
    $get_post = $bdd->prepare('SELECT id, title, content, DATE_FORMAT(post_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_billet_fr FROM news WHERE id=:post_id');
    $get_post->bindParam(':post_id', $post_id, PDO::PARAM_INT);
    $get_post->execute();
    $post = $get_post->fetch();

    return $post;
}

function get_comments($id_post, $offset, $limit)
{
    global $bdd;
    $offset = (int) $offset;
    $limit = (int) $limit;
    $id_post = (int) $id_post;

    $query_comments = $bdd->prepare('SELECT id_billet, auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh %imin %ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet=:id_post ORDER BY date_commentaire DESC LIMIT :offset, :limit');
    $query_comments->bindParam(':offset', $offset, PDO::PARAM_INT);
    $query_comments->bindParam(':limit', $limit, PDO::PARAM_INT);
    $query_comments->bindParam(':id_post', $id_post, PDO::PARAM_INT);
    $query_comments->execute();
    $comments = $query_comments->fetchAll();

    return $comments;
}

function updatePost($id, $title, $content, $image_name)
{

    global $bdd;
    $update_post = $bdd->prepare('UPDATE news SET title=:title, content=:content, image_name=:image_name WHERE id=:id');
    $update_post->bindParam(':id', $id, PDO::PARAM_INT);
    $update_post->bindParam(':title', $title, PDO::PARAM_STR);
    $update_post->bindParam(':content', $content, PDO::PARAM_STR);
    $update_post->bindParam(':image_name', $image_name, PDO::PARAM_STR);
    $update_post->execute();
}

function addPost($title, $content, $image_name)
{
    $title = htmlspecialchars($title);
    $content = htmlspecialchars($content);
    $image_name = htmlspecialchars($image_name);

    global $bdd;
    $add_post = $bdd->prepare('INSERT INTO portfolio(title, content, post_date, image_name) VALUES (:title, :content, now(), :image_name)');
    $add_post->bindParam(':title', $title, PDO::PARAM_STR);
    $add_post->bindParam(':content', $content, PDO::PARAM_STR);
    $add_post->bindParam(':image_name', $image_name, PDO::PARAM_STR);
    $add_post->execute();
}
