<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-4_Level-1_ex-2</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div>
        <h1>POO nivell 1</h1>
        <!--
            Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
            Defineix dues subclasses; 
                Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea amb un mètode.
        -->
        <?php          

            abstract class Shape {
                public string $width;
                public string $high;
                
                public function __construct($width,$high) {
                    $this->width = $width;
                    $this->high = $high;
                }                   
            }

            class Triangle extends Shape {
                public function ShowArea(){
                    $Result = $this->width * $this->high / 2;
                    echo "L'area del triange es: " . $Result . "<br>"; 
                }
            }

            class Rectangle extends Shape {
                public function ShowArea(){
                    $Result = $this->width * $this->high;
                    echo "L'area del rectangle es: " . $Result . "<br>"; 
                }
            }

            $Triangle = new Triangle(10, 8);
            $Triangle->ShowArea();

            $Rectangle = new Rectangle(10, 12);
            $Rectangle->ShowArea();                    
        
        ?>
    </div>
</body>
</html>