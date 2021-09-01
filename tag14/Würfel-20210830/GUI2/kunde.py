
class Kunde(object):
    def __init__(self, name, vorname):
        self.name = name
        self.vorname = vorname
        self.konto= None

    def kontoHinzufuegen(self, konto):
        self.konten = self.konten + [konto]
