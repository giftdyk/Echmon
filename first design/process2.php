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




$Name = $_POST['Name'];

$Class = $_POST['Class'];

$English = $_POST['English'];

$Maths = $_POST['Maths'] ;

$Igbo = $_POST['Igbo'];

$C_R_K = $_POST['C_R_K'];

$Biology = $_POST['Biology'];

$Physics= $_POST['Physics'];

$Chemistry = $_POST['Chemistry'];

$Business = $_POST['Business'];

$Civic = $_POST['Civic'];

$Social = $_POST['Social'];


?>
<p>Name :</p>
<input type="text" name="Name" value=" <?php  echo $Name; ?>">

<p>Class:</p>
<input type="text" name="Class" value=" <?php echo $Class; ?>">
 <p>English:</p>
<input type="text" name="English" value=" <?php echo $English; ?>">
<p>Maths :</p>
<input type="text" name="Maths" value=" <?php echo $Maths; ?>">
<p>C_R_K:</p>
<input type="text" name="C_R_K" value=" <?php echo $C_R_K; ?>">
<p>Biology:</p>
<input type="text" name="Biology" value=" <?php echo $Biology; ?>">
<p>Physics :</p>
<input type="text" name="Physics" value=" <?php echo $Physics; ?>">
<p>Chemistry :</p>
<input type="text" name="Chemistry" value=" <?php echo $Chemistry; ?>">
<p>Civic :</p>
<input type="text" name="Civic" value=" <?php  echo  $Civic; ?>">
<p>Social:</p>
<input type="text" name="Social" value=" <?php  echo  $Social; ?>">
<p>Igbo:</p>
<input type="text" name="Igbo" value=" <?php echo $Igbo; ?>">
<p>Business:</p>
<input type="text" name="Business" value=" <?php  echo  $Business; ?>">  


<br>
<br><br>


<?php
$average = [ $Biology, $Chemistry, $Civic,  $Igbo,  $Maths,  $C_R_K,  $English,  $Physics,  $Social, $Business ];
print "TOTAL : " .array_sum( $average);

 print " YOUR AVERAGE IS :" .array_sum($average)/count($average);
?>





</body>
</html>