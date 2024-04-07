<!DOCTYPE html>
<html>
<body>
<?php
class Guitarra{
  //atributo
  // Liseth Martinez Rueda
  var $marca;
  var $modelo;
  var $color;
  var $numcuerdas;
  //constructor
  function Guitarra($m,$mo,$c,$n){
     $this->marca = $m;
     $this->modelo = $mo;
     $this->color = $c;
     $this->numcuerdas = $n;
  }
  
    //metodo
    function Color(){
       echo "El color de la guitarra es : ".$this->color;
         echo "<br>";
       }
      
    function Marca(){
       echo "La marca de la guitarra es : ".$this->marca;
         echo "<br>";
       }
       function Modelo(){
       echo "La modelo de la guitarra es : ".$this->modelo;
         echo "<br>";
       }
       function NumCuerdas(){
       echo "La numero de cuerdas de la guitarra es : ".$this->numcuerdas;
         echo "<br>";
       }
}
$objeto1 = new Guitarra('Fender','Stratocaster','Colores vibrantes','diez cuerdas');
$objeto1->Color();
$objeto1->Marca();
$objeto1->Modelo();
$objeto1->NumCuerdas();

?> 
</body>
</html>
