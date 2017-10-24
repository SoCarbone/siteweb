<?php
/*
	********************************************************************************************
	CONFIGURATION
	********************************************************************************************
*/
// destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
$destinataire = 'colombo.alexis@gmail.com'; //, laetitia.doens@gmail.com

// copie ? (envoie une copie au visiteur)
$copie = 'non';

// Action du formulaire (si votre page a des paramètres dans l'URL)
// si cette page est index.php?page=contact alors mettez index.php?page=contact
// sinon, laissez vide
$form_action = '';

// Messages de confirmation du mail
$message_envoye = '<div class="uk-alert-success" uk-alert><a class="uk-alert-close" uk-close></a><p>Votre message a bien été envoyé.</p></div>';
$message_non_envoye = '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a><p>L\'envoi du mail a échoué, veuillez réessayer SVP.</p></div>';
$no_human = '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a><p>Vous n\'êtes pas humain !</p></div>';

// Message d'erreur du formulaire
$message_formulaire_invalide = '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a><p>Vérifiez que tous les champs soient bien remplis et que l\'email ou le téléphone soit sans erreur.</p></div>';

/*
	********************************************************************************************
	FIN DE LA CONFIGURATION
	********************************************************************************************
*/

/*
 * cette fonction sert à nettoyer et enregistrer un texte
 */
function Rec($text)
{
    $text = htmlspecialchars(trim($text), ENT_QUOTES);
    if (1 === get_magic_quotes_gpc())
    {
        $text = stripslashes($text);
    }

    $text = nl2br($text);
    return $text;
};

/*
 * Cette fonction sert à vérifier la syntaxe d'un email
 */
function IsEmail($email)
{
    $value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
    return (($value === 0) || ($value === false)) ? false : true;
}

function IsPhone($phone)
{
    $value = preg_match('#^0[1-68][0-9]{8}$#', $phone);
    return (($value === 0) || ($value === false)) ? false : true;
}

// On récupère l'IP de l'utilisateur
$remoteip = $_SERVER['REMOTE_ADDR'];

// ReCaptcha
// Paramètre renvoyé par le recaptcha
if(!empty($_POST['g-recaptcha-response']))
{
    $response = $_POST['g-recaptcha-response'];
    $api_url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response."&remoteip=".$remoteip;
    $decode = json_decode(file_get_contents($api_url), true);
}

// formulaire envoyé, on récupère tous les champs.
$lastname     = (isset($_POST['lastname']))     ? Rec($_POST['lastname'])     : '';
$firstname     = (isset($_POST['firstname']))     ? Rec($_POST['firstname'])     : '';
$company     = (isset($_POST['company']))     ? Rec($_POST['company'])     : '';
$function     = (isset($_POST['function']))     ? Rec($_POST['function'])     : '';
$phone     = (isset($_POST['phone']))     ? Rec($_POST['phone'])     : '';
$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
$content = (isset($_POST['content'])) ? Rec($_POST['content']) : '';

// Remplacement de certains caractères spéciaux dans le content
$content = str_replace("&#039;","'",$content);
$content = str_replace("&#8217;","'",$content);
$content = str_replace("&quot;",'"',$content);
$content = str_replace('&lt;br&gt;','',$content);
$content = str_replace('&lt;br /&gt;','',$content);
$content = str_replace("&lt;","&lt;",$content);
$content = str_replace("&gt;","&gt;",$content);
$content = str_replace("&amp;","&",$content);

// On va vérifier les variables et l'email ...
$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
$phone = (IsPhone($phone)) ? $phone : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
$err_formulaire = false; // sert pour remplir le formulaire en cas d'erreur si besoin

if (isset($_POST['envoi']))
{
    if (($lastname != '') && ($firstname != '') && ($company != '') && ($email != '') &&  ($content != '') AND $decode['success'] == true)
    {
        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $destinataire))
        {
            $passage_ligne = "\r\n";
        }
        else
        {
            $passage_ligne = "\n";
        }

        //=====Déclaration des messages au format texte et au format HTML.
        $message_txt = "Nom: ".$lastname.$passage_ligne."Prénom: ".$firstname.$passage_ligne."Société: ".$company.$passage_ligne."Poste: ".$function.$passage_ligne."Téléphone: ".$phone.$passage_ligne."Message: ".$content.$passage_ligne;
        $message_html = "<html><head></head><body><b>Nom:</b> ".$lastname."<br /><b>Prénom:</b> ".$firstname."<br /><b>Société:</b> ".$company."<br /><b>Poste:</b> ".$function."<br /><b>Téléphone:</b> ".$phone."<br /><b>Message:</b> ".$content."<br /></body></html>";
        //==========

        //=====Création de la boundary
        $boundary = "-----=".md5(rand());
        //==========

        $object = 'Prise de contact d\'un client - Site alexiscolombo.fr';

        // les 4 variables sont remplies, on génère puis envoie le mail
        $headers = "From: \"".$lastname." ".$firstname."\"<".$email.">".$passage_ligne;
        $headers.= "Reply-to: \"".$lastname." ".$firstname."\" <".$email.">".$passage_ligne;
        $headers.= "MIME-Version: 1.0".$passage_ligne;
        $headers.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

        //=====Création du message.
        $message = $passage_ligne."--".$boundary.$passage_ligne;
        //=====Ajout du message au format texte.
        $message.= "Content-Type: text/plain; charset=\"utf-8\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_txt.$passage_ligne;
        //==========
        $message.= $passage_ligne."--".$boundary.$passage_ligne;
        //=====Ajout du message au format HTML
        $message.= "Content-Type: text/html; charset=\"utf-8\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_html.$passage_ligne;
        //==========
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        //==========

        // envoyer une copie au visiteur ?
        if ($copie == 'oui')
        {
            $cible = $destinataire.';'.$email;
        }
        else
        {
            $cible = $destinataire;
        };

        /*$message = 'Demande de '.$lastname.' '.$firstname.'<br />'.$function.' de '.$company.' joignable au: '.$phone.'<br /><br /> Son message :<br />'.$content;*/

        // Envoi du mail
        $num_emails = 0;
        $tmp = explode(';', $cible);
        foreach($tmp as $email_destinataire)
        {
            if (mail($email_destinataire, $object, $message, $headers))
                $num_emails++;
        }

        if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1)))
        {
            $final_message = $message_envoye;
        }
        else
        {
            $final_message = $message_non_envoye;
        }
    }
    else
    {
        $final_message = $message_formulaire_invalide;
    }
}// fin du if (!isset($_POST['envoi']))


?>
