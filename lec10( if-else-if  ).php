<?php
echo "<h1> IF-ELSE-IF </h1>";


$per=65;
if($per >=80 && $per <=100){
    echo "merit";
}elseif($per >= 60 && $per < 80){
    echo "first division";
}elseif($per >= 45 && $per < 60){
    echo "second division";
}elseif($per >= 33 && $per < 45){
    echo "third division";
}elseif($per < 33){
    echo "fail";
}else{ echo "please enter valid percentage.";

}

?>