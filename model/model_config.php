<?php
function getConfig()
{
    global $bdd;
    $the_config = $bdd->prepare('SELECT * FROM config');
    $the_config->execute();

    return $the_config->fetchAll();
}

function saveConfig($default_title, $default_description, $default_keywords, $services_title, $services_description, $services_keywords, $portfolio_title, $portfolio_description, $portfolio_keywords, $contact_title, $contact_description, $contact_keywords, $footer)
{
/*    $content = nl2br(htmlspecialchars($content));
    $name = htmlspecialchars($name);
    $function = htmlspecialchars($function);
    $image_name = htmlspecialchars($image_name);*/
    try {
        global $bdd;
        $update_config = $bdd->prepare('UPDATE config SET default_title=:default_title, default_description=:default_description, default_keywords=:default_keywords, services_title=:services_title, services_description=:services_description, services_keywords=:services_keywords, portfolio_title=:portfolio_title, portfolio_description=:portfolio_description, portfolio_keywords=:portfolio_keywords, contact_title=:contact_title, contact_description=:contact_description, contact_keywords=:contact_keywords, footer=:footer WHERE 1');
        $update_config->bindParam(':default_title', $default_title, PDO::PARAM_STR);
        $update_config->bindParam(':default_description', $default_description, PDO::PARAM_STR);
        $update_config->bindParam(':default_keywords', $default_keywords, PDO::PARAM_STR);
        $update_config->bindParam(':services_title', $services_title, PDO::PARAM_STR);
        $update_config->bindParam(':services_description', $services_description, PDO::PARAM_STR);
        $update_config->bindParam(':services_keywords', $services_keywords, PDO::PARAM_STR);
        $update_config->bindParam(':portfolio_title', $portfolio_title, PDO::PARAM_STR);
        $update_config->bindParam(':portfolio_description', $portfolio_description, PDO::PARAM_STR);
        $update_config->bindParam(':portfolio_keywords', $portfolio_keywords, PDO::PARAM_STR);
        $update_config->bindParam(':contact_title', $contact_title, PDO::PARAM_STR);
        $update_config->bindParam(':contact_description', $contact_description, PDO::PARAM_STR);
        $update_config->bindParam(':contact_keywords', $contact_keywords, PDO::PARAM_STR);
        $update_config->bindParam(':footer', $footer, PDO::PARAM_STR);
        $update_config->execute();
    }
    catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }

}
