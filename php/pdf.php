<?php

require('/var/www/public/ares.github.io/fpdf183/fpdf.php');

$ca_brut = $_POST["cabrut"];
$ca_net = $_POST["canet"];
$areJ = $_POST["areJ"];
$nbDayMonth = $_POST["nbDayMonth"];
$reportFA = $_POST["reportFA"];
$mAre = $_POST["mAre"];
$resultMinimify = $_POST["resultMinimify"];


class PDF extends FPDF
{
// En-tête
function Header()
{
    // Logo
    $this->Image('/var/www/public/ares.github.io/img/logo/logo_Ares.png',90,-10,50);
    // Police Arial gras 15
    $this->SetFont('Arial','B',15);
    // Décalage à droite
    $this->Cell(80);
    // Titre
    $this->Cell(30,30,'Recapitulatif simulation ARE',0,0,'C');
    // Saut de ligne
    $this->Ln(30);
}
// Pied de page
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Police Arial italique 8
    $this->SetFont('Arial','I',8);
    // Print centered page number
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}
}
// Instanciation de la classe dérivée
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Ln(20);
$pdf->MultiCell(0,10,utf8_decode('Vous avez declaré un chiffre d\'affaires brut de ') . $ca_brut . ' euros.');
$pdf->MultiCell(0,10,utf8_decode('Votre indeminité journalière est de ') . $areJ . ' euros.');
$pdf->MultiCell(0,10,'Le mois indemnise compte ' . $nbDayMonth . ' jours.');
$pdf->MultiCell(0,10,'L\'indemnisation de base est de ' . $reportFA . ' euros.');
$pdf->MultiCell(0,10,utf8_decode('Après déduction de votre CA moins l\'abattement votre indemnisation s\'élève à ') . $resultMinimify . ' euros.');
$pdf->Ln(50);
$pdf->MultiCell(0,10,utf8_decode('Rappel : ce simulateur fonctionne avec les méthodes de calcul fournies par le site des autoentrepreneurs concernant le calcul de l\'are en cumul avec une activité professionnelle. Les résultats sont donnés à titre indicatif.'));
$pdf->Output();

?>