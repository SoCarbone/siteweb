<?php

$items = getItems();

foreach($items as $key => $item)
{
    $items[$key]['id'] = $item['id'];
    $items[$key]['description'] = $item['description'];
    $items[$key]['title'] = $item['title'];
    $items[$key]['image_name'] = $item['image_name'];
}

