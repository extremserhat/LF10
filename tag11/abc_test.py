

from abc import ABC, abstractmethod
# ------------------------------------
#
class SuperC(ABC):
    def __init__(self):
        pass

    @abstractmethod
    def interface01(self):
        pass
# ------------------------------------


class SubC(SuperC):
    def __init__(self):
        pass

    def interface01(self):
        print("Medthode der abstrakten Klasse wurde Implementiert!")
# ----------------------------


obj01 = SubC()
obj01.interface01()
# --------------------------------------------------------------------
