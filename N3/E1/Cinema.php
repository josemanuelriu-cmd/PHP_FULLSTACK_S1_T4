<?php
    class Cinema{
        public string $Name;
        public string $City;
        public array $Films = [];

        public function __construct(string $Name, string $City, array $Films = []) {
            $this->Name=$Name;
            $this->City=$City;                    
            $this->Films = $Films;
        }
        public function GetName(): string {
            return $this->Name;
        }
        public function GetCity(): string {
            return $this->City;
        }
        public function GetFilms(): array {
            return $this->Films;
        }
        public function ShowFilmsInformation(): void{
            
            if (empty($this->Films)) {
                echo "<br>No hi han películes actualmentm al cinema $this->Name.<br>";
                return;
            }
            echo "<br>En el cinema '$this->Name' hi han les películes: <br><br>";
            foreach ($this->Films as $id => $peli) {                        
                echo $id. "- Película: " . $peli->GetNameFilm();
                echo "  Duració: " . $peli->GetDuration();
                echo "  Director: " . $peli->GetDirector()."<br><br>";
            }
        }
        public function ShowLargerFilm(): void{
            $MaxDuration=0;
            $Duration=0;
            $NameMaxDuration="";
            $Name="";
            foreach ($this->Films as $id => $peli) {   
                $Duration=$peli->GetDuration();
                $Name=$peli->GetNameFilm();
                if ($Duration>$MaxDuration){
                    $NameMaxDuration=$Name;
                    $MaxDuration=$Duration;
                }
            }                    
            echo "La pelicula de major duració es: " . $NameMaxDuration."<br>";
        }
        public function AddFilm(Film $Films): void{
            $this->Films[] = $Films;
        }
    }
?>
