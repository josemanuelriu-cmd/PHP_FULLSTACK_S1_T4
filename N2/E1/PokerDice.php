<?php
    class PokerDice {
        const FACES = ["As","K","Q","J","7","8"];
        public string $Result;
        public static int $Counter=0;

        public function Throw(): string {
            $this->Result = self::FACES[array_rand(self::FACES)] ; 
            $this->NewThrow();
            return "Tirada: " . $this->Result . "<br>";
        }                
        public function LastResult(): string {
            return "Últim resultat: " . $this->Result . "<br>";
        }
        public function NumberOfThrows(): string {
            return "El número total de tirades es: ". self::$Counter."<br>";
        }
        public function NewThrow(): void {
            self::$Counter++;
        }
    }
?>