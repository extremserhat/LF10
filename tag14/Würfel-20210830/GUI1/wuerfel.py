from random import randint

class Wuerfel(object):
    def __init__(self):
        self.augen = 1

    def werfen(self):
        self.augen = randint(1, 6)
