<?php
// Beginn der Session, bereits vorhandene werden aktiviert
session_start();

// Abfrage, ob die Variable anzahlbesuche existiert
if ( ! isset ( $_SESSION['anzahlbesuche'] ) )
{
    $_SESSION['anzahlbesuche'] = 1;
}
else
{
    $_SESSION['anzahlbesuche']++  ;
}

/*Durch session_start(); wird die Sitzung (session) gestartet und eventuell vorhandene Session-Variablen werden verfügbar gemacht.
Die Zeile mit isset überprüft, ob die Session-Variable anzahlbesuche einen Inhalt enthält.
Wenn bisher kein Inhalt vorhanden ist, wird der Session-Variable anzahlbesuche die Zahl 1 zugewiesen.
Ist die Variable bereits vorhanden, wird der Inhalt um 1 erhöht. */

<?php
// Beginn der Session, bereits vorhandene werden aktiviert
session_start(); 

echo $_SESSION['anzahlbesuche'];

#Session-Zeit manuell eingestellen: 
#echo session_cache_limiter(); 
#session_cache_limiter(20); // wird die Lebensdauer der Session auf 20 Minuten gesetzt.

#Session-Variablen zerstören: 
#unset ($_SESSION);

?>