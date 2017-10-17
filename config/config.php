<?php
$prod = 'false';
$maintenance = false;
//$ip = '127.0.0.1'; //Ip local
$ip = '2a01:cb1c:129:2f00:5d6d:c2f2:efdc:8efb'; //IP Courthézon

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

$author = 'Alexis Colombo - Créateur NUM&Eacute;RIQUE - www.alexiscolombo.fr';
//$site_url = 'http://localhost/alexiscolombo/www/';
$site_url = 'http://www.alexiscolombo.fr';

// Données SEO des pages. Ne mettre que les données spécifiques, les pages sans importance prendront $site_title ou $description_title
$site_name = 'Alexis Colombo';
$site_title = array (
    "default" => $site_name . ' - Créateur NUM&Eacute;RIQUE à Orange, Avignon et Carpentras',
    "portfolio" => $site_name . ' - Mes travaux de Créateur NUM&Eacute;RIQUE freelance',
    "contact" => $site_name . ' - Contactez un Créateur NUM&Eacute;RIQUE freelance'
);

$site_description = array (
    "default" => 'Je suis un Graphiste Illustrateur, Intégrateur web et Développeur PHP freelance, basé dans le triangle Orange, Avignon, Carpentras.',
    "portfolio" => 'Une agence de communication doit savoir s’entourer de spécialistes tel qu\'un Créateur NUM&Eacute;RIQUE freelance.'
);

$site_keywords = array (
    "default" => 'graphiste, graphiste freelance, freelance, agence de communication, graphisme, illustration, motion-design, webdesign, sites, vidéos, intégration, développement, HTML, CSS, PHP',
);
