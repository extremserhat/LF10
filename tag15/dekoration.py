# -- Hauptgericht
class Gericht: # Basisklasse
    def __init__(self, preis, bezeichnung):
        self._preis = preis
        self._bezeichnung = bezeichnung

    def getPreis(self):
        return self._preis

    def getBezeichnung(self):
        return self._bezeichnung + " mit "


class Steak(Gericht):
    def __init__(self):
        super().__init__(13.00, "Hüftsteak")

class Tofu(Gericht):
    def __init__(self):
        super().__init__(8.50, "Tofu")

class Schnitzel(Gericht):
    def __init__(self):
        super().__init__(11.50, "Wiener Schnitzel")

class Garnelen(Gericht):
    def __init__(self):
        super().__init__(13.50, "Garnelen")

        
# --- Beilagen

class Beilage: # Basisklasse
    def __init__(self, preis, bezeichnung, gericht):
        self._preis = preis
        self._bezeichnung = bezeichnung
        self._gericht = gericht

    def getPreis(self):
        return self._gericht.getPreis() + self._preis

    def getBezeichnung(self):
        return self._gericht.getBezeichnung() + self._bezeichnung + ', '


class Pommes(Beilage):
    def __init__(self, gericht):
        super().__init__(4.50, "Pommes", gericht)
    
class Salat(Beilage):
    def __init__(self, gericht):
        super().__init__(2.25, "Salat", gericht)

class Nudeln(Beilage):
    def __init__(self, gericht):
        super().__init__(3.50, "Nudeln", gericht)

class Suppe(Beilage):
    def __init__(self, gericht):
        super().__init__(1.80, "Suppe", gericht)

class Bratkartoffeln(Beilage):
    def __init__(self, gericht):
        super().__init__(2.20, "Bratkartoffeln", gericht)
    
# Hauptprogramm
bestellung_1 = Pommes(Steak())
print(f'Rechnungsbetrag: {bestellung_1.getPreis():.2f}')
print(bestellung_1.getBezeichnung())
print()
bestellung_2 = Pommes(Salat(Tofu()))
print(f'Rechnungsbetrag: {bestellung_2.getPreis():.2f}')
print(bestellung_2.getBezeichnung())
print()
bestellung_3 = Nudeln(bestellung_2)
print(f'Rechnungsbetrag: {bestellung_3.getPreis():.2f}')
print("Nachbestellung")
print(bestellung_3.getBezeichnung())
print()
bestellung_4 = Pommes(Suppe(Bratkartoffeln(Nudeln(Salat(Garnelen())))))
print(f'Rechnungsbetrag: {bestellung_4.getPreis():.2f}')
print(bestellung_4.getBezeichnung())


    

