from kunde import *
from konto import *

class Bank(object):
    def __init__(self):
        self.konten = []
        self.kunden = []
        self.naechsteKontoNr = 0

    def kontoEroeffnen(self, name, vorname):
        neuerkunde = Kunde(name, vorname)
        neueskonto = Konto(self.naechsteKontoNr)
        self.naechsteKontoNr = self.naechsteKontoNr + 1
        neuerkunde.konto = neueskonto
        neueskonto.inhaber = neuerkunde
        self.konten = self.konten + [neueskonto]
        self.kunden = self.kunden + [neuerkunde]

    def getKonto(self, kontoNr):
        gefundenKonto = None
        for konto in self.konten:
            if konto.nr == kontoNr:
                gefundenKonto = konto
        return gefundenKonto

    def existiertKonto(self, kontoNr):
        konto = self.getKonto(kontoNr)
        if konto == None:
            return False
        else:
            return True

    def ueberweisen(self, vonKontoNr, nachKontoNr, betrag):
        vonKonto = self.getKonto(vonKontoNr)
        nachKonto = self.getKonto(nachKontoNr)
        if vonKonto != None and nachKonto != None:
            vonKonto.auszahlen(betrag)
            nachKonto.einzahlen(betrag)

    def einzahlen(self, kontoNr, betrag):
        konto = self.getKonto(kontoNr)
        if konto != None:
            konto.einzahlen(betrag)

    def auszahlen(self, kontoNr, betrag):
        konto = self.getKonto(kontoNr)
        if konto != None:
            konto.auszahlen(betrag)



