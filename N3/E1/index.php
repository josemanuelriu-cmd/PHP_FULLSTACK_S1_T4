<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-4_Level-3_ex-1</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body class="bg-gradient-to-br from-slate-100 to-slate-200 min-h-screen py-10">

<?php            
require_once('Cartelera.php'); 
require_once('Cinema.php'); 
require_once('Film.php'); 

$Film1 = new Film("Matrix",120,"Wachosky brothers");
$Film2 = new Film("Matrix II",140,"Wachosky brothers");
$Film3 = new Film("Matrix III",150,"Wachosky sisters");
$Film4 = new Film("Willow",126,"Ron Howard");

$Cinema1 = new Cinema("Nou cinema", "Bcn");
$Cinema1->AddFilm($Film1);
$Cinema1->AddFilm($Film2);
$Cinema1->AddFilm($Film3);
$Cinema1->AddFilm($Film4);

$Film5 = new Film("Rambo",110,"Ted Kotcheff");
$Film6 = new Film("Rambo II",100,"George P. Cosmatos");
$Film7 = new Film("Rambo III",120,"Peter MacDonald");
$Film8 = new Film("Matrix II",140,"Wachosky brothers");

$Cinema2 = new Cinema("Vell cinema", "Bcn");
$Cinema2->AddFilm($Film5);
$Cinema2->AddFilm($Film6);
$Cinema2->AddFilm($Film7);
$Cinema2->AddFilm($Film8);            

$Cartellera1 = new Cartellera();
$Cartellera1->AddCine($Cinema1);
$Cartellera1->AddCine($Cinema2);
?>

<div class="max-w-6xl mx-auto px-6">

    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-teal-600 mb-2">🎬 Cartellera de Cinemas</h1>
        <p class="text-gray-600">Gestió de pel·lículas per cinema</p>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
        <?php foreach ($Cartellera1->GetCinemes() as $cinema): ?>
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition duration-300">                
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-semibold text-gray-800">
                        🎥 <?php echo $cinema->GetName(); ?>
                    </h2>
                    <span class="text-sm bg-teal-100 text-teal-700 px-3 py-1 rounded-full">
                        <?php echo $cinema->GetCity(); ?>
                    </span>
                </div>

                <div class="text-gray-700 space-y-2 border-t pt-4">
                    <?php $cinema->ShowFilmsInformation(); ?>
                </div>

                <div class="mt-6 p-4 bg-teal-50 rounded-xl border border-teal-100">
                    <?php $cinema->ShowLargerFilm(); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php
        $LlistatPelicules = $Cartellera1->SearchForDirector("Wachosky brothers");
    ?>

    <div class="mt-6 bg-white rounded-2xl shadow-lg p-8">
        <h2 class="text-2xl font-semibold text-indigo-600 mb-6">
            🔎 Resultats de la cerca per director
        </h2>
        <?php if (count($LlistatPelicules) > 0): ?>
            <p class="mb-4 text-gray-700">
                Hem trobat <span class="font-bold text-indigo-600">
                <?php echo count($LlistatPelicules); ?>
                </span> pel·lículas:
            </p>
            <ul class="list-disc list-inside space-y-2 text-gray-800">
                <?php foreach ($LlistatPelicules as $peli): ?>
                    <li class="bg-indigo-50 px-4 py-2 rounded-lg">
                        <?php echo $peli; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p class="text-red-500 font-medium">
                No hem trobat cap pel·lícula d'aquest director.
            </p>
        <?php endif; ?>
    </div>
</div>
</body>
</html>