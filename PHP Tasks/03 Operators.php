<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <ul>
        <li>Arithmetic Operators</li>
        <li>Assignment Operators</li>
        <li>Logical Operators</li>
        <li>Comparison Operators</li>
    </ul>

    <?php 
    $a=10;
    $b=2;
    $sum=$a+$b;
    $sub=$a-$b;
    $mul=$a*$b;
    $div=$a/$b;
    $mod=$a%$b;
    $exp=$a**$b;
    echo "Arithmatic Operators:- <br><br>";
    echo "Addition Operator '+',&nbsp;&nbsp;$sum=$a+$b <br>"; 
    echo "Substraction Operator '-',&nbsp;&nbsp;$sub=$a-$b <br>";
    echo "Multiplication Operator '*',&nbsp;&nbsp;$mul=$a*$b <br>";
    echo "Divisiion Operator '/',&nbsp;&nbsp;$div=$a/$b <br>";
    echo "Modulus Operator '%',&nbsp;&nbsp;$mod=$a%$b <br>";
    echo "Exponentitation Operator '**',&nbsp;&nbsp;$exp=$a**$b <br>";
    echo "Assignment Operators:-<br><br>";
    $a +=$b;
    echo "$a <br>";
    echo "Logical Operators:- <br><br>";
   var_dump($a==12&&$b==2);
    echo "<br>";
    var_dump($a==5||$b==2);
    echo "<br>";
    var_dump($a!=5);
    echo "<br>";
    var_dump($a==12xor$b==2);
    echo "<br><br>";
    echo "String Operators <br>";
    $txt1="Hello";
    $txt2=123;
    $txt1.=$txt2;
    echo $txt1;
    echo "<br>";
    echo $txt1.$txt2;
    ?>

</body>
</html>