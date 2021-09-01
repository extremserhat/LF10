-- Datenbank-User für das Web-Gewinnspiel anlegen
-- 

-- Username "kolbe" anlegen, kann sich aber nur vom lokalen Server anmelden
-- das ist sinnvoll, weil der Datenbankserver und der Web-Server die gleiche IP haben
-- Password "geko"
CREATE USER 'kolbe'@'localhost' identified by 'geko';

-- der user darf nur auf die Datenbank gewinnspiel zugreifen
GRANT INSERT, UPDATE, SELECT
ON TABLE gewinnspiel.*
TO 'kolbe'@'localhost';

FLUSH PRIVILEGES;