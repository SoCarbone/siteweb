<?php
//Récupération des données visiteurs

if(checkIp($ip) == true){
    addVisitor($ip, $browser);
}
else
{
    updateVisitor($ip, $browser);
}

