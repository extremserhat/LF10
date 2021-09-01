<?php
$aktion = date("H:i:s");
if ( empty ($_GET['vorname']) == TRUE 
	 or
	 empty ($_GET['nachname']) == TRUE
	)
{
    echo '
	<p>das Formular bitte vollständig ausfüllen</p>
    <form action="affenformular.php" method="get">

    <p>Ihr Vorname:
    <input type="text" name="vorname" size="50" value="'
	. $_GET['vorname'] . '">
    </p>
	
	<p>Ihr Nachname:
    <input type="text" name="nachname" size="50" value="'
	. $_GET['nachname'] . '">
    </p>
	
	<input type="hidden" name="aktion" id="aktion"
	value="' . $aktion . '" >
    
	<p>Absendebutton:
    <input type="submit" value="absenden">
    </p>

    </form>
    ';
}
else
{
    // beliebige Aktion, z. B. E-Mail senden, DB-Eintrag
    echo "<p>Sie wurden registriert: " . $_GET['nachname'] . ", "
	. $_GET['vorname'];
	echo "<p>$aktion";
}
?>