<?php

if (!isset($_POST['submit']))   {  //Jak odswiezymy to daje do glownej strony
    header('Location: ../');

    die;    //Dalszy kod sie nie wykonuje
}

if (!isset($_POST['email'], $_POST['message']))    {    //Sprawdzamy czy jest zdefiniowane pole od maila i od wiadomosci
    header('Location: ../contact.php?error=1');

    die;
}

$email = $_POST['email'];
$message = $_POST['message'];

if (empty($email) || empty($message))   {  //Sprawdza czy pola są puste, jak tak to zwraca error
    header('Location: ../contact.php?error=2');

    die;
}

if (strlen($message) < 20)  { //Sprawdza czy dlugosc tekstu jest mniejsza od 20, jak tak to zwraca error
    header('Location: ../contact.php?error=3');

    die;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {   //Czy email jest zle wpisany, jak to zwraca error
    header('Location: ..contact.php?error=4');

    die;
}

//  TODO: save to database

header('Location: ../contact.php?success=1');

?>