from konto import *
from pluskonto import *
# Hauptprogramm
kolbe = Konto("0012345")
kolbe.kontostand_anzeigen()

kolbe.abheben(150)
kolbe.kontostand_anzeigen()

kolbe.einzahlen(280)
kolbe.kontostand_anzeigen()

# kolbe.kontostand = 150000210 #sehr frech !!
# kolbe.kontostand_anzeigen()

huber = Konto("00471101")
huber.einzahlen(850)
huber.kontostand_anzeigen()
#kolbe.kontostand = 150000210 #sehr frech !!
kolbe.kontostand_anzeigen()

chros = Pluskonto("00556677")
chros.abheben(200)

chros.einzahlen(400)
chros.kontostand_anzeigen()

chros.abheben(250)
chros.kontostand_anzeigen()


