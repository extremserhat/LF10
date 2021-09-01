class Jogger():
    """verwaltung der Zeiten"""

    def __init__(self, altersklasse, zeit=[]):
        self.ak = altersklasse
        self.zeiten = zeit # ist ein List Objekt

    def zeiterfassen(self, zeiten):
        self.zeiten += zeiten

    def test(self):
        print(self.zeiten)

# Hauptprogramm
Laeufer_1 = Jogger("M40")
print(Laeufer_1.ak)
print(Laeufer_1.zeiten)

Laeufer_1.zeiterfassen(["2:30"])

Laeufer_1.test()

Laeufer_1.zeiterfassen(["3:45", "3:10"])

Laeufer_1.test()

print()
print("vor POP")
print(Laeufer_1.zeiten)
print("POP")
print(Laeufer_1.zeiten.pop())
print("nach POP")
print(Laeufer_1.zeiten)
