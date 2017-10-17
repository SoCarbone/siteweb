<?php

function countProjects()
{
    global $bdd;

    $get_items_total = $bdd->query('SELECT COUNT(*) AS nb_item FROM portfolio');
    $get_items_total->execute();
    $items_total = $get_items_total->fetchColumn();

    return $items_total;
}

function countPosts()
{
    global $bdd;

    $get_posts_total = $bdd->query('SELECT COUNT(*) AS nb_posts FROM news');
    $get_posts_total->execute();
    $posts_total = $get_posts_total->fetchColumn();

    return $posts_total;
}

function countVisitors()
{
    global $bdd;

    $get_visitors_total = $bdd->query('SELECT COUNT(*) AS visitors FROM visitors');
    $get_visitors_total->execute();
    $visitors_total = $get_visitors_total->fetchColumn();

    return $visitors_total;
}

function listScreens()
{
    global $bdd;

    $get_unique_screens = $bdd->query('SELECT DISTINCT screen FROM visitors');
    $get_unique_screens->execute();
    $screens_list = $get_unique_screens->fetchAll();

    $values_list = array();
    $index = 0;
    foreach($screens_list as $value1)
    {
        foreach($value1 as $value2)
        {
            $values_list[$index] = $value2;
            $index++;
        }
    };


    return $values_list;
}
