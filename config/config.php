<?php
$prod = 'true';
$maintenance = false;
//$ip = '127.0.0.1'; //Ip local
$ip_alexis = '2a01:cb1c:129:2f00:5d6d:c2f2:efdc:8efb'; //IP Courthézon
$ip_laetitia = '';

// ReCaptcha
$public_key = '6LfJIzQUAAAAAHZbS7nZYxbrMRDn43guWdRov4lv';
$secret = "6LfJIzQUAAAAAMdK-v3AuzIM9UYkiHge7k5KXtBO";

if($prod == 'false') {
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
/*include_once('../model/model_config.php');
$the_config = getConfig();

foreach($the_config as $key => $config)
{

}*/

$author = 'Alexis Colombo et Laëtitia Doens - Créateurs digital - www.alexiscolombo.fr';
//$site_url = 'http://localhost/alexiscolombo/www/';
$site_url = 'http://www.alexiscolombo.fr';

// Données SEO des pages. Ne mettre que les données spécifiques, les pages sans importance prendront $site_title ou $description_title
$site_title = array (
    "default" => 'Alexis et Laëtitia - Création digital à Bordeaux et Avignon',
    "services" => 'Création de projets digitaux',
    "portfolio" => 'Nos réalisations digitales',
    "contact" => 'Contactez-nous pour faire un devis'
);

$site_description = array (
    "default" => 'Créateurs de site web et de contenus digital à Bordeaux et Avignon',
    /*"portfolio" => 'Une agence de communication doit savoir s’entourer de spécialistes tel qu\'un Créateur NUM&Eacute;RIQUE freelance.'*/
);

$site_keywords = array (
    "default" => 'marketing, gestiopn de projet, siteweb, jeux marketing, gameplay, wordpress, woocommerce, baniières promotionnelles, mailing, newsletter, mascotte, logo, graphiste, graphiste freelance, freelance, agence de communication, graphisme, illustration, motion-design, webdesign, sites, vidéos, intégration, développement, HTML, CSS, PHP',
);
