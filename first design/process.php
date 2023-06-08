<!DOCTYPE html>
<html lang="en">
<head>






 <!-- $a = array_filter($a);
// if(count($a)) {
//     echo $average = array_sum($a)/count($a);
// } -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    





    <?php
        $name=$_POST['name'];
        $dept=$_POST['dept'];
        $level=$_POST['level'];
        $cse211=$_POST['cse211'];
        $gns202=$_POST['gns202'];
        $cht214=$_POST['cht214'];
        $cse231=$_POST['cse231'];
        $cse241=$_POST['cse241'];
        $cse201=$_POST['cse201'];
        $mat221=$_POST['mat221'];
        $gns201=$_POST['gns201'];
        $cse221=$_POST['cse221'];
        $cse251=$_POST['cse251'];

        
    ?>

    <p>Name:</p>
    <input type="text" name="name" value="<?php  echo $name; ?>">
    <p>Department:</p>
    <input type="text" name="dept" value="<?php  echo $dept; ?>">
    <p>Level:</p>
    <input type="text" name="level" value="<?php  echo $level; ?>">
    <p>CSE211:</p>
    <input type="text" name="cse211" value="<?php  echo $cse211; ?>">
    <input type="text" name="cse211" value="<?php if($cse211 >= 80){echo "Grade : A";}elseif($cse211 >= 70){echo "Grade : AB";}elseif($cse211 >= 60){echo "Grade : B";}elseif($cse211 >= 50){echo "Grade : BC";}elseif($cse211 >= 40){echo "Grade : C";}elseif($cse211 >= 30){echo "Grade : CD";}elseif($cse211 >= 20){echo "Grade : D";}elseif($cse211 >= 0){echo "Grade : F";} ?>">
    <p>GNS202</p>
    <input type="text" name="gns202" value="<?php  echo $gns202; ?>">
    <input type="text" name= "gns202" value="<?php if($gns202 >=80){echo "Grade : A";}elseif($gns202 >=70){echo "Grade : AB";}elseif($gns202 >= 60){echo "Grade : B";}elseif($gns202 >= 50){echo "Grade : BC";}elseif($gns202 >= 40){echo "Grade : C";}elseif($gns202 >= 30){echo "Grade : CD";}elseif($gns202 >= 20){echo "Grade : D";}elseif($gns202 >= 0){echo "Grade : F";} ?>">
    <p>cht214</p>
    <input type="text" name="cht214" value="<?php  echo $cht214; ?>">
    <input type="text" name= "cht214" value="<?php if($gns202 >=80){echo "Grade : A";}elseif($cht214 >=70){echo "Grade : AB";}elseif($cht214 >= 60){echo "Grade : B";}elseif($cht214 >= 50){echo "Grade : BC";}elseif($cht214 >= 40){echo "Grade : C";}elseif($cht214 >= 30){echo "Grade : CD";}elseif($cht214 >= 20){echo "Grade : D";}elseif($cht214 >= 0){echo "Grade : F";} ?>">
    <p>cse231</p>
    <input type="text" name="cse231" value="<?php  echo $cse231; ?>">
    <input type="text" name= "cse231" value="<?php if($cse231 >=80){echo "Grade : A";}elseif($cse231 >=70){echo "Grade : AB";}elseif($cse231 >= 60){echo "Grade : B";}elseif($cse231 >= 50){echo "Grade : BC";}elseif($cse231 >= 40){echo "Grade : C";}elseif($cse231 >= 30){echo "Grade : CD";}elseif($cse231 >= 20){echo "Grade : D";}elseif($cse231 >= 0){echo "Grade : F";} ?>">
<p>cse241</p>
<input type="text" name="cse241" value="<?php echo $cse241; ?>">
<input type="text" name="cse241" value="<?php if ($cse241 >= 80){echo "GRADE : A";}  elseif($cse241 >=70){echo "Grade : AB";}elseif($cse231 >= 60){echo "Grade : B";}elseif($cse241 >= 50){echo "Grade : BC";}elseif($cse241 >= 40){echo "Grade : C";}elseif($cse241 >= 30){echo "Grade : CD";}elseif($cse241 >= 20){echo "Grade : D";}elseif($cse241 >= 0){echo "Grade : F";} ?>">
 

<p>cse201</p>
<input type="text" name="cse241" value="<?php echo $cse201; ?>">
<input type="text" name="cse241" value="<?php if ($cse201 >= 80){echo "GRADE : A";}  elseif($cse201 >=70){echo "Grade : AB";}elseif($cse201 >= 60){echo "Grade : B";}elseif($cse201 >= 50){echo "Grade : BC";}elseif($cse201 >= 40){echo "Grade : C";}elseif($cse201 >= 30){echo "Grade : CD";}elseif($cse201 >= 20){echo "Grade : D";}elseif($cse201 >= 0){echo "Grade : F";} ?>">


<p>mat221</p>
<input type="text" name="mat221" value="<?php echo $mat221; ?>">
<input type="text" name="mat221" value="<?php if ($mat221 >= 80){echo "GRADE : A";}  elseif($mat221 >=70){echo "Grade : AB";}elseif($mat221 >= 60){echo "Grade : B";}elseif($mat221>= 50){echo "Grade : BC";}elseif($mat221 >= 40){echo "Grade : C";}elseif($mat221 >= 30){echo "Grade : CD";}elseif($mat221 >= 20){echo "Grade : D";}elseif($mat221 >= 0){echo "Grade : F";} ?>">

</body>
</html>