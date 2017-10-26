<?php

if(isset($_GET['modify']))
{
    $modify_member = getMember($_GET['modify']);
}

if(isset($_GET['itsmodify']) AND $_GET['itsmodify'] == true)
{
    updateMember($_POST['id'], $_POST['content'], $_POST['name'], $_POST['function'], $_POST['image_name']);
}

$team = getTeam();

foreach($team as $key => $member)
{

}

