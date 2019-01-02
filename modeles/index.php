<?php
/*if (!defined('UTILISATEURS')) {
    define('UTILISATEURS', 'xdev_configurateur-tarifs');
}
if (!defined('ACCESS')) { //mdp bdd
    define('ACCESS', '_D1J(M_S,lXv');
}*/
if (!defined('UTILISATEURS')) {
    define('UTILISATEURS', 'root');
}
if (!defined('ACCESS')) { //mdp bdd
    define('ACCESS', 'root');
}

include_once URL.'/modeles/Database.class.php';
include_once URL.'/modeles/Prospects.class.php';
include_once URL.'/modeles/Details_dde.class.php';
include_once URL.'/modeles/Pdf.class.php';