<?php
date_default_timezone_set('Europe/Paris');
session_start();

$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];

include_once('../config/config.php');
include_once('../model/db_connection.php');

/*date_default_timezone_set('Europe/Paris');
$today = date("Y-m-d H:i:s");
if(strtotime($today) < strtotime($start_date))
{
    $_SESSION['page'] = 'teaser';
}
elseif(strtotime($today) > strtotime($end_date))
{
    $_SESSION['page'] = 'finished';
}*/
