<?php
$items = getItems();

foreach($items as $key => $item)
{
    $items[$key]['id'] = $item['id'];
    $items[$key]['title'] = $item['title'];
    $items[$key]['description'] = $item['description'];
    $items[$key]['method'] = $item['method'];
    $items[$key]['image_name'] = $item['image_name'];
    $items[$key]['video'] = $item['video'];
}

