<?php 
class Encapsulation{
    function multiplication($a,$b){
        return $a*$b;
    }
    function substraction($a,$b){
        return $a-$b;
    }
}
$obj = new Encapsulation;
echo  $obj->multiplication(10,11)."<br>";
echo $obj->substraction(15,13);
?>