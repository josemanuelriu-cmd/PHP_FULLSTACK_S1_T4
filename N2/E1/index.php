<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-4_Level-2_ex-1</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div>
        <h1>POO nivell 2</h1>
        <!--
            Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.
            Ha de tenir un mètode que no faci altra cosa que tirar el dau.
            Crea també altre mètode que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.
            Després, amplia el programa per a poder tirar cinc daus de pòquer alhora.
            A més, volem que la classe PokerDice tingui un mètode que ens permeti veure la quantitat de tirades de TOTS els daus.
        -->
        <?php          

            class PokerDice {
                const VALUES = ["As","K","Q","J","7","8"];
                public string $Result;
                public static int $Counter=0;

                public function Throw(): string {
                    $this->Result = self::VALUES[array_rand(self::VALUES)] ; 
                    $this->NewThrow();
                    return "Tirada: " . $this->Result . "<br>";
                }                
                public function LastResult(): string {
                    return "Últim resultat: " . $this->Result . "<br>";
                }
                public function CountThrow(): string {
                    return "El número total de tirades es: ". self::$Counter."<br>";
                }
                public function NewThrow(): void {
                    self::$Counter++;
                }
                
            }
            
            $Dau1 = new PokerDice();
            echo $Dau1->Throw();
            echo $Dau1->LastResult();
            echo $Dau1->Throw();
            echo $Dau1->Throw();
            echo $Dau1->LastResult();
            echo $Dau1->CountThrow();
            

            $Dau2 = new PokerDice();
            echo $Dau2->Throw();
            $Dau3 = new PokerDice();
            echo $Dau3->Throw();
            $Dau4 = new PokerDice();
            echo $Dau4->Throw();
            $Dau5 = new PokerDice(); 
            echo $Dau5->Throw();

            echo $Dau1->CountThrow();
        
        ?>
    </div>
</body>
</html>