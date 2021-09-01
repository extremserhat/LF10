#-----------------------------------------------------------
# GUI
#-----------------------------------------------------------

from tkinter import *

class GUIwuerfel(object):
    def __init__(self, wuerfel):
        self.wuerfel = wuerfel
        
        # Erzeugung des Fensters
        self.fenster = Tk()
        self.fenster.title("Würfel")
        self.fenster.geometry('120x110')
        # Schriftfeld für den Würfel
        self.labelWuerfel = Label(master=self.fenster,
                           text=str(self.wuerfel.augen),
                           background="#FBD975")
        self.labelWuerfel.place(x=45, y=40, width=30, height=30)
        # Button zum Auswerten
        self.buttonWuerfel = Button(master=self.fenster,
                               text="Würfel werfen",
                               command=self.Button_Wuerfel_Click)
        self.buttonWuerfel.place(x=10, y=80, width=100, height=20)

    # Ereignisverarbeitung

    def Button_Wuerfel_Click(self):
        # Verarbeitung der Daten
        self.wuerfel.werfen()
        # Anzeige der Daten
        self.labelWuerfel.config(text=str(self.wuerfel.augen))


