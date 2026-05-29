<?php
$jmeno = $_POST["jmeno"];
$prijmeni = $_POST["prijmeni"];
$email = $_POST["email"];
$poznamka = $_POST["poznamka"];

if (isset($_POST["prace"])) {
$prace = "Ano";
} else {
$prace = "Ne";
}

if (isset($_POST["stiznost"])) {
$stiznost = "Ano";
} else {
$stiznost = "Ne";
}

if (isset($_POST["copyright"])) {
$copyright = "Ano";
} else {
$copyright = "Ne";
}

?>
<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PVS - formulář</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
</head>
<body>

<h1>Odeslaná data z formuláře</h1>

<h2><strong>Jméno:</strong> <?= htmlspecialchars($jmeno) ?></h2>
<h2><strong>Příjmení:</strong> <?= htmlspecialchars($prijmeni) ?></h2>
<h2><strong>Email:</strong> <?= htmlspecialchars($email) ?></h2>
<h2><strong>Kontaktuji kvůli práci:</strong> <?= $prace ?></h2>
<h2><strong>Kontaktuji kvůli stížnosti:</strong> <?= $stiznost ?></h2>
<h2><strong>Kontaktuji kvůli problémům s copyrightem:</strong> <?= $copyright ?></h2>
<h2><strong>Popis důvodu kontaktování:</strong> <?= htmlspecialchars($poznamka) ?></h2>

<br>
<div class="leva"><a href="kontakt1.html"> Zpět na formulář</a> </div>
<div class="prava"><a href="index.html"> Domů</a></div>
</body>
</html>