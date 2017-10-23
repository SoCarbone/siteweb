<?php
//Récupération des données visiteurs

if(checkIp($ip) == true){
    addVisitor($ip, $browser);
}
else
{
    updateVisitor($ip, $browser);
}

$team = getTeam();

foreach($team as $key => $member)
{
    $team[$key]['id'] = $member['id'];
    $team[$key]['content'] = $member['content'];
    $team[$key]['name'] = $member['name'];
    $team[$key]['function'] = $member['function'];
    $team[$key]['image_name'] = $member['image_name'];
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

$secrets = getSecrets();

foreach($secrets as $key => $secret)
{
    $secrets[$key]['id'] = $secret['id'];
    $secrets[$key]['description'] = $secret['description'];
    $secrets[$key]['title'] = $secret['title'];
}
