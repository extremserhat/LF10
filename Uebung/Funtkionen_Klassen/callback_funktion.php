<?php

// Eine Beispiel - Callback - Funktion
function my_callback_function() {
    echo 'Hello World';
}

// Ein Beispiel - Callback - Methode
class MyClass {
    static function myCallbackMethod() {
        echo 'How are you?';
    }
}

// Typ 1: Einfaches Callback
call_user_func('my_callback_function');

// Typ 2: Statischer Methodenaufruf
call_user_func(array('MyClass', 'myCallbackMethod'));

// Typ 3: Aufruf einer Objektmethode
$obj = new MyClass();
call_user_func(array($obj, 'myCallbackMethod'));

// Typ 4: Statischer Methodenaufruf
call_user_func(('MyClass::myCallbackMethod'));

// Typ 5: Relativer statischer Methodenaufruf
class A {
    public static function who() 
    {
        echo "A\n";
    }
}

class B extends A {
    public static function who()
    {
        echo "B\n";
    }
}

call_user_func(array('B', 'parent::who')) // A

// Typ 6: Objekte die __invoke implementieren können als Callable verwendet werden
class C {
    public function __invoke($name)
    {
        echo 'Hello' , $name, "\n";
    }
}

$c = new C();
call_user_func($c, 'PHP!');


?>