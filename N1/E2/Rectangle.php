<?php          
    class Rectangle extends Shape {
        public function ShowArea(){
            $Result = $this->width * $this->high;
            echo "L'area del rectangle es: " . $Result . "<br>"; 
        }
    }
?>
