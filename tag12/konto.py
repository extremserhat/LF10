class Konto:
    """ Bank Kontoverwaltung """
    __geldbestand = 0 # Klassenvariable, existiert unabhängig von der Anzahl
                    # gebildeter Objekte nur einmal !!
    __kontozaehler = 4711  # entspricht einer zuletzt vergebenen Seriennummer

    def __init__(self, kontonummer, kontostand=0):
        # self.__kontonr = kontonummer
        Konto.__kontozaehler += 1
        self.__kontonr = str(Konto.__kontozaehler).zfill(8)
        self.__kontostand = kontostand

    def abheben(self, betrag):
        self.__kontostand -= betrag
        Konto.__geldbestand -= betrag

    def einzahlen(self, betrag):
        self.__kontostand += betrag
        Konto.__geldbestand += betrag

    def kontostand_anzeigen(self):
        print(self.__kontonr, "aktueller Kontostand: ", self.__kontostand)
        print("Geldbestand der Bank: ", Konto.__geldbestand)

    def kontostand_aktuell(self):
        return self.__kontostand
