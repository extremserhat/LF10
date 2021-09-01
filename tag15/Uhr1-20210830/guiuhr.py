from tkinter import *

class GUIUhr(object):
    def __init__(self, uhr):
        # Referenzattribute zum Datenmodell
        self.uhr = uhr
        # Erzeugung des Fensters
        self.fenster = Tk()
        self.fenster.title("Uhr")
        self.fenster.geometry('120x110')
        # Anzeige der Uhr
        self.labelUhr = Label(master=self.fenster,
                             text=self.getUhrzeit(),
                             background="#FBD975")
        self.labelUhr.place(x=25, y=20, width=70, height=30)
        # Button zum Ticken
        self.buttonTick = Button(master=self.fenster,
                                text="tick",
                                command=self.Button_Tick_Click)
        self.buttonTick.place(x=10, y=80, width=100, height=20)

    def Button_Tick_Click(self):
        # Verarbeitung der Daten
        self.uhr.tick()
        # Anzeige der Daten
#        uhrzeit = str(f'{self.uhr.stunden:02d}:{self.uhr.minuten:02d}:{self.uhr.sekunden:02d}')
        self.labelUhr.config(text=self.getUhrzeit())

    def getUhrzeit(self):
        uhrzeit = str(f'{self.uhr.stunden:02d}:{self.uhr.minuten:02d}:{self.uhr.sekunden:02d}')
        return uhrzeit

        
