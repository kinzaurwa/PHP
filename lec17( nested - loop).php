<?php

echo"<h1> Nested - loop  </h1>";


// (NESTED -- LOOP) is used to represent ur data in the TABULAR- FORAM (rows $ tables);

for($a= 1;$a <= 100; $a = $a+10){

 for($b = $a; $b < $a + 10; $b++){

    echo "$b" ;

 }
 echo"<br>";
}


echo"<br><br><br><br><br>";



for($b=1 ; $b <= 200; $b = $b+10){
    // echo"$b <br>";
   for($c = $b ; $c < $b+10; $c++){

    echo"$c";

   }

    echo"<br>"; 
}




?>