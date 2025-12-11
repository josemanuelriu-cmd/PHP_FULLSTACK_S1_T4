<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-4_Level-3_ex-1</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div>
        <h1>POO nivell 3</h1>
        <!--
            Imagina que has de presentar el catàleg de pel·lícules d'una cadena de cinemes. Cada cinema té un nom, una població a on pertany, i un llistat de pel·lícules. 
            Cada pel·lícula té un nom, una duració, i un director/a.

            Es tracta de fer un programa que ens permeti enregistrar aquesta informació per a després:
            Per a cada cinema, mostrar les dades de cada pel·lícula.
            Per a cada cinema, mostrar la pel·lícula amb major duració.
            Implementa una funció/mètode que cerqui pel nom del director/a pel·lícules en diferents cinemes. No cal repetir pel·lícules.
            A més, pots aprofitar aquest exercici per treballar una bona presentació amb HTML+CSS que doni suport a la lògica.
        -->
        <?php
            class Cartellera{
                public $Cinemas = [];

                public function __construct() {
                }

                public function AddCine(Cinema $Cinemas): void{
                    $this->Cinemas[] = $Cinemas;
                }

            }

            class Cinema{
                public string $Name;
                public string $City;
                public $Films = [];

                public function __construct(string $Name, string $City) {
                    $this->Name=$Name;
                    $this->City=$City;                    
                }
                public function ShowFilmsInformation(): void{
                    
                    if (empty($this->Films)) {
                        echo "No hi han películes actualmentm al cinema $this->Name.<br>";
                        return;
                    }
                    echo "En el cinema '$this->Name' hi han les películes: <br><br>";
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
                    echo "La pelicula de major duració es:" . $NameMaxDuration."<br>";
                }
                public function AddFilm(Film $Films): void{
                    $this->Films[] = $Films;
                }
            }

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
                public function SetNameFilm(string $NameFilm):void{
                    $this->NameFilm=$NameFilm;
                }
                public function SetDuration(int $Duration):void{
                    $this->Duration=$Duration;
                }
                public function SetDirector(string $Director):void{
                    $this->Director=$Director;
                }
            }

            $Film1 = new Film("Matrix",120,"Wachosky broters");
            $Film2 = new Film("Matrix II",140,"Wachosky broters");
            $Film3 = new Film("Matrix III",150,"Wachosky sisters");
 
            $Cinema1 = new Cinema("Nou cinema", "Bcn");
            $Cinema1->AddFilm($Film1);
            $Cinema1->AddFilm($Film2);
            $Cinema1->AddFilm($Film3);

            $Cinema1->ShowFilmsInformation();

            $Cinema1->ShowLargerFilm();

            $Film4 = new Film("Rambo",110,"");
            $Film5 = new Film("Rambo II",100,"");
            $Film6 = new Film("Rambo III",120,"");

            $Cinema2 = new Cinema("Vell cinema", "Bcn");
            $Cinema2->AddFilm($Film4);
            $Cinema2->AddFilm($Film5);
            $Cinema2->AddFilm($Film6);
        
        ?>
    </div>
</body>
</html>