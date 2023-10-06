<?php

//Rodzaje tablic

//Tablica
$arr1 = [1,2,3,4,5,6];

var_dump($arr1); //Funkcja wypluwa zmienna tak jak widzi ją php

echo "<br />";

//Tablica asocjacyjna
$arr2 = [
    'k1' => 'v1',
    'k2' => 'v2',
    'papież' => 'kremowka',
    69 => 420,
    'jp2' => 2137
];

var_dump($arr2); 

echo "<br />";

//Tablica tablic
$arr3 = [
    [1,2,3,4,],
    [5,6,7,8,]
];

var_dump($arr3);

echo "<br />";

//Wyświetlanie tablicy - pętla for
echo "<ul>";

for ($i = 0; $i < count($arr1); $i++){
    echo "<li>{$arr1[$i]}</li>";
}

echo "</ul>";

//Wyświetlanie tablicy - pętla foreach
echo "<ul>";

foreach ($arr1 as $item){
    echo "<li>{$item}</li>";
}

echo "</ul>";

//Wyświetlanie tablicy z kluczami - pętla foreach
echo "<ul>";

foreach ($arr2 as $key => $item){
    echo "<li>{key} => {$item}</li>";
}

echo "</ul>";

//Wyświetlenie czegoś przy pomocy range w pętli foreach
foreach (range(1,10) as $i){
    echo $i . "<br />";
}
