<h1>loops </h>
<?php
//While loop 

$in = 0;
while ($in < 10 ){
    print $in  . "<br>";
    $in++;
}
?>
<?php
//Do while looop
$s = 5 ;
d0{
    print $s  . "<br>";
    $s++;
}while ($s < 15);
?>

<?php
  
//For loop 
for ($f=45;<55; $f++){
    print $f . "<br>";
}
?>

<?php

//Forreach 
$months = ["January", "February", "March" , "April" , "May" , "June" , "July" , "August" , "September" , "October" ,"Novermber" , "December"];
foreach($month AS $month){
    print $month . "<br>";
}
?>

<form action = "" >
<select name = "" id= "">
<option value ="">--months--</option>
<?php
foreach($month AS $month){
print "<option value=''>$month </option>";
}
?>
</select>
<select name="" id="">
<option value ="">--year--</option>
<?php
//while loop
$y = 2014;
while($y <2030){
    print "<option value=''> $y</option>";
    $y++;
}
?>
</select>




