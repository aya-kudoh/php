<?php
function check($num){
if($num == 42){
 echo("Answer to the Ultimate Question of Life, the Universe, and Everything");
   }
}
check(42);

$even_num = [];
$odd_num = [];

function sort_number($num){
    
    global $even_num, $odd_num;
    
    if($num % 2 ==0){
        array_push($even_num, $num);
    }else{
        array_push($odd_num, $num);
    }
}







?>