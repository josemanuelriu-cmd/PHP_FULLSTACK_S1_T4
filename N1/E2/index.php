<?php
/*
    Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
    Defineix dues subclasses; 
        Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea amb un mètode.
*/

    require_once('Shape.php');
    require_once('Rectangle.php'); 
    require_once('Triangle.php'); 
    
    $Triangle = new Triangle(10, 8);
    $Triangle->ShowArea();

    $Rectangle = new Rectangle(10, 12);
    $Rectangle->ShowArea();
?>