<?php
function cgi_param ($feld, $default="") {
// Variable zunächst auf Default-Wert setzen
$var = $default;
if (isset($_GET[$feld]) && $_GET[$feld] != "") {
// GET-Feld gefunden
$var = $_GET[$feld];
} elseif (isset($_POST[$feld]) && $_POST[$feld] != "") {
// POST-Feld gefunden
$var = $_POST[$feld];
}
// Ermittelten Wert zurückgeben
return $var;
}
// Datenbank-Verbindungsparameter

   $conn = new mysqli("localhost", "kolbe", "hallo","gewinnspiel");
   mysqli_query($conn, "SET NAMES 'utf8'");
// Vermutung: Alles korrekt ausgefüllt
$korrekt = 1;
// Formulardaten lesen
for ($i = 1; $i <= 4; $i++) {
$antwort[$i] = cgi_param ("f$i", 0);
if ($antwort[$i] == 0) {
$korrekt = 0;
}
}
$uname = cgi_param ("uname", "");
$email = cgi_param ("email", "");
$interest = cgi_param ("wish", 0);
if ($uname == "" || $email == "" || $interest == 0) {
$korrekt = 0;
}
// Etwas nicht ausgefüllt?
if (!$korrekt) {
header ("Location: spiel.php?fehler=1");
} else {

// Infos in die Datenbank schreiben
$tut = mysqli_query ($conn, "INSERT INTO gw_teilnehmer (tn_uname, tn_email,
tn_interest) VALUES (\"$uname\", \"$email\", $interest)");
if (mysqli_affected_rows($tut)!=0) {
header ("Location: error.html?wert=1");
} else { 
// Teilnehmer-ID ermitteln
$query = mysqli_query ($conn, "SELECT tn_id from gw_teilnehmer
WHERE tn_email=\"$email\"");
list ($id) = mysqli_fetch_row ($query);
for ($i = 1; $i <= 4; $i++) {
mysqli_query ($conn, "INSERT INTO gw_teilnahme VALUES
($id, $i, $antwort[$i])");
if (mysqli_affected_rows() == 0) {
header ("Location: error.html?wert=2");
}
}
}
mysqli_close($conn);
}
?>
<html>
<head>
<title>Gewinnspiel</title>
<meta http-equiv="Content-type" content="text/html;charset=iso-8859-1" />
</head>
<body>
<h1>Vielen Dank, <?php echo ($uname); ?>!</h1>
<p>Wir freuen uns, dass Sie an unserem Gewinnspiel teilgenommen haben.
<br />
Unter allen richtigen Einsendungen verlosen wir am 01.04.2021 die Reise.
<br />
<br />
Der Gewinner wird per E-Mail benachrichtigt.</p>
</body>
</html>

