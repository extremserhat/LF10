from random import randint

class Wuerfel(object):
    def __init__(self):
        self.augen = randint(1, 6)

    def werfen(self):
        self.augen = randint(1, 6)
        

print("--- Würfelspiel ---")
# soll solange werfen bis eine 6 gewürfelt wird
# am Ende soll die Anzahl der Würfe angezeigt werden
wiederholungen = 1000
lauf = 1
max_count = 0
first_win = 0
wurf_summe = 0
for x in range(wiederholungen):
    spiel = Wuerfel()
    wurf = 1
    while spiel.augen != 6 :
        spiel.werfen()
        wurf += 1
    wurf_summe += wurf
    mittelwert = wurf_summe / wiederholungen
    if max_count < wurf:
        max_count = wurf
    if wurf == 1:
        first_win += 1
        
    #print("Eine 6 nach {:d} mal würfeln".format(wurf))
    #print(f'Eine 6 nach {wurf:d} mal würfeln')
        
print(f'bei {wiederholungen:d} Spielen ...')
print(f'das längste Spiel: {max_count:d} Würfe bis zur 6')
print(f'beim ersten Wurf eine 6 kam {first_win:d} mal vor')
print(f'Im Mittel musste {mittelwert:.1f} mal gewürfelt werden um eine 6 zu erhalten')
