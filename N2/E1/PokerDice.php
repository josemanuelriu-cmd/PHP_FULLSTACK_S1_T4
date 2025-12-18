<?php
    class PokerDice {
        const FACES = ["As","K","Q","J","7","8"];
        public string $Result;
        public static int $Counter=0;

        public function Throw(): void {
            $this->Result = self::FACES[array_rand(self::FACES)] ; 
			self::$Counter++;
            return ;
        }                
        public function GetLastResult(): string {
            return "Últim resultat: " . $this->Result . "<br>";
        }
        public function GetNumberOfThrows(): string {
            return "El número total de tirades es: ". self::$Counter."<br>";
        }
    }
?>