<?php

class Employee {
    public string $name;
    public string $salary;
    
    public function __Construct(string $Name, int $Salary) {
        $this->name = $Name;
        $this->salary = $Salary;
    }

    public function ShowEmployeeMustPayTaxes(): void {
        echo $this->name . "<br>";
        if ($this->salary>6000) {
        echo "Ha de pagar impostos<br>";
        }
        else{
            echo "No ha de pagar impostos<br>";
        }
    }
}
?>