<?php
include_once('../templates/pre_header.php');
include_once('../templates/header.php');
include_once('../templates/admin/navbar.php');

if (isset($_GET['page']))
{
    $model = '../model/model_' . $_GET['page'] . '.php';
    $controler = '../controler/admin_controler_' . $_GET['page'] . '.php';
    $page = '../templates/admin/' . $_GET['page'] . '.php';
    $page404 = '../templates/pages/404.php';
    if(file_exists($model)){include_once ($model);}
    if(file_exists($controler)){include_once ($controler);}
    if(file_exists($page)){include_once ($page);} else {include_once($page404);}
}
else
{
    if(file_exists('../model/model_dashboard.php')){include_once ('../model/model_dashboard.php');}
    if(file_exists('../controler/admin_controler_dashboard.php')){include_once ('../controler/admin_controler_dashboard.php');}
    include_once('../templates/admin/dashboard.php');
}

include_once('../templates/admin/footer.php');
