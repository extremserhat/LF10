class Katze():
    """ Klasse für das Erstellen von Katzen
    Hilfetext ideal bei mehreren Programmierern in
    einem Projekt oder bei schlechtem Gedächtnis """

    # Konstruktor der Klasse Katze
    def __init__(self, rufname, farbe, alter):
        # Attribute der Klasse Katze
        self.rufname = rufname
        self.farbe = farbe
        self.alter = alter
        self.gesamtdauer = 0
    # Definition einer Methode
    def gibLaut(self, anzahl=1):
        print(self.rufname,"macht","miau "*anzahl)
    # eine weitere Methode
    def schlafen(self, dauer):
        print(self.rufname,"schläft",dauer,"Minuten")
        self.gesamtdauer += dauer
        # gesamtdauer ist eine Objekt-Variable
        # dauer ist nur als Übergabeparameter bekannt;
        # bis zum Ende der Methode schlafen
        print(self.rufname,"schläft insgesamt",self.gesamtdauer,"Minuten\n")
    
# Ende der class Definition


# Hauptprogramm
# print(help(Katze))

katze_1 = Katze("Sammy", "getigert", 3)  # Objekt- bzw. Instanz-Bildung
katze_2 = Katze("Rocky", "schwarz/weiß", 8)
print(katze_1)
print(katze_1.rufname)
print(katze_2.rufname)
print(katze_1.rufname,"ist", katze_1.alter, "Jahre alt")
katze_1.gibLaut(3)
katze_2.gibLaut()
katze_2.schlafen(5)
katze_2.schlafen(11)

katze_1.schlafen(255)
katze_2.schlafen(12)




