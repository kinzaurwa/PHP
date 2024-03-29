<?php
echo "<h1>end-if statement</h1>";
$a=12;
$b=20;

if($a>$b){

echo "A is biger num";

}


$c=20;
$d="20";
if($c===$d){
echo "both are equal numbers";
}


# this is the "second method" to write (end-if) but developers dn't use it;
$e=36;
$f=35;
if($e<$f):
echo "34 is smaller";
endif;



$g=1;
$h=2;
if($g<=$h){
    echo "g is smaller or equal to h";
}

 echo"<hr>";

?>