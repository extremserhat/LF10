class Auto:
    def __init__(self, marke, farbe, kmStand=0, baujahr=0):
        self.marke = marke
        self.farbe = farbe
        self.kmStand = kmStand
        self.baujahr = baujahr


car1 = Auto("Audi","blau",98000,2015)
car2 = Auto("BMW","schwarz",46000, 2018)

car3 = Auto("Trabi","hellblau",80500)

print("der",car1.marke,"ist",car1.farbe,"und hat einen Kilometerstand von",car1.kmStand)

print("der",car2.marke,"ist",car2.farbe,"und hat einen Kilometerstand von",car2.kmStand) 
   
print("der",car3.marke,"ist",car3.farbe,"und hat einen Kilometerstand von",car3.kmStand)
print("der",car3.marke,"ist von",car3.baujahr)
