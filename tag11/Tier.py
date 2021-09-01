class Tier():
    """ Klasse für das Erstellen von Säugetieren """

    tieranzahl = 0 # Klassenvariable
    
    def __init__(self, rufname, farbe, alter):
        self.rufname = rufname
        self.farbe   = farbe
        self.alter   = alter
        self.schlafdauer = 0
        Tier.tieranzahl += 1

    def schlafen(self, dauer):
        print(self.rufname,"schläft",dauer,"Minuten")
        self.schlafdauer += dauer
        # gesamtdauer ist eine Objekt-Variable
        # dauer ist nur als Übergabeparameter bekannt;
        # bis zum Ende der Methode schlafen
        print(self.rufname,"schläft insgesamt",self.schlafdauer,"Minuten\n")

    def gibLaut(self, anzahl=1):
        print(self.rufname,"macht","miau "*anzahl)


class Katze(Tier):
    """ Klasse für das Erstellen von Katzen """

    def __init__(self, rufname, farbe, alter):
        """ Initalisieren über Eltern-Klasse """
        super().__init__(rufname, farbe, alter)


class Hund(Tier):
    """ Klasse für das Erstellen von Hunden """

    def __init__(self, rufname, farbe, alter):
        """ Initalisieren über Eltern-Klasse """
        super().__init__(rufname, farbe, alter)

    def gibLaut(self, anzahl=2):
        print(self.rufname,"macht","WAU "*anzahl)


print("vor allen Objektbildungen:", Tier.tieranzahl)
katze_1 = Katze("Sammy", "orange", 3)
print(katze_1.farbe)
katze_1.schlafen(10)
katze_1.gibLaut(2)
print()
hund_bello = Hund("Bello", "braun", 5)
print(hund_bello.farbe)
hund_bello.schlafen(35)
hund_bello.gibLaut()
hund_bello.gibLaut(3)
print("Tier: Anzahl", Tier.tieranzahl)   # Basisklasse.Variable
print("Katze: Anzahl", Katze.tieranzahl) # Subklasse.Variable
print("katze_1: Anzahl", katze_1.tieranzahl)
print("xxxx", Hund.tieranzahl);

katze_2 = Katze("Rocky", "schwarz", 8)
print("Tier: Anzahl", Tier.tieranzahl)   # Basisklasse.Variable
print("katze_2: Anzahl", katze_2.tieranzahl)
print("xxxx", Hund.tieranzahl);



