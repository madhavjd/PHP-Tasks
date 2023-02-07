<?php
if($_POST['submit'])
{
    $maths=$_POST['maths'];
    $science=$_POST['science'];
    $english=$_POST['english'];
    $computer=$_POST['computer'];
    $total=($maths+$science+$english+$computer);
    $percentage=$total/4;
    echo "Total marks is $total <br>";
    echo "percentage is $percentage % <br>";
    if($total>=50)
    {
        echo "Congratulation you are pass";
    }
    else
    {
        echo "Try again";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Four Marks Input</title>
</head>
<body>
    <form method="post">
        <tr>
            <td>
                <input type="text" name="maths" placeholder="Enter Maths marks" id=""/><br>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="science" placeholder="Enter Science marks" id=""><br>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="english" placeholder="Enter English marks" id=""><br>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="computer" placeholder="Enter Computer marks" id=""><br>
            </td>
        </tr>
        <tr>
<td> 
    <input type="submit" name="submit" value="Submit"/>
</td>
</tr>
    </form>
</body>
</html>