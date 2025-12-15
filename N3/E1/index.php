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
            require_once('Cartelera.php'); 
            require_once('Cinema.php'); 
            require_once('Film.php'); 
            $Film1 = new Film("Matrix",120,"Wachosky broters");
            $Film2 = new Film("Matrix II",140,"Wachosky broters");
            $Film3 = new Film("Matrix III",150,"Wachosky sisters");
 
            $Cinema1 = new Cinema("Nou cinema", "Bcn");
            $Cinema1->AddFilm($Film1);
            $Cinema1->AddFilm($Film2);
            $Cinema1->AddFilm($Film3);

            $Cinema1->ShowFilmsInformation();

            $Cinema1->ShowLargerFilm();

            $Film4 = new Film("Rambo",110,"Ted Kotcheff");
            $Film5 = new Film("Rambo II",100,"George P. Cosmatos");
            $Film6 = new Film("Rambo III",120,"Peter MacDonald");
            $Film7 = new Film("Matrix II",140,"Wachosky broters");

            $Cinema2 = new Cinema("Vell cinema", "Bcn");
            $Cinema2->AddFilm($Film4);
            $Cinema2->AddFilm($Film5);
            $Cinema2->AddFilm($Film6);
            $Cinema2->AddFilm($Film7);

            $Cinema2->ShowFilmsInformation();

            $Cartellera1 = new Cartellera();
            $Cartellera1->AddCine($Cinema1);
            $Cartellera1->AddCine($Cinema2);
            $LlistatPelicules = $Cartellera1->SearchForDirector("Wachosky broters");
            if (count($LlistatPelicules)>0) {
                echo "Hem trobat ". count($LlistatPelicules) . " pelicules. Son aquestes";
                echo "<ul>";
                foreach ($LlistatPelicules as $peli) {
                    echo "<li>".$peli."</li>";
                }
                echo "</ul>";
            }
            else {
                echo "No hem trobat cap película d'aquest director ";
            }
        
        ?>
    </div>
</body>
</html>