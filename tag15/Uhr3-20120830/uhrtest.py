#-----------------------------------------------------------
# Datenmodell
#-----------------------------------------------------------

from uhr import *
uhr = Uhr()

#-----------------------------------------------------------
# GUI-Objekt
#-----------------------------------------------------------

from guiuhr import *

#uhr.stellen(11,59,55)
guiuhr = GUIUhr(uhr)

# Beobachter festlegen
uhr.setBeobachter(guiuhr)

# Ereignisschleife starten
guiuhr.fenster.mainloop()
