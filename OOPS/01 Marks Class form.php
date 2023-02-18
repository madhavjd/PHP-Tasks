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
echo $obj->marks(isset($_POST['percentage']));
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="01 Marks Class form.php" method="post">
        <input type="text" name="percentage" placeholder="Enter Percentage"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>