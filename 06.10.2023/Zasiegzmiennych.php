<?php
$variable = 'aaaaa';

echo $variable . "<br />";

$variable = 'bbbb';

echo $variable . "<br />";

//Funkcja nie zmienia wartosci orginalnej funkcji, bo funkcja nie widzi zmiennej globalnej, zmienna nie zmieni sie
function a(){
    $variable = 'cccc'; 
}
a();
echo $variable . "<br />";

//Aby funkcja widziałą zmienna globalna trzeba dopisać global, zmienna zmieni sie
function b(){
    global $variable;
    $variable = 'dddd';
}
b();
echo $variable . "<br />";

//Definiujemy nowa zmienna i okreslamy ja jako global, po wywolaniu funkcji c musimy wypisac zmienna jako global
function c(){
    global $new;

    $new = 'new';
}
c();

echo $variable . "<br />";

global $new;

echo $new . "<br />";


include './other.php';

global $otherVariable;

echo $otherVariable . "<br />";

d();

$a = 5;

echo $a . "<br />";

//Próbujemy nadpisać zmienna, nienadpisze sie
function e($a){
    $a = 10;
}

e($a);

echo $a . "<br />";

//"&" Oznacza przekazanie orginału zmiennej do funkcji
function f(&$a){
    $a = 10;
}

f($a);

echo $a . "<br />";

//Jak jest w funkcji to jest w funkcji, jak nie to nie. Zawsze można wyciągnąć globalem.