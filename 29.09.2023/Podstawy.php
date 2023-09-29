<?php   //Znacznik otwierający PHP

//Typ boolean- Typ Prawda/Fałsz
$b1 = true;
$b2 = false;

//Typ integer- Typ liczby całkowitej
$i1 = 2137; //Decimal
$i2 = 0x45; //Hex
$i3 = 0420; //Octal
$i4 = 0b1000101;   //Binary

//Typ float- Liczba zmiennoprzecinkowa
$f1 = 69.420;

//Typ String
$s1 = 'Sample 1';
$s2 = "Sample 2 $i1";   //Z zawartością innej zmiennej

//Heredoc
$s3 = <<<LABEL
    asdasdasdasdasdasda
    adsadsadasdasdsdasd
    asdasdasdasdasdasda
LABEL;  //Można HTML

//Nowdoc
$s4 = <<<'NOW'
    sadasdasdasdasd
    asdasdasdasdsad
    asdasdasdasdasd
NOW;    //Niemożna HTML

echo "sadasdasdasda";   //Wyświetlenie infomracji na ekranie

echo "<br />";

echo $s1;

//Typy tablicowe
$arr = ['adadadad', 12345, 3.145];

//Tablica asocjacyjna- Tworzenie własnych kluczy w tablicy
$asoc = [
    'k1' => 82525,
    'q2' => 'asdsadds',
    5 => 3.685
];

//Tablica tablic
$arrOfArr = [
    ['12', 23456, 3.134],
    ['sasd', 'asdasd', 'asdasd']
];

//Typ obiektowy
$o1 = new stdClass();
$o1->attr = 4322434232;

//Funkcje
function f1(): void {
    echo "Hello World";
}

f1();   //Wywołanie funkcji

function f2(): void {   //Robi to samo co f1()
    echo "Hello World";
}

f2();

function f3($a1, $a2) { //Przyjmuje dwa parametry, aby dodawanie działało dać oba typy liczbowe
    echo $a1 + $a2;
}

function f4(int $a1, int $a2): void //Zdefiniowane typy
{
    echo $a1 + $a2;
}

function f5(string $a): string {    
    return $a . 'by f5()';  //Kropka oznacza połączenie dwóch tekstów
}