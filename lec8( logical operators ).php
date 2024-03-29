<?php
echo "<h1> logical operators  </h1><br><br>";

echo "<h3> this is the (and-operation):</h3>";
# In ( AND-OPERATION ) both conditions must be true in order to print , if any of them( conditions ) is not ture it will not print.

$age=18;
$age=21;
if($age >= 18 && $age <= 21){
    echo " <b>(i):</b> u r eligable <br><br>";
}




$c=20;
$d=20;
if($c >= 20 && $d >= 30){
    echo "<b>(ii):</b> it will priint if both conditions are true";
}




$u=20;
$v=20;
if($u >= 20 AND $v >= 20){
    echo "<b>(iii):</b> it will also print by using name instead of symbol";
}




echo"<br> <br> <br>";







echo "<h3> this is the (OR-operation):</h3>";
# In ( OR-OPERATION ): agr dono conditions true hai , ye agr dono me sy koi ak b agr true hai to  print hoga lekin agr dono false hai phr print ni hoga is me (dono ye ksi ak ka true) hona zarori hai.

$e=10;
$f=20;
if($e >= 30 || $f <=20 ){
    echo "<b>(i):</b> it will print <br><br>";
}




$g=30;
$h=20;
if($g >= 30 || $h <=20 ){

    echo "<b>(ii):</b>  print <br><br>";

}
   


$i=40;
$j=20;
if($i <= 30 OR $j <=20 ){
    echo "<b>(iii):</b> it can also print by using name instead of the symbol ";
}




echo "<br><br><br>";






echo "<h3> this is the (OR-operation):</h3>";
# In ( NOT-OPERATION ): agr condition true hai, to ye hmy output (FALSE) dy ga , or agr condtion false hai to  output (true) hogii.

$p=10;
$m=20;
if(!($p<=$m )){
    echo "<b>(i):</b> it will print <br><br>";
}




$p=30;
$m=20;
if(!($p<=$m )){
    echo "<b>(ii):</b> it will print <br><br>";
}





echo "<br><br>";

echo "<hr>";





 ?>