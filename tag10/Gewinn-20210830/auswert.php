<?php
// Verbindungsparameter

// Verbindung herstellen und Datenbank wählen
 $conn = new mysqli ($host, $user, $pass, $db);

   mysqli_query($conn, "SET NAMES 'utf8'");
// Datenbank auswählen
?>
<html>
<head>
<title>Gewinnspiel - Auswertung</title>
</head>
<body>
<h1>Gewinnspiel - Auswertung</h1>
<?php
// Nummern der richtigen Antworten speichern
// $fr_query = $conn->query
$fr_query = mysqli_query
($conn, "SELECT fr_korrekt FROM gw_fragen ORDER BY fr_id ASC");
$korrekt = array();
while (list ($fr_korrekt) = mysqli_fetch_row ($fr_query)) {
array_push ($korrekt, $fr_korrekt);
}
// Alle Teilnehmer ermitteln
// $tn_query = $conn->query ("SELECT tn_id FROM gw_teilnehmer");
$tn_query = mysqli_query ($conn, "SELECT tn_id FROM gw_teilnehmer");
$teilnehmer = array();
while (list ($tn_id) = mysqli_fetch_row ($tn_query)) {
array_push ($teilnehmer, $tn_id);
}
// Für jeden Teilnehmer herausfinden, ob er alles richtig beantwortet hat
$korr_teilnehmer = array();
foreach ($teilnehmer as $tn_id) {
// Vermutung: Alles richtig
$richtig = 1;
// Alle Antworten des Teilnehmers durchlaufen
// $tl_query = $conn->query ("SELECT tl_frag, tl_antw FROM
// gw_teilnahme WHERE tl_tln=$tn_id ORDER BY tl_frag ASC");
$tl_query = mysqli_query ($conn, "SELECT tl_frag, tl_antw FROM
gw_teilnahme WHERE tl_tln=$tn_id ORDER BY tl_frag ASC");
for ($i = 0; list ($tl_frag, $tl_antw) =
mysqli_fetch_row ($tl_query); $i++) {
// Falsche Antwort?
if ($tl_antw != $korrekt[$i]) {
// Also nicht alles richtig
$richtig = 0;
}
}
// Alles richtig?
if ($richtig) {
array_push ($korr_teilnehmer, $tn_id);
}
}
?>
Folgende Teilnehmer haben alle Fragen richtig beantwortet:<br />
<br />
<table border="2" cellpadding="4">
<tr>
<th>Teilnehmer</th>
<th>E-Mail</th>
<th>Lieblingsstadt</th>
</tr>
<?php
// Die Lieblingsstädte
$staedte = array ("Paris", "London", "Istanbul", "Rom");
// Ausgabe aller korrekten Einsendungen
foreach ($korr_teilnehmer as $kt) {
// $kt_query = $conn->query ("SELECT tn_uname, tn_email,
$kt_query = mysqli_query ($conn, "SELECT tn_uname, tn_email,
tn_interest FROM gw_teilnehmer WHERE tn_id=$kt");
list ($tn_uname, $tn_email, $tn_interest) = mysqli_fetch_row($kt_query);
echo "<tr>\n";
echo "<td>$tn_uname</td>\n";
echo "<td>$tn_email</td>\n";
echo "<td>".$staedte[$tn_interest - 1]."</td>\n";
echo "</tr>\n";
}
?>
</table>
<br />
<?php
// Den Gewinner "ziehen"
$gnummer = rand (0, sizeof ($korr_teilnehmer) - 1);
$gewinner = $korr_teilnehmer[$gnummer];
// und ausgeben
//$gw_query = $conn->query ("SELECT tn_uname, tn_email FROM
$gw_query = mysqli_query ($conn, "SELECT tn_uname, tn_email FROM
gw_teilnehmer WHERE tn_id=$gewinner");
list ($tn_uname, $tn_email) = mysqli_fetch_row($gw_query);
echo ("Gewonnen hat: <b>$tn_uname</b>
(<a href=\"mailto:$tn_email\">$tn_email</a>)");
// Datenbankverbindung schließen
// $conn->close();
mysqli_close($conn);
?>
</body>
</html>