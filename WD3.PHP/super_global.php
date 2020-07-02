<?php
//$GLOBALS
//$_REQUEST
//$_POST
//$_GET


$x = 10;
$y = 20;
/* function multipication(){
    $mul = $GLOBALS['x'] * $GLOBALS['y'];
    echo $mul;
}
multipication(); */

/* function multipication(){
   $GLOBALS ['mul'] = $GLOBALS['x'] * $GLOBALS['y'];
  
}

multipication();
echo $mul; */


function multipication(){

    $GLOBALS['mul'] = $GLOBALS['x'] * $GLOBALS['y'];
}

multipication();
echo $mul;







?>