<?php
$prod = false;

if($prod == false) {
    // My LOCAL database data
    $db_name = 'alexiscolombo';
    $hostname = 'localhost';
    $id = 'root';
    $pass = '';
}
else {
    // My PROD database data
    $db_name = 'carbonecnm4l3x1s';
    $hostname = 'carbonecnm4l3x1s.mysql.db';
    $id = 'carbonecnm4l3x1s';
    $pass = 'BebetaPoil42';
}

include_once('../model/db_connection.php');
include_once('../model/model_config.php');
$the_config = getConfig();

foreach($the_config as $key => $config)
{

}

$maintenance = $config['maintenance'];
//$ip_alexis = '127.0.0.1'; //Ip local
$ip_alexis = '92.90.20.188';
$ip_laetitia = '78.126.65.76';

// ReCaptcha
$public_key = '6LfJIzQUAAAAAHZbS7nZYxbrMRDn43guWdRov4lv';
$secret = "6LfJIzQUAAAAAMdK-v3AuzIM9UYkiHge7k5KXtBO";

$author = 'Alexis Colombo et Laëtitia Doens - Créateurs digital - www.alexiscolombo.fr';
//$site_url = 'http://localhost/alexiscolombo/www/';
$site_url = 'http://www.alexiscolombo.fr';

// Données SEO des pages. Ne mettre que les données spécifiques, les pages sans importance prendront $site_title ou $description_title
$site_title = array (
    "default" => $config['default_title'],
    "services" => $config['services_title'],
    "portfolio" => $config['portfolio_title'],
    "contact" => $config['contact_title']
);

$site_description = array (
    "default" => $config['default_description'],
    "services" => $config['services_description'],
    "portfolio" => $config['portfolio_description'],
    "contact" => $config['contact_description']
);

$site_keywords = array (
    "default" => $config['default_keywords'],
    "services" => $config['services_keywords'],
    "portfolio" => $config['portfolio_keywords'],
    "contact" => $config['contact_keywords']
);
