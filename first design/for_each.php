<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$color = array("red", "green", "orange");
foreach( $color as $value)
{
    echo $value;
    echo "<br>";
}



{
    $car = array("camery", "lexus", "toyota");

    echo $car[0]. "      ". $car[1]."               ". $car[2];
}







  $days = array("mon", "tues", "wed", "thurs", "fri");
    $dayslen = count($days);
    for($x = 0;  $x < $dayslen; $x++)
{
echo $days[$x];
 echo "<br>";
    }



?>
</body>
</html>