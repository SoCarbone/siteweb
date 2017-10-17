<?php
include_once('../templates/pre_header.php');

if ($_SERVER['REMOTE_ADDR'] != $ip AND $maintenance == true){
    header("HTTP/1.0 302 Temporary redirect");
    header('Location : /maintenance.php');
}
else
{
    include_once('../templates/header.php');

    if (isset($_GET['page']))
    {
        $model = '../model/model_' . $_GET['page'] . '.php';
        $controler = '../controler/controler_' . $_GET['page'] . '.php';
        $page = '../templates/pages/' . $_GET['page'] . '.php';
        $page404 = '../templates/pages/404.php';
        if(file_exists($model)){include_once ($model);}
        if(file_exists($controler)){include_once ($controler);}
        if(file_exists($page)){include_once ($page);} else {include_once($page404);}
    }
    else
    {
        if(file_exists('../model/model_home.php')){include_once ('../model/model_home.php');}
        if(file_exists('../controler/controler_home.php')){include_once ('../controler/controler_home.php');}
        include_once('../templates/pages/home.php');
    }

    include_once('../templates/footer.php');
}
