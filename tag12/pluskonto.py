from konto import Konto
class Pluskonto(Konto):
    """Pluskonto als Subklasse von Konto """
    def __init__(self, kontonummer, kontostand=0):
        super().__init__(kontonummer, kontostand)

    def abheben(self, betrag):
        print("ich möchte Geld abheben: ", betrag)
        print("dein Kontostand ist: ", self.kontostand_aktuell())
        if (self.kontostand_aktuell() - betrag >= 0):
            super().abheben(betrag)
            #print("wir können vom Pluskonto",betrag,"auszahlen")
        else:
            print("Eine Auszahlung ist mit diesem Pluskonto nicht möglich")
              
