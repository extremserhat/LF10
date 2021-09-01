#-----------------------------------------------------------
# Datenmodell
#-----------------------------------------------------------

from wuerfel import *
from guiwuerfel import *

wuerfel = Wuerfel()

guiwuerfel = GUIwuerfel(wuerfel)
guiwuerfel.fenster.mainloop()
