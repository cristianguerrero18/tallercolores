<!DOCTYPE html>
<html>
<body>

<?php
class Reloj{
   //atributo
   // cristian Javier Guerrero Silva 
   var $hora; 
   var $minutos;
   var $segundos;
   var $marca; 
   //constructor
   function Reloj($h , $m , $s , $marca){
     $this->hora = $h ;
     $this->minutos = $m ; 
     $this->segundos = $s ; 
     $this->marca = $marca ; 
   }
   //metodo
    function MARCA () {
      echo"La marca del reloj es: ".$this->marca ; 
      echo"<br>";
   }
    function HoraAminutos() {
    $total = ($this->hora*60); 
   echo"En ".$this->hora." horas "." hay ".$total."minutos";
   echo"<br>";
    }
    
     function MinutosASegundos() {
     $total = ($this->minutos * 60);
     echo "En ".$this->minutos." minutos "." hay ".$total."segundos";
     echo"<br>";
   }
   function SegundosAminutos() {
     $total = ($this->segundos / 60);
     echo "En ".$this->segundos." segundos "." hay ".$total."minutos";
   }

}

$objeto1 = new Reloj(5, 10, 5,'rolex');
$objeto1->MARCA();
$objeto1->HoraAMinutos();
$objeto1->MinutosASegundos();
$objeto1->SegundosAminutos();

?> 

</body>
</html>
