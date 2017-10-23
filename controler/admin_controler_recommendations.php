<?php
if(isset($_FILES['image']))
{

}

if(isset($_GET['add']) AND $_GET['add'] == true)
{
    addItem($_POST['content'], $_POST['name'], $_POST['function'], $_POST['image_name']);
}

if(isset($_GET['modify']))
{
    $modify_item = getItem($_GET['modify']);
}

if(isset($_GET['itsmodify']) AND $_GET['itsmodify'] == true)
{
    updateItem($_POST['id'], $_POST['content'], $_POST['name'], $_POST['function'], $_POST['image_name']);
}

if(isset($_GET['delete']))
{
    deleteItem($_GET['delete']);
}

$items = getItems();

foreach($items as $key => $item)
{
    $items[$key]['id'] = $item['id'];
    $items[$key]['content'] = $item['content'];
    $items[$key]['name'] = $item['name'];
    $items[$key]['function'] = $item['function'];
    $items[$key]['image_name'] = $item['image_name'];
}

