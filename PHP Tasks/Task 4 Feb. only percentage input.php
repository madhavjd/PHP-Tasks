<?php 
if($_REQUEST["percentage"]>=40 && $_REQUEST["percentage"]<60)
{
    echo "Pass Class";
}
elseif($_REQUEST["percentage"]>=60 && $_REQUEST["percentage"]<70)
{
    echo "First Class";
}
elseif($_REQUEST["percentage"]>=70)
{
    echo "Distinction";
}
else
{
    echo "You are fail";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <input type="number" name="percentage" id="">
    
</body>
</html>