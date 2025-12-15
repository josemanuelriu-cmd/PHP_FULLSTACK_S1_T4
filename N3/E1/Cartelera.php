
<?php
    class Cartellera{
        public $Cinemas = [];

        public function AddCine(Cinema $Cinemas): void{
            $this->Cinemas[] = $Cinemas;
        }

        public function SearchForDirector(string $Director): array{
            echo "<br> Busquem a tota la cartellera si hi ha alguna película del director '$Director': <br>";
            $Result = [];
            foreach ($this->Cinemas as $Cine) {
                foreach($Cine->GetFilms() as $Pelicula)
                    if ($Pelicula->GetDirector() == $Director) {
                        //Falta abans d'afegir-la, veure si no la tenim ja
                        $Result [] = $Pelicula->GetNameFilm();
                    }
            }
            return $Result;
        }
    }
?>
