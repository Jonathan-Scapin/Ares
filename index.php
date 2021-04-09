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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>ARE Simulateur</title>
</head>
<body>
    <h1>Bienvenu sur ARES</h1>
    <p>Simulateur de complement de revenu professionnel des micro-entreprises</p>
    <form action="">
        <div id="activitiType">
            <div class="selectedType">
                <div>
                    <input type="radio" name="type" id="achatvente" onclick="checkedRadioBtn()">
                    <label for="type">Achat/Vente</label>
                </div>
                <div>
                    <input type="radio" name="type" id="bic" onclick="checkedRadioBtn()">
                    <label for="type">BIC</label>
                </div>
                <div>
                    <input type="radio" name="type" id="bnc" onclick="checkedRadioBtn()">
                    <label for="type">BNC</label>
                </div>

            </div>
            <div class="ca">
                <div>
                    <label for="cabrut">CA Brut</label>
                    <input type="text" name="cabrut" id="cabrut" onkeyup="inputValue(event)" disabled="disabled">
                </div>
                <div>
                    <label for="canet">Ca Net</label>
                    <input type="text" name="canet" id="canet" disabled="disabled">
                </div>
            </div>
        </div>
        <div id="fullAre">
            <div>
                <label for="areJ">Montant ARE journaliere</label>
                <input type="text" name="areJ" id="areJ" onkeyup="inputValueAre(event)" disabled="disabled">
            </div>
            <div>
                <label for="nbDayMonth">Nombre jours mois</label>
                <input type="text" name="nbDayMonth" id="nbDayMonth" value="<?= $number;?>" disabled="disabled">
            </div>
        </div>
        <div id="minifyAre">
            <div>
                <label for="reportFA">Montant ARE complete</label>
                <input type="text" name="reportFA" id="reportFA" disabled="disabled">
            </div>
            <div>
                <label for="mAre">Montant deduit</label>
                <input type="text" name="mAre" id="mAre" disabled="disabled">
            </div>
        </div>
        <div class="resultM">
            <label for="resultMinimify">Montant de votre ARE</label>
            <input type="text" name="resultMinimify" id="resultMinimify" disabled="disabled">
        </div>
    </form>
    <script src="main.js"></script>
</body>
</html>