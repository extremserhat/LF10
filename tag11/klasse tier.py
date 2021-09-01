class Tier():
    """klasse für erstellung von säugetieren"""

    def __init__(self, name, farbe, alter):
        self.rufname           = name
        self.farbe          = farbe
        self.alter           = alter
        self.schlafdauer    = 0

    def schlafen(self, dauer):
        print(self.rufname, "schläft" , dauer, "minuten")
        self.schlafdauer += dauer
        #gesamtdauerist eine object variable
        #dauer ist nur als übergangsparameter
        #bis zum ende der methode schleifen
        print(self.rufname, "schläft insgesamt", self.schlafdauer,"Minuten\n")

    def giblaut(self, anzahl=1):

        print(self.rufname,"macht","miau "*anzahl)

class Katze(Tier):
    """klasse für das erstellen von katzen"""

    def __init__(self ,rufname , farbe, alter):
        """ initialisieren über eltern-klasse"""
        super().__init__(rufname, farbe, alter)


class Hund(Tier):
    """klasse für das erstellen von hunden"""

    def __init__(self,rufname,farbe,alter):
        super().__init__(rufname, farbe, alter)

    def giblaut(self, anzahl=1):
        print(self.rufname,"macht","Wuff "*anzahl)


katze_1 = Katze("Ajani", "weiß", 5)
print(katze_1.farbe)

katze_1.schlafen(10)

katze_1.giblaut(5)


# katze_1.schlafen(10)


hund_bello = Hund("bello", "braun", 12)
print(hund_bello.farbe)
# katze_1.schlafen(35)
hund_bello.giblaut(5)

