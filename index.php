<?php 
$month=date("m");
$year=date("y");
$number = cal_days_in_month(CAL_GREGORIAN, $month, $year);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <title>ARE Simulateur</title>
</head>
<body>
    <header>
        <h1>ARES</h1>
        <p>Simulateur de complement de revenu professionnel des micro-entreprises</p>
    </header>
    <main>
        <section id="calcAre">
            <form id="calc" action="php/pdf.php" method="post" target="_blank">
                <div id="activitiType">
                    <div class="selectedType">
                        <div>
                            <input type="radio" name="type" id="achatvente"  onclick="checkedRadioBtn()" onchange="resetCheckedRadioBtn()">
                            <label for="type">Achat/Vente</label>
                        </div>
                        <div>
                            <input type="radio" name="type" id="bic" onclick="checkedRadioBtn()" onchange="resetCheckedRadioBtn()">
                            <label for="type">BIC</label>
                        </div>
                        <div>
                            <input type="radio" name="type" id="bnc" onclick="checkedRadioBtn()" onchange="resetCheckedRadioBtn()">
                            <label for="type">BNC</label>
                        </div>
        
                    </div>
                    <div class="ca">
                        <div>
                            <label for="cabrut">CA Brut</label>
                            <input type="text" name="cabrut" id="cabrut" onkeyup="inputValue(event)" readonly>
                        </div>
                        <div class="viewMinDetails">
                            <label for="canet">Ca Net</label>
                            <input type="text" name="canet" id="canet" readonly>
                        </div>
                    </div>
                </div>
                <div id="fullAre">
                    <div>
                        <label for="areJ">Montant ARE journaliere</label>
                        <input type="text" name="areJ" id="areJ" onkeyup="inputValueAre(event)" readonly>
                    </div>
                    <div class="viewMinDetails">
                        <label for="nbDayMonth">Nombre jours mois</label>
                        <input type="text" name="nbDayMonth" id="nbDayMonth" value="<?= $number;?>" readonly>
                    </div>
                </div>
                <div id="minifyAre" class="viewMinDetails">
                    <div>
                        <label for="reportFA">Montant ARE complete</label>
                        <input type="text" name="reportFA" id="reportFA" readonly>
                    </div>
                    <div >
                        <label for="mAre">Montant deduit</label>
                        <input type="text" name="mAre" id="mAre" readonly>
                    </div>
                </div>
                <div class="resultM">
                    <label for="resultMinimify">Montant de votre ARE</label>
                    <input type="text" name="resultMinimify" id="resultMinimify" readonly>
                </div>
                <div id="selectView">
                    <p id="fullView" onclick="changeView()">Vue détaillé</p>
                </div>
                <div id="generatePdf">
                    <input type="submit" value="Télécharger au format PDF" onclick="sendData()">
                </div>
            </form>
        </section>
    </main>
    <footer>
        <div id="mention">
            <p><i>Rappel : ce simulateur fonctionne avec les méthodes de calcul fournies par le site des autoentrepreneurs concernant le calcul de l'are en cumul avec une activité professionnelle. Les résultats sont donnés à titre indicatif.</i></p>
        </div>
        <div id="identity">
            <p>@2021 <a href="https://js-web.fr">JS-WEB</a></p>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>