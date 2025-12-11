<?php
    class Triangle extends Shape {
        public function ShowArea(){
            $Result = $this->width * $this->high / 2;
            echo "L'area del triange es: " . $Result . "<br>"; 
        }
    }
?>
