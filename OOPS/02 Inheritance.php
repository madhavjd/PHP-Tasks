<?php
class p{
    function add($x,$y,$z){
        return $x+$y;
    }
}
class c extends p{
    function avg($a,$b,$c){
        $sum=$this->add($a,$b,$c);
        return $sum/3;
    }
}
$obj = new c;
echo "Addition of 35,45 and 55 is ".$obj->add(35,45,55)."<br>";
echo "Average of 35,45 and 55 is ".$obj->avg(35,45,55);
?>