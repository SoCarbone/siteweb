<?php
if(isset($_GET['add']) AND $_GET['add'] == true)
{
    addItem($_POST['description'], $_POST['title']);
}

if(isset($_GET['modify']))
{
    $modify_secret = getItem($_GET['modify']);
}

if(isset($_GET['itsmodify']) AND $_GET['itsmodify'] == true)
{
    updateSecret($_POST['id'], $_POST['description'], $_POST['title']);
}

if(isset($_GET['delete']))
{
    deleteSecret($_GET['delete']);
}

$secrets = getSecrets();

foreach($secrets as $key => $secret)
{
    $secrets[$key]['id'] = $secret['id'];
    $secrets[$key]['description'] = $secret['description'];
    $secrets[$key]['title'] = $secret['title'];
}

