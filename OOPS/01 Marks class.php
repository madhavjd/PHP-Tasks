<?php
 class result
 {
   function marks($m) 
   {

       // The Nested Functions
       function fail() {
        return 'Soory You are fail';
       }
       function pass() {
        return 'You are pass';
       }
       function firstclass(){
           return 'First Class';
       }
       function distinction(){
           return 'Distinction';
       }
      
       // The Main Function Script
       if ($m>=40 && $m<60) 
       {
           return pass();
       }
       elseif($m>=60 && $m<70)
       {
           return firstclass();
       }
       elseif($m>=70) 
       {
           return distinction();
       }
       else
       {
           return fail();
       }
   }
}

$obj = new result;
echo $obj->marks(93);
?>