import math
# Test
"""x = 'silent'
print(x[2]+x[1]+x[0]+x[5]+x[3]+x[4])

# * Test 2

print(3 * 'un' + 'ium')"""

# Default
# !Fehler
# * Highlight
# ? Frage
# TODO: Aufgabe
# @myClass this myClass ist isolatet
# //dieser kommenter ist nicht gültig
# * Auskommentiert
""" 
def ask_ok(prompt, restries=4, reminder='Repeat!'):
    while True:
        ok = input(prompt)
        if ok in ('y', 'ye', 'yes'):
            return True
        if ok in ('n', 'no', 'nop', 'nope'):
            return False
        restries = restries - 1
        if restries < 0:
            raise ValueError('invalid user response')
        print('reminder')
"""

# * Arithmetische Operatoren

a = 10 
b = 20

a + b 