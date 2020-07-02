<?php

$search_values= 4;
 $list_of_values = array(1,2,3,4,5);
 sort($list_of_values);
 $l=0;
 $r =count($list_of_values)-1;
 $result = binary_search($search_values,$list_of_values,$l,$r);

/* 
 if($result==-1){
    echo "NOT FOUND";
}

else{
    echo $result;
}

function binary_search($search_values,$arr,$l,$r){
    //echo ($r);
    while($l<=$r){
        $mid = floor(($l+$r)/2);
        if($arr[$mid]==$search_values){
            return $mid;
        }
        elseif($search_values>$arr[$mid]){
            $l= $mid + 1;
        }
        else{
            $r = $mid -1;
        }
    }
    return -1;
}
 */


if($result==-1){
    echo "not found";
}

else{
    echo $result;
}

function binary_search($search_values,$arr,$l,$r){

    while($l<=$r){
        $mid =floor(($l+$r)/2);
        if($arr[$mid]==$search_values){
            return $mid;
        }
        elseif($search_values>$arr[$mid]){
            $l= $mid + 1;
        }
        else{
            $r = $mid -1;
        }
    }
    return -1;
}






?>