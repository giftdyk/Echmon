<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    






<?php




$name = $_POST['name'];

$dept = $_POST['dept'];

$level = $_POST['level'];

$cse211 = $_POST['cse211'] ;

$gns202= $_POST['gns202'];

$cht214= $_POST['cht214'];

$cse231 = $_POST['cse231'];

$cse241= $_POST['cse241'];

$cse201 = $_POST['cse201'];

$mat221 = $_POST['mat221'];

$gns201 = $_POST['gns201'];

$cse221 = $_POST['cse221'];
$cse251 = $_POST['cse251'];














  

// $c211 = $_POST['cse211'] ;

// $g202= $_POST['gns202'];

// $c214= $_POST['cht214'];

// $c231 = $_POST['c231'];

// $c241= $_POST['c241'];

// $c201 = $_POST['c201'];

// $m221 = $_POST['m221'];

// $g201 = $_POST['g201'];

// $c221 = $_POST['c221'];
// $c251 = $_POST['c251'];










?>
<p>Name :</p>
<input type="text" name="Name" value=" <?php  echo $name; ?>">

<p>DEPT:</p>
<input type="text" name="dept" value=" <?php echo $dept; ?>">
 <p>LEVEL:</p>
<input type="text" name="level" value=" <?php echo $level; ?>">
<p>CSE211:</p>
<input type="text" name="cse211" value=" <?php echo $cse211; ?>">
<p> GNS202:</p>
<input type="text" name="gns202" value=" <?php echo $gns202; ?>">
<p>CHT214:</p>
<input type="text" name="Biology" value=" <?php echo $cht214; ?>">
<p>CSE231 :</p>
<input type="text" name="cse231" value=" <?php echo $cse231; ?>">
<p>CSE241:</p>
<input type="text" name="cse241" value=" <?php echo $cse241; ?>">
<p> :</p>
<input type="text" name="cse201" value=" <?php  echo  $cse201; ?>">
<p>MAT221:</p>
<input type="text" name="mat221" value=" <?php  echo  $mat221; ?>">  

<p>GNS201:</p>
<input type="text" name="gns201" value=" <?php  echo  $gns201; ?>">
<p>CSE221:</p>
<input type="text" name="cse221" value=" <?php  echo  $cse221; ?>">
<p>CSE251:</p>
<input type="text" name="cse251" value=" <?php echo $cse251; ?>">


<br>
<br><br>


<?php

// $a = 4.0;
// $ab = 3.5;
// $b = 3.0;
// $bc = 2.5;
// $c = 2.0;
// $d = 1.5;
// $e = 1.0;
// $f = 0;



$gpa = [ $cse211, $gns202,  $cht214, $cse231, $cse241, $cse201, $mat221, $gns201 , $cse221, $cse251 ];
print "TOTAL : " .array_sum( $gpa);



// $average = [ $Biology, $Chemistry, $Civic,  $Igbo,  $Maths,  $C_R_K,  $English,  $Physics,  $Social, $Business ];
// print "TOTAL : " .array_sum( $average);

//  print " YOUR AVERAGE IS :" .array_sum($average)/count($average);
// ?>





</body>
</html>