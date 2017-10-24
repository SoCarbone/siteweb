<?php

function isExist($firstname)
{
    $firstname = htmlspecialchars($firstname);

    global $bdd;
    $bdd_firstname = $bdd->prepare('SELECT firstname FROM members WHERE firstname=:firstname');
    $bdd_firstname->bindParam(':firstname', $firstname, PDO::PARAM_STR);
    $bdd_firstname->execute();
    $firstanme_check = $bdd_firstname->fetchColumn();

    if($firstname == $firstanme_check)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function isSame($password)
{
    global $bdd;
    $bdd_password = $bdd->prepare('SELECT password FROM members WHERE password=:password');
    $bdd_password->bindParam(':password', $password, PDO::PARAM_STR);
    $bdd_password->execute();
    $password_check = $bdd_password->fetchColumn();

    if($password == $password_check)
    {
        return true;
    }
    else
    {
        return false;
    }
}
