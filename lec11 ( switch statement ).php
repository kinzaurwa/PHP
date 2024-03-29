<?php
echo "<h1> switch statement</h1>";

$weekdays= 4;

switch($weekdays){
    case 1:
        echo" today is monday";
        break;
    
    case 2:
        echo" today is tuesday";
        break;
    
    case 3:
        echo" today is wednesday";
        break;
    
    case 4:
        echo" today is thursday <br>";
        echo"and today is off from clg";

        break;
    
    case 5:
        echo" today is friday";
        break;
    
    case 6:
        echo" today is saturday";
        break;
    
    case 7:
        echo" today is sunday";
        break;
    
    default:
        echo" enter the valid week day";
       
    
}





?>