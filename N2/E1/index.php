<?php
/*
    Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.
    Ha de tenir un mètode que no faci altra cosa que tirar el dau.
    Crea també altre mètode que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.
    Després, amplia el programa per a poder tirar cinc daus de pòquer alhora.
    A més, volem que la classe PokerDice tingui un mètode que ens permeti veure la quantitat de tirades de TOTS els daus.
*/
    require_once('PokerDice.php');
    
    $Dau1 = new PokerDice();
    echo $Dau1->Throw();
    echo $Dau1->GetLastResult();
    echo $Dau1->Throw();
    echo $Dau1->Throw();
    echo $Dau1->GetLastResult();
    echo $Dau1->GetNumberOfThrows();
    

    $Dau2 = new PokerDice();
    echo $Dau2->Throw();
    $Dau3 = new PokerDice();
    echo $Dau3->Throw();
    $Dau4 = new PokerDice();
    echo $Dau4->Throw();
    $Dau5 = new PokerDice(); 
    echo $Dau5->Throw();

    echo $Dau1->GetNumberOfThrows();

?>