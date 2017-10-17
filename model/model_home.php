<?php
function checkIp($ip)
{
    global $bdd;

    $ip = htmlspecialchars($ip);

    $check_ip = $bdd->prepare('SELECT COUNT(*) FROM visitors WHERE ip = :ip');
    $check_ip->bindParam(':ip', $ip, PDO::PARAM_STR);
    $check_ip->execute();
    $check = $check_ip->fetchColumn();

    if($check == 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function addVisitor($ip, $browser)
{
    global $bdd;

    $ip = htmlspecialchars($ip);
    $browser = htmlspecialchars($browser);

    $add_visitor = $bdd->prepare('INSERT INTO visitors(ip, browser) VALUES (:ip, :browser)');
    $add_visitor->bindParam(':ip', $ip, PDO::PARAM_STR);
    $add_visitor->bindParam(':browser', $browser, PDO::PARAM_STR);
    $add_visitor->execute();
}

function updateVisitor($ip, $browser)
{
    global $bdd;

    $ip = htmlspecialchars($ip);
    $browser = htmlspecialchars($browser);

    $update_visitor = $bdd->prepare('UPDATE visitors SET browser=:browser WHERE ip=:ip');
    $update_visitor->bindParam(':ip', $ip, PDO::PARAM_STR);
    $update_visitor->bindParam(':browser', $browser, PDO::PARAM_STR);
    $update_visitor->execute();
}

function Screen()
{
    $screen='<script type="text/javascript">document.write(""+screen.width+"*"+screen.height+"");</script>';
    return $screen;
}
