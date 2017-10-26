<?php

if(!empty($_POST) )
{
    saveConfig($_POST['default_title'], $_POST['default_description'], $_POST['default_keywords'], $_POST['services_title'], $_POST['services_description'], $_POST['services_keywords'], $_POST['portfolio_title'], $_POST['portfolio_description'], $_POST['portfolio_keywords'], $_POST['contact_title'], $_POST['contact_description'], $_POST['contact_keywords'], $_POST['footer']);

    $final_message = '<div class="uk-alert-success uk-width-1-1" uk-alert><a class="uk-alert-close" uk-close></a><p>La nouvelle configuration a été enregistrée avec succès.</p></div>';
}

$the_config = getConfig();

foreach($the_config as $key => $config)
{

}

