#-----------------------------------------------------------
# Datenmodell
#-----------------------------------------------------------

from wuerfel import *
wuerfel = Wuerfel()

#-----------------------------------------------------------
# GUI
#-----------------------------------------------------------

from tkinter import *

# Ereignisverarbeitung

def Button_Wuerfel_Click():
    # Verarbeitung der Daten
    wuerfel.werfen()
    # Anzeige der Daten
    labelWuerfel.config(text=str(wuerfel.augen))

# Erzeugung des Fensters
fenster = Tk()
fenster.title("Würfel")
fenster.geometry('120x90')
# Schriftfeld für den Würfel
labelWuerfel = Label(master=fenster,
                   text=str(wuerfel.augen),
                   background="#FBD975")
labelWuerfel.place(x=45, y=40, width=30, height=30)
# Button zum Auswerten
buttonWuerfel = Button(master=fenster,
                       text="Würfel werfen",
                       command=Button_Wuerfel_Click)
buttonWuerfel.place(x=10, y=80, width=100, height=20)
# Aktivierung des Fensters
fenster.mainloop()
