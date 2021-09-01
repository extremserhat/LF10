import threading,time

class Timer(threading.Thread):
    def __init__(self, interval, routine):
        threading.Thread.__init__(self)
        self.interval = interval
        self.routine = routine

    def run(self):
        time.sleep(self.interval)
        self.routine()
               
class Uhr(object):
    def __init__(self):
        self.stunden = 0
        self.minuten = 0
        self.sekunden = 0
        self.aktiv = False
        self.beobachter = None

    def setBeobachter(self, beobachter):
        self.beobachter = beobachter

    def stellen(self, h, m, s):
        self.stunden = h
        self.minuten = m
        self.sekunden = s
        self.beobachter.anzeigeAktualisieren()

    def stoppen(self):
        self.aktiv = False

    def tick(self):
        if self.sekunden < 59:
            self.sekunden = self.sekunden + 1
        else:
            self.sekunden = 0
            if self.minuten < 59:
                self.minuten = self.minuten + 1
            else:
                self.minuten = 0
                if self.stunden < 23:
                    self.stunden = self.stunden + 1
                else:
                    self.stunden = 0
        self.beobachter.anzeigeAktualisieren()
        if self.aktiv:
            self.timer = Timer(1, self.tick)
            self.timer.start()

    def ticken(self):
        self.aktiv = True
        self.timer = Timer(1, self.tick)
        self.timer.start()
        
