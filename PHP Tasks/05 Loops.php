<?php 
echo "<b>1. for loop</b>";
for ($i=0; $i < 10; $i++) 
{ 
    //Outer loop;
  for ($j=0; $j <= $i; $j++) 
    { //Inner Loop
        echo $j." ";
    }
    echo "<br>";
}
echo "<br><br>";
echo "<b>2. While Loop <br></b>";
$x = 1;
while($x<=10) {
  echo "The number is: $x <br>";
  $x++;
} 
echo "<br><br>";
echo "<b>3. Do While Loop <br></b>";
$a=1;
do{
echo "The number is: $a <br>";
$a++;
}while($a<=5);
echo "<br><br>";
echo "<b>3. For each Loop used for array  <br></b>";
echo "Following example output the values of the given array <br>";
$colors=array("red","green","blue","yellow");
foreach($colors as $value)
{
    echo "$value <br>";
}
echo "<br><br>";
echo "Following example output of both the keys and the values:- <br>";
$arr=["username"=>"madhav","password"=>"1234"];
foreach($arr as $x=>$value)
{
    echo "key is $x => value is $value <br>";
}
echo"<br>";
foreach($arr as $x=>$value)
{
    echo "$x = $value <br>";
}
?>