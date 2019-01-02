<?php
require("../assets/fpdf181/fpdf.php");
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

// See http://www.fpdf.org/
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,'Marketing Digital: '.$detailsDde->getmkt_digi().' heures',0,1);
$devWeb = utf8_decode("Développement web: ");
$pdf->Cell(0,10, $devWeb.$detailsDde->getdev_web().' heures',0,1);
$pdf->Cell(0,10,'Studio graphique: '.$detailsDde->getstudio().' heures',0,1);
$pdf->Cell(0,10,'Accompagnement CRM: '.$detailsDde->getcrm().' heures',0,1);
$refNat = utf8_decode("Référencement naturel: ");
$pdf->Cell(0,10,$refNat.$detailsDde->getref_nat().' heures',0,1);
$stratDigi = utf8_decode("Stratégie et gestion de projet : ");
$totalHeures = $detailsDde->getmkt_digi() + $detailsDde->getdev_web() + $detailsDde->getstudio() + $detailsDde->getcrm() + $detailsDde->getref_nat(); // Nombre d'heure total = 
$pdf->Cell(0,10,$stratDigi.$totalHeures.' heures (soit 10% des heures)',0,1);
$pdf->Cell(0,10,'Budget Pub: '.$detailsDde->getbudget_pub().' Euros',0,1);
$budgetAchats = $detailsDde->getbudget_pub()/10;
$pdf->Cell(0,10,'Achats: '.$budgetAchats.' Euros HT',0,1);
$prevTotal = utf8_decode("Prévisionnel total: ");
$montantTotal = $budgetAchats + $detailsDde->getbudget_pub();
$pdf->Cell(0,10,$prevTotal.$montantTotal.' Euros HT',0,1);
$pdfIdProspect = $nouveauProspect->getprospect_id();
$pdf->Output(F,"../pdf/proposition".$pdfIdProspect.".pdf", true);

if($pdfIdProspect != 0) { // Si un nouvel id a été créé
	header('location:'. ADRESSE_SITE.'/?msg=1');
}
else {
	echo "erreur d'id";
	//header('location:'. ADRESSE_SITE.'/?err=1');
}