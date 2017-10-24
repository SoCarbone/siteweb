<?php

if(isset($_POST['firstname']) AND isset($_POST['password']))
{
    $knew_firstname = false;

    if(isExist($_POST['firstname']) == true)
    {
        $crypted_password = crypt($_POST['password'], '4kp');

        if(isSame($crypted_password) == true)
        {
            $_SESSION['connected'] = 42;
            $_SESSION['firstname'] = ucfirst($_POST['firstname']);
            header('Location: admin.php');
        }
        else
        {
            $unknow_message = 'Ce n\'est pas le bon mot de passe';
        }

    }
    else
    {
        $unknow_message = 'Vous n\'êtes pas autorisé';
    }


}
