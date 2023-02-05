<?php 
$percentage=63;
//If 
if($percentage>40)
{
    echo "pass";
}
//if else
if($percentage>40)
{
    echo "pass";
}
else
{
    echo "fail";
}
//nested if else
if($percentage>40)
{
    if($percentage>60 && $percentage<70)
    {
        echo "First Class";
    }
    elseif($percentage>70)
    {
        echo "Distinction";
    }
}
else 
{
    echo "Fail";
}
// If else if ladder
if($percentage>40 && $percentage<60)
{
    echo "pass";
}
elseif($percentage>60 && $percentage<70)
    {
        echo "First Class";
    }
elseif($percentage>70)
    {
        echo "Distinction";
    }
else 
{
    echo "Fail";
}
echo "<br><br>";
// Switch
$day = 5;
switch($day)
{
case "1":
    echo "Monday";
    break;
case "2":
    echo "Tuesday";
    break;
case "3":
    echo "Wednesday";
    break;
case "4":
    echo "Thursday";
    break;
case "5":
    echo "Friday";
    break;
case "6":
    echo "Saturday";
    break;
case "7":
    echo "Sunday";
    break;
default:
    echo "invalid input";
    break;
}
?>