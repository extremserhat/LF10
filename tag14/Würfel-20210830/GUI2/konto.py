
class Konto(object):
    def __init__(self, nummer):
        self.nr = nummer
        self.stand = 0.0
        self.inhaber = None

    def einzahlen(self, betrag):
        self.stand = self.stand + betrag

    def auszahlen(self, betrag):
        self.stand = self.stand - betrag

