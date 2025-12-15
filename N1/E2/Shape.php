<?php 
    abstract class Shape {
        public string $width;
        public string $high;
        
        public function __construct($width,$high) {
            $this->width = $width;
            $this->high = $high;
        }
    }
?>