#-----------------------------------------------------------
# Datenmodell
#-----------------------------------------------------------

from uhr import *
uhr = Uhr()

#-----------------------------------------------------------
# GUI-Objekt
#-----------------------------------------------------------

from guiuhr import *
#uhr.stellen(23,59,55)
guiuhr = GUIUhr(uhr)

    
# Ereignisschleife
guiuhr.fenster.mainloop()
