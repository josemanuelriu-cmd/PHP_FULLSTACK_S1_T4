<?php
    class Film{
        public string $NameFilm;
        public int $Duration; //in minutes
        public string $Director;

        public function __construct(string $NameFilm, int $Duration, string $Director) {
            $this->NameFilm=$NameFilm;
            $this->Duration=$Duration;
            $this->Director=$Director;
        }  
        public function GetNameFilm():string{
            return $this->NameFilm;
        }
        public function GetDuration():int{
            return $this->Duration;
        }
        public function GetDirector():string{
            return $this->Director;
        }
    }
?>