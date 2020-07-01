<?php

/* $search_value = 4;
$list_of_values = array(1,2,3,4,5);
$lenght = count($list_of_values);
$result = linear_search($search_value,$list_of_values,$lenght);
 */
/* function linear_search($s,$arr,$i){
    echo($s);
} */
 /* if ($result==-1){
    echo "NOT FOUND";
}

else{
    echo "THE POSITION OF ".$search_value."=".$result;
}

function linear_search($s,$arr,$l){
    for($i=0; $i<$l; $i++){
        if($s==$arr[$i]){
            return $i;
        }
    }
    return -1;
}  */
/* 
$search_values = 4;
$list_of_values= array(1,2,3,4,5);
$lenght = count($list_of_values);
$result= linear_search($search_values,$list_of_values,$lenght);

if($result==-1){
    echo "NOT FOUND";
}

else{
    echo "THE POSITION OF ".$search_values."=".$result;
}

function linear_search($s,$arr,$l){
    //echo($s);
    for($i=0; $i<$l; $i++){
        if($s==$arr[$i]){
            return $i;
        }
    }
    return -1;
}
 */

 $search_values= 4;
 $list_of_values = array(1,2,3,4,5);
 $lenght =count($list_of_values);
 $result=linear_search($search_values,$list_of_values,$lenght);

if($result==-1){
    echo "NOT FOUND";
}

else{
    echo "THE POSITION OF" .$search_values."=".$result;
}

function linear_search($s,$arr,$l){
    //echo ($s);
    for($i=0; $i<$l; $i++){
        if($s==$arr[$i]){
            return $i;
        }
    }
    return -1;
}







?>