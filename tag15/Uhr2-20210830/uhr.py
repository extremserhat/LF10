class Uhr(object):
    def __init__(self):
        self.stunden = 0
        self.minuten = 0
        self.sekunden = 0

    def stellen(self, h, m, s):
        self.stunden = h
        self.minuten = m
        self.sekunden = s

    def tick(self):
        if self.sekunden < 59:
            self.sekunden = self.sekunden + 1
        else:
            self.sekunden = 0
            if self.minuten < 59:
                self.minuten = self.minuten + 1
            else:
                self.minuten = 0
                if self.stunden < 23:
                    self.stunden = self.stunden + 1
                else:
                    self.stunden = 0
