<?php
 echo "<h1> CONTINUE AND BREAK STATEMENT </h1>";



//  (CONTINUE- STATEMENT) is used to miss or disappear a alue from an array:

echo "<h3>CONTINUE-STATEMENT</h3> ";

for($a=1;$a<=10;$a++){
    // echo"num: $a<br>";
    if($a==3){

        continue;   
    }
  echo"num: $a<br>";
}

echo"<br><br>";

 

for($b=11;$b<=20;$b++){
    if($b==15){
        continue;
    }
    echo"num: $b<br>";
}

echo"<br>";

echo"<h3>BREAK-STATEMENT</h3>";

for($c=1;$c<=10;$c++){
    if($c==5){
        break;
    }
    echo"num: $c<br>";
}







?>
