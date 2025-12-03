<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-4_Level-1_ex-1</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div>
        <h1>POO nivell 1</h1>
        <!--
            Crea una classe que representi un empleat, amb atributs referits al seu nom i sou. 
            Defineix un mètode que rebi com a paràmetres el nom i el sou. 
            Planteja un segon mètode que imprimeixi el nom i un missatge que mostri si ha de pagar o no impostos (si el sou en supera 6000, paga impostos).
        -->
        <?php          

            class Employer {
                public string $name;
                public string $salary;
                
                public function __construct() {
                }   

                public function NewEmployer(string $Name, int $Salary): void {
                    $this->name = $Name;
                    $this->salary = $Salary;
                }

                public function ShowEmployerAndSalary(): void {
                    echo $this->name . "<br>";
                    if ($this->salary>6000) {
                        echo "Ha de pagar impostos<br>";
                    }
                    else{
                        echo "No ha de pagar impostos<br>";
                    }
                }
            }

            $Empleat1 = new Employer;
            $Empleat1->NewEmployer("Pepe", 2000);
            $Empleat1->ShowEmployerAndSalary();

            $Empleat2 = new Employer;
            $Empleat2->NewEmployer("Juan", 8000);
            $Empleat2->ShowEmployerAndSalary();            
        
        ?>
    </div>
</body>
</html>