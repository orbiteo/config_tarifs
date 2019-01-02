<?php
include_once("define.php");

$detailsDde = new Details_dde();
$detailsDde->setdate_demande(Date("Y-m-d"));
$detailsDde->setmkt_digi($_POST['variable9']);
$detailsDde->setdev_web($_POST['variable8']);
$detailsDde->setstudio($_POST['variable7']);
$detailsDde->setcrm($_POST['variable6']);
$detailsDde->setref_nat($_POST['variable5']);
$detailsDde->setbudget_pub($_POST['variable3']);
$detailsDde->insert();
$detailsDde->readObject();

$nouveauProspect = new Prospects();
$nouveauProspect->setnom($_POST["nom"]);
$nouveauProspect->setsociete($_POST["societe"]);
$nouveauProspect->setemail($_POST["email"]);
$nouveauProspect->settelephone($_POST["telephone"]);
$nouveauProspect->setdetails_dde_id($detailsDde->getdetails_dde_id());
$nouveauProspect->insert();
$nouveauProspect->readObject();

if($nouveauProspect->getprospect_id() != 0) { // Si un nouvel id a été créé
	header('location:'. ADRESSE_SITE.'/?msg=1');
}
else {
	echo "erreur d'id";
	//header('location:'. ADRESSE_SITE.'/?err=1');
}