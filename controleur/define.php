<?php
session_start();
//version en prod
//define('URL', $_SERVER["DOCUMENT_ROOT"].'');
//define('ADRESSE_SITE', '');

//version locale
define('URL', $_SERVER["DOCUMENT_ROOT"]);
define('ADRESSE_SITE', 'http://config-orbiteo.xdev.ovh');

include_once URL.'/modeles/index.php';