# Funktion mit Funktionsparameter
def wertetabelle(f, x_werte):
    y_werte = []
    for w in x_werte:
        y_werte = y_werte + [(w, f(w))]
    return y_werte

# Callback-Funktion
def g(x):
    return x*x

# Callback-Funktion
def h(x):
    return x-1

# Aktualisierung des Funktionsparameters mit Callback-Funktionen
print ("Wertetabelle von g:")
print wertetabelle(g, range(-3, 4, 1))
print ("Wertetabelle von h:")
print wertetabelle(h, range(-4, 5, 1))
