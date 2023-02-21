<?php
class Encapsulation{
    public $datamember = "Hello";
    function test(){
      echo "Sum is ";
    }
    function add($a,$b){
        echo $this->datamember."<br>";
        echo $this->test();
        return $a+$b;
    }
}
$obj= new Encapsulation;
echo $obj->add(10,2);
?>