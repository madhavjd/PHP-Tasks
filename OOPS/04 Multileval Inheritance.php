<?php
class first{
    function add($a,$b){
        return $a+$b;
    }
}
class second extends first{
    function average($x,$y){
        $sum=$this->add($x,$y);
        return $sum/2;
    }
}
class third extends second{
    function avgsqrt($c,$d){
        $sqavg=$this->average($c,$d);
        return $sqavg*$sqavg;
    }
}
$obj = new third;
echo "Sum of 15 and 25 is ".$obj->add(15,25)."<br>";
echo "Average of 15 and 25 is ".$obj->average(15,25)."<br>";
echo "Square of average is ".$obj->avgsqrt(15,25);
?>