<?php

$max_limit = 10;
$min_limit = 0;

// Get the 5 posts of the page (model)
$posts = get_posts($min_limit, $max_limit);

// Posts displaying
foreach($posts as $key => $post)
{
    $posts[$key]['title'] = htmlspecialchars(utf8_encode($post['title']));
    $posts[$key]['content'] = nl2br(htmlspecialchars(utf8_encode($post['content'])));
}
