
<?php
    class Cartellera{
        public $Cinemas = [];

        public function AddCine(Cinema $Cinemas): void{
            $this->Cinemas[] = $Cinemas;
        }

        public function GetCinemes() {
            return $this->Cinemas;
        }

        public function SearchForDirector(string $Director): array{
            echo "<br><hr><br><br><p class='text-gray-600'>🔎 Busquem a tota la cartellera si hi ha alguna pel·lícula del director/a '$Director': </p>";
            $Result = [];
            foreach ($this->Cinemas as $Cine) {
                foreach($Cine->GetFilms() as $Pelicula)
                    if ($Pelicula->GetDirector() == $Director) {
                        $Result [] = $Pelicula->GetNameFilm();
                    }
            }
            $Result = array_unique($Result);
            return $Result;
        }
    }
?>
