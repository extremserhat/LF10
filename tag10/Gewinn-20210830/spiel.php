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
?>
<!DOCTYPE HTML>
<HTML>
	<head>
		<meta charset="utf-8">
		<title>Gewinnspiel</title>
  </head>

<body>
	<h1>Gewinnspiel</h1>
	<p>Beantworten Sie die folgenden Fragen und gewinnen Sie eine All-inclusive-Wochenendreise in eine europ&auml;ische Gro&szlig;stadt aus unserem Angebot!</p>
	<?php
	// Wurde die Seite nach einem Eingabefehler erneut aufgerufen?
	$fehler = cgi_param ("fehler", 0);
	if ($fehler) {
?>
		<p><font color="#FF0000">
		Bitte alles vollst&auml;ndig ausf&uuml;llen!</font></p>
<?php
	}
?>
	<form action="teilnahme.php" method="get">
<?php
		// Verbindungsparameter
   $conn = new mysqli("localhost", "kolbe", "hallo","gewinnspiel");
   mysqli_query($conn, "SET NAMES 'utf8'");
    
		// Datenbank auswählen
		// Abfrage senden
		$fr_query = mysqli_query
			($conn ,"SELECT fr_id, fr_frage FROM gw_fragen ORDER BY fr_id ASC");
		// Zeilen lesen und Fragen stellen
		while (list ($fr_id, $fr_frage) = mysqli_fetch_row ($fr_query)) {
			// Fragetext ausgeben
			echo "<b>$fr_id. $fr_frage</b><br />";
			// Antworten holen
			$an_query = mysqli_query ($conn, "SELECT an_antwort, an_text FROM
			gw_antworten WHERE an_frage=$fr_id ORDER BY an_antwort ASC");
			// Radio-Buttons und Antworten ausgeben
			while (list ($an_antwort, $an_text) = mysqli_fetch_row ($an_query)) {
				echo "<input type=\"radio\" name=\"f$fr_id\"
				value=\"$an_antwort\" /> $an_text<br />";
			}
			echo "<br />";
		}
		// Datenbankverbindung schließen
		mysqli_close($conn);
	?>
		<h2>Pers&ouml;nliche Angaben</h2>
		<table border="0" cellpadding="4">
			<tr>
				<td>Benutzername:</td>
				<td colspan="3"><input type="text" name="uname" />
			</tr>
			<tr>
				<td>E-Mail:</td>
				<td colspan="3"><input type="text" name="email" />
			</tr>
			<tr>
				<td colspan="4">Welche dieser St&auml;dte w&uuml;rden Sie bald am
					liebsten besuchen?</td>
			</tr>
			<tr>
				<td><input type="radio" name="wish" value="1" />Paris</td>
				<td><input type="radio" name="wish" value="2" />London</td>
				<td><input type="radio" name="wish" value="3" />Istanbul</td>
				<td><input type="radio" name="wish" value="4" />Rom</td>
			</tr>
		</table>
		<input type="submit" value="Abschicken" />
	</form>
</body>
</html>