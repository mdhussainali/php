<?php
//associative_array

/* $price = array("shart"=>"200","panjabi"=>"300","topi"=>"500");
echo $price['shart']; */

$price = array("shart"=>"1400","pant"=>"200","panjabi"=>"500");
//echo $price['shart'];
//value and index jebabe ana hoy
/* foreach($price as $p=>$value){
    //echo $p.':'.$value;
    echo $value."<br>";
} */

/* foreach($price as $p=>$value){
    echo $p.':'.$value."<br>";
} */

foreach($price as $p=>$value){
    echo $p.':'.$value."<br>";
}

?>