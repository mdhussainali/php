<?php

//PROBLEM SOLV
/* 
Write a short program that prints each number from 1 to 100 on
 a new line. 

For each multiple of 3, print "Fizz" instead of the number. 

For each multiple of 5, print "Buzz" instead of the number. 

For numbers which are multiples of both 3 and 5, print "FizzBuzz"
 instead of the number. */

$str1 = "fizz";
$str2 = "buzz";
$str3 = "$str1.$str2";
//var_dump($str3);
//for($i=1;$i<=100;$i++){
   // echo $i."<br>";

   /* if($i%15==0){
    echo $str3."<br>";
   } 

   else if($i%3==0){
       echo $str1."<br>"; 
   }

   else if($i%5==0){
       echo $str2."<br>";
   }

   else{
       echo $i."<br>";
   }
} */

//echo $str3."<br>";
/* 
if($i%15==0){
    echo $str3."<br>";
}
else if($i%3==0){
    echo $str1."<br>";
}

else if($i%5==0){
    echo $str2."<br>";

}

else{
    echo $i."<br>";
} */


//echo $str2."<br>";
//var_dump($str2);
/* for($i=1;$i<=100;$i++){
    if($i%15==0){
        echo $str3."<br>";
    }
        else if($i%3==0){
            echo $str1."<br>";
        }
        else if($i%5==0){
            echo $str2."<br>";
        }

        else{
            echo $i."<br>";
        }
    }
 */


for($i=1;$i<=100;$i++){

    if($i%15==0){
        echo $str3."<br>";
    }

    else if($i%3==0){
        echo $str1."<br>";
    }
    else if($i%5==0){
        echo $str2."<br>";
    }

    else{
        echo $i."<br>";
    }
}

?>