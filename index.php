<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
 class Film{
     public $titolo;
     public $sottotitolo;
     public $regista;

     public function __construct($titolo) {
         $this -> titolo = $titolo;
     }
     public function getFullTitle(){
         if($this -> sottotitolo != ""){
            return $this -> titolo . ":" . $this -> sottotitolo;
         } else{
            return $this -> titolo . ":";
         }
     }
     public function __toString(){
         if( $this -> regista != "" ){
             return $this -> getFullTitle() . " | " . $this -> regista;
         }else{
            return $this -> getFullTitle() . " | ". "???";
         }
     }
 }

 $s1 = new Film("Matrix");
 $s2 = new Film("Fantozzi 2");
 $s3 = new Film("Peter Pan");

 $s1 -> sottotitolo = " ";
 $s2 -> sottotitolo = "il ritorno di fantozzi";
 $s3 -> sottotitolo = "il ritorno all'isola che non c'e'";

 $s1 -> regista = " ";
 $s2 -> regista = " ";
 $s3 -> regista = "Robin Budd";

 echo "s1: " . $s1 -> __toString() . "<br>";

 echo "s2: " . $s2 -> __toString() . "<br>";

 echo "s3: " . $s3 -> __toString() . "<br>";

?>
</body>
</html>